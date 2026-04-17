<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;

class TelegramService
{
    private HttpClientInterface $client;
    private string $botToken;
    private string $chatId;
    private LoggerInterface $logger;

    public function __construct(HttpClientInterface $client, string $botToken, string $chatId, LoggerInterface $logger)
    {
        $this->client = $client;
        $this->botToken = $botToken;
        $this->chatId = $chatId;
        $this->logger = $logger;
    }

    public function envoyerAlerteBudget(string $message): void
    {
        // Sécurité : Éviter le crash si le paramétrage n'est pas encore fait.
        if (empty($this->botToken) || str_contains($this->botToken, 'secret_ici')) {
            $this->logger->warning('Telegram Bot Token non configuré. Alerte ignorée.');
            return;
        }

        if (empty($this->chatId) || str_contains($this->chatId, 'chat_id_ici')) {
            $this->logger->warning('Telegram Chat ID non configuré. Alerte ignorée.');
            return;
        }

        try {
            // L'URL officielle de l'API Telegram
            $url = sprintf('https://api.telegram.org/bot%s/sendMessage', $this->botToken);

            // On envoie la requête HTTP en POST de manière bloquante/directe pour le test
            $response = $this->client->request('POST', $url, [
                'verify_peer' => false, // Très important sur Windows/XAMPP local !
                'verify_host' => false, // Très important sur Windows/XAMPP local !
                'json' => [
                    'chat_id' => $this->chatId,
                    'text' => $message,
                    'parse_mode' => 'HTML' // Permet de mettre du texte en gras avec <b>
                ]
            ]);
            
            // On s'assure que la requête part vraiment (http-client est asynchrone par défaut)
            $content = $response->getContent();
            $this->logger->info("Alerte Telegram expédiée au chat ID: {$this->chatId}. Réponse : " . $content);

        } catch (\Exception $e) {
            // Afficher l'erreur exacte à l'écran !
            throw new \Exception("Erreur critique Telegram API : " . $e->getMessage());
        }
    }
}
