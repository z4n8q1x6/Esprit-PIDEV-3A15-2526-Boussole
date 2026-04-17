<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;

class AiAssistantService
{
    private HttpClientInterface $client;
    private string $huggingFaceApiKey;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
        $this->huggingFaceApiKey = $_ENV['HUGGINGFACE_API_KEY'] ?? ''; 
    }

    public function poserQuestionFinanciere(string $question, string $contexteFinancier): string
    {
        if (empty($this->huggingFaceApiKey) || str_contains($this->huggingFaceApiKey, 'ton_vrai_token_ici')) {
            return "⚠️ Clé API Hugging Face non configurée.";
        }

        try {
            $response = $this->client->request('POST', 'https://router.huggingface.co/hf-inference/models/timpal0l/mdeberta-v3-base-squad2', [
                'verify_peer' => false,
                'verify_host' => false,
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->huggingFaceApiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'inputs' => [
                        'question' => $question,
                        'context' => $contexteFinancier,
                    ]
                ]
            ]);

            // Récupérer le status code pour déboguer plus facilement
            $statusCode = $response->getStatusCode();
            $data = $response->toArray(false); // false pour ne pas jeter d'exception si HTTP != 200

            // Gestion d'erreur de token ou autre (ex: "Invalid username or password.")
            if ($statusCode !== 200) {
                $errorMsg = $data['error'] ?? 'Vérifiez le token API ou le statut du modèle.';
                return "❌ Erreur de l'API (HTTP $statusCode) : " . $errorMsg;
            }

            return $data['answer'] ?? "L'IA n'a pas pu trouver de réponse exacte dans le contexte.";

        } catch (\Throwable $e) {
            return "❌ Erreur de communication : " . $e->getMessage();
        }
    }
}
