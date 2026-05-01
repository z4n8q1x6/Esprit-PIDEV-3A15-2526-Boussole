<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CurrencyConverterService
{
    private HttpClientInterface $httpClient;
    private string $apiKey;

    // Les devises internationales proposées dans le dropdown
    private const DEVISES = ['EUR', 'USD', 'GBP', 'CAD'];

    public function __construct(HttpClientInterface $httpClient, string $exchangeRateApiKey)
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $exchangeRateApiKey;
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
        try {
            $url = sprintf(
                'https://v6.exchangerate-api.com/v6/%s/latest/TND',
                $this->apiKey
            );

            $response = $this->httpClient->request('GET', $url);
            $data = $response->toArray();

            if ($data['result'] !== 'success') {
                return null;
            }

            $rates = $data['conversion_rates'];

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
                    'symbole' => $symboles[$devise] ?? $devise,
                ];
            }

            return !empty($result) ? $result : null;
        } catch (\Exception $e) {
            return null;
        }
    }
}
