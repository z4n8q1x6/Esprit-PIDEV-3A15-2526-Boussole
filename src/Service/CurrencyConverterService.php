<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\Cache\ItemInterface;

class CurrencyConverterService
{
    private HttpClientInterface $httpClient;
    private string $apiKey;
    private CacheInterface $cache;

    // Les devises internationales proposées dans le dropdown
    private const DEVISES = ['EUR', 'USD', 'GBP', 'CAD'];

    public function __construct(HttpClientInterface $httpClient, string $exchangeRateApiKey, CacheInterface $cache)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $exchangeRateApiKey;
        $this->cache = $cache;
    }

    /**
     * Convertit un montant en TND vers EUR, USD, GBP et CAD simultanément
     * en utilisant le taux de change en temps réel de l'API ExchangeRate-API.
     *
     * @param float $montantTND Le montant en Dinar Tunisien à convertir
     *
     * @return array<string, array{montant: float, taux: float, symbole: string}>|null
     */
    public function convertirDepuisTND(float $montantTND): ?array
    {
        // Mise en cache des taux de change pour 1 heure (3600 secondes)
        $rates = $this->cache->get('api_exchange_rates_tnd', function (ItemInterface $item) {
            $item->expiresAfter(3600);
            try {
                $url = sprintf('https://v6.exchangerate-api.com/v6/%s/latest/TND', $this->apiKey);
                
                // Un timeout strict pour éviter de bloquer la page de dashboard si l'API est lente
                $response = $this->httpClient->request('GET', $url, [
                    'timeout' => 1.5,
                    'verify_peer' => false,
                    'verify_host' => false,
                ]);
                $data = $response->toArray();
                
                if ($data['result'] !== 'success') {
                    return null;
                }
                return $data['conversion_rates'];
            } catch (\Exception $e) {
                return null;
            }
        });

        if (!$rates) {
            return null;
        }

        $symboles = [
            'EUR' => '€',
            'USD' => '$',
            'GBP' => '£',
            'CAD' => 'C$',
        ];

        $result = [];
        foreach (self::DEVISES as $devise) {
            if (!isset($rates[$devise])) {
                continue;
            }
            $taux = (float) $rates[$devise];
            $result[$devise] = [
                'montant' => round($montantTND * $taux, 2),
                'taux' => $taux,
                'symbole' => $symboles[$devise],
            ];
        }

        return !empty($result) ? $result : null;
    }
}
