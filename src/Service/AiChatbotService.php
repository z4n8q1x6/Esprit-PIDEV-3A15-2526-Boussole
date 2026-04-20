<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class AiChatbotService
{
    private HttpClientInterface $client;
    private string $apiKey;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
        $this->apiKey = $_ENV['GEMINI_API_KEY'] ?? $_SERVER['GEMINI_API_KEY'] ?? 'dummy';
    }

    /**
     * Envoie un message au chatbot Gemini et retourne la réponse.
     */
    public function sendMessage(string $userMessage): string
    {
        if ($this->apiKey === 'dummy' || empty($this->apiKey)) {
            return "Désolé, la clé d'API de l'assistant n'est pas configurée.";
        }

        $systemPrompt = "Tu es l'assistant IA de la marketplace 'Boussole'. Ton rôle est d'aider les entreprises et franchises à trouver des informations ou des produits sur notre plateforme de manière courtoise, professionnelle et très concise (réponds en 2 ou 3 phrases maximum). N'utilise pas de formatage Markdown complexe.";

        try {
            $response = $this->client->request('POST', 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=' . $this->apiKey, [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'system_instruction' => [
                        'parts' => [
                            ['text' => $systemPrompt]
                        ]
                    ],
                    'contents' => [
                        [
                            'role' => 'user',
                            'parts' => [
                                ['text' => $userMessage]
                            ]
                        ]
                    ],
                    'generationConfig' => [
                        'temperature' => 0.7,
                        'maxOutputTokens' => 200,
                    ]
                ],
                'timeout' => 8.0,
            ]);

            $statusCode = $response->getStatusCode();
            if ($statusCode !== 200) {
                return "Désolé, je rencontre des difficultés techniques pour vous répondre en ce moment.";
            }

            $data = $response->toArray();
            
            if (isset($data['candidates'][0]['content']['parts'][0]['text'])) {
                return trim($data['candidates'][0]['content']['parts'][0]['text']);
            }
        } catch (\Exception $e) {
            return "Erreur technique: " . $e->getMessage();
        }

        return "Je n'ai pas bien compris votre demande.";
    }
}
