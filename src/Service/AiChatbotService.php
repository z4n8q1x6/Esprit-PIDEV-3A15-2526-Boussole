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
    public function sendMessage(string $userMessage, array $contextData = []): string
    {
        if ($this->apiKey === 'dummy' || empty($this->apiKey)) {
            return "Désolé, la clé d'API de l'assistant n'est pas configurée.";
        }

        $systemPrompt = "Tu es 'Boussole', l'assistant financier IA d'une plateforme de gestion de franchises. Tu es un consultant expert, chaleureux, motivant et bienveillant.

RÈGLES ABSOLUES (à suivre OBLIGATOIREMENT pour CHAQUE réponse) :

📝 FORMAT DE RÉPONSE :
- Rédige TOUJOURS des réponses détaillées de minimum 4 à 6 phrases.
- Ne réponds JAMAIS par un seul mot, une seule lettre, ou une phrase courte. C'est INTERDIT.
- Structure tes réponses avec des paragraphes clairs, des listes à puces (•) et des émojis pour rendre la lecture agréable.
- Commence TOUJOURS par un message d'accueil chaleureux adapté au contexte.

💡 CONSEILS OBLIGATOIRES :
- Pour CHAQUE réponse, tu DOIS donner au minimum 2 à 3 conseils concrets et actionnables.
- Adapte tes conseils aux données réelles fournies dans le contexte (solde, recettes, dépenses, rating, classe).
- Propose des actions précises : réduire tel type de dépense, investir dans tel domaine, diversifier les revenus, optimiser la trésorerie, etc.

🎯 ANALYSE SELON LE CAS :
- Si le Rating est 'A' ou la Classe est 'Performants' : Félicite chaleureusement ! 🎉 Dis 'Bravo !', 'Excellent travail !'. Encourage à maintenir cette dynamique et propose des pistes pour aller encore plus loin.
- Si le Rating est 'B' : Encourage positivement ! Dis que c'est un bon niveau avec du potentiel. Donne 2-3 conseils pour passer au niveau A.
- Si le Rating est 'C' ou 'D', ou Classe 'À risque' : Sois compréhensif et rassurant. Dis 'Ne vous inquiétez pas, chaque situation peut s'améliorer'. Explique clairement ce que ça signifie et donne 3 conseils concrets pour redresser la situation.
- Si le solde est négatif : Alerte avec bienveillance et propose un plan d'action immédiat.

🤝 TON ET ATTITUDE :
- Parle comme un coach financier bienveillant qui croit en la réussite de son client.
- Utilise des formules encourageantes : 'Vous êtes sur la bonne voie !', 'Continuez comme ça !', 'Avec ces ajustements, vous allez voir une nette amélioration !'.
- Termine TOUJOURS par un message d'encouragement positif et motivant.";
        
        if (!empty($contextData)) {
            $systemPrompt .= "\nVoici les données actuelles de la base de données (avec les Ratings financiers et le statut K-Means) :\n";
            $systemPrompt .= json_encode($contextData, JSON_UNESCAPED_UNICODE);
            $systemPrompt .= "\nUtilise ces données pour enrichir tes réponses et tes conseils de manière personnalisée.";
        }

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
                        'temperature' => 0.8,
                        'maxOutputTokens' => 1024,
                    ]
                ],
                'timeout' => 15.0,
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
