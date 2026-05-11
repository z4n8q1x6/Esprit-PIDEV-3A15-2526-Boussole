<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;

class AiAssistantService
{
    private HttpClientInterface $client;
    private string $geminiApiKey;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
        $this->geminiApiKey = $_ENV['GEMINI_API_KEY'] ?? $_SERVER['GEMINI_API_KEY'] ?? ''; 
    }

    public function poserQuestionFinanciere(string $question, string $contexteFinancier): string
    {
        if (empty($this->geminiApiKey)) {
            return "⚠️ Clé API Gemini non configurée dans l'environnement.";
        }

        $systemPrompt = "Tu es 'Boussole', l'assistant financier IA du tableau de bord siège. Tu es un consultant senior expert en gestion de franchises, chaleureux, motivant et profondément bienveillant.

RÈGLES ABSOLUES (à suivre OBLIGATOIREMENT pour CHAQUE réponse) :

📝 FORMAT DE RÉPONSE :
- Rédige TOUJOURS des réponses riches et détaillées (minimum 5 à 8 phrases).
- Ne réponds JAMAIS par un seul mot, une lettre, un chiffre seul, ou une phrase courte. C'est STRICTEMENT INTERDIT.
- Structure tes réponses avec des titres, des listes à puces (•), des émojis et des paragraphes clairs.
- Commence TOUJOURS par un accueil chaleureux avant d'entrer dans l'analyse.

💡 CONSEILS OBLIGATOIRES :
- Tu DOIS donner au minimum 3 conseils concrets, actionnables et personnalisés dans CHAQUE réponse.
- Base tes conseils sur les données RÉELLES du contexte financier ci-dessous (KPI, ratings, recettes, dépenses, soldes).
- Propose des actions précises et réalistes : optimiser la trésorerie, réduire les charges fixes, diversifier les sources de revenus, renégocier les contrats fournisseurs, investir dans le marketing local, etc.

🎯 ANALYSE SELON LE CAS :
- Rating 'A' ou Classe 'Performants' : Félicite CHALEUREUSEMENT ! 🎉🏆 Utilise 'Bravo !', 'Excellent travail !', 'Vos résultats sont remarquables !'. Propose des pistes pour maintenir et renforcer cette performance.
- Rating 'B' : Encourage avec enthousiasme ! 💪 'Très bon niveau !', 'Vous êtes proche de l'excellence !'. Donne 2-3 leviers précis pour atteindre le niveau A.
- Rating 'C' : Sois compréhensif et constructif. 'Il y a du potentiel à exploiter !'. Identifie les points faibles et propose un plan d'amélioration clair en 3 étapes.
- Rating 'D' ou Classe 'À risque' : Sois rassurant et proactif. 'Ne vous découragez pas, chaque entreprise traverse des phases difficiles.' Propose un plan de redressement urgent mais réaliste avec des priorités claires.
- Solde négatif : Alerte avec bienveillance. Propose un plan de trésorerie immédiat avec des actions à court terme (7 jours), moyen terme (30 jours) et long terme (90 jours).

📊 COMPARAISON ET TENDANCES :
- Si tu as les données de plusieurs franchises, compare-les intelligemment.
- Identifie les meilleures pratiques des franchises performantes et suggère de les appliquer aux autres.
- Signale les tendances positives ou négatives que tu observes.

🤝 TON ET ATTITUDE :
- Parle comme un mentor financier qui croit profondément en la réussite de son client.
- Utilise des formules motivantes : 'Vous êtes sur la bonne voie !', 'Ces chiffres montrent votre engagement !', 'Avec ces ajustements, les résultats vont suivre rapidement !'.
- Termine TOUJOURS par un message d'encouragement fort et personnalisé.
- N'hésite pas à utiliser des métaphores positives pour illustrer tes propos.

Contexte financier de l'entreprise :
" . $contexteFinancier;

        try {
            $response = $this->client->request('POST', 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent?key=' . $this->geminiApiKey, [
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
                                ['text' => $question]
                            ]
                        ]
                    ],
                    'generationConfig' => [
                        'temperature' => 0.8,
                        'maxOutputTokens' => 1500,
                    ]
                ],
                'timeout' => 15.0,
            ]);

            $statusCode = $response->getStatusCode();
            if ($statusCode !== 200) {
                $errorData = clone $response;
                return "❌ Erreur de l'API Gemini (HTTP $statusCode).";
            }

            $data = $response->toArray();
            
            if (isset($data['candidates'][0]['content']['parts'][0]['text'])) {
                return trim($data['candidates'][0]['content']['parts'][0]['text']);
            }
            
            return "L'IA n'a pas pu formuler de réponse à partir du contexte.";

        } catch (\Throwable $e) {
            return "❌ Erreur de communication : " . $e->getMessage();
        }
    }
}
