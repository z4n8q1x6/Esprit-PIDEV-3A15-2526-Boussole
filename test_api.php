<?php
require 'vendor/autoload.php';

$dotenv = new \Symfony\Component\Dotenv\Dotenv();
$dotenv->load(__DIR__.'/.env');

$client = \Symfony\Component\HttpClient\HttpClient::create();
$response = $client->request('POST', 'https://router.huggingface.co/hf-inference/models/timpal0l/mdeberta-v3-base-squad2', [
    'verify_peer' => false,
    'verify_host' => false,
    'headers' => [
        'Authorization' => 'Bearer ' . $_ENV['HUGGINGFACE_API_KEY'],
        'Content-Type' => 'application/json',
    ],
    'json' => [
        'inputs' => [
            'question' => 'Est-ce que la franchise Sousse est bénéficiaire ?',
            'context' => 'La franchise Sousse a généré 100 TND de recettes et 50 TND de dépenses. Son résultat net est de 50 TND, elle est bénéficiaire et a une note de A.',
        ]
    ]
]);

try {
    echo "STATUS: " . $response->getStatusCode() . "\n";
    print_r($response->toArray(false));
} catch (\Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}
