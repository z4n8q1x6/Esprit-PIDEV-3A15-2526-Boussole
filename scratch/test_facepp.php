<?php
require 'vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient;

$apiKey = '5hG5su943EpQmUSJY_hH2qhtFjACjf7K';
$apiSecret = 'NsmAiKTb8JDKlUMbMWg1DFSo0Fef3QK8';
$outerId = 'boussole_faceset';

$client = HttpClient::create();

echo "Testing Face++ Connection...\n";

try {
    // 1. Check FaceSet
    $response = $client->request('POST', 'https://api-us.faceplusplus.com/facepp/v3/faceset/getdetail', [
        'body' => [
            'api_key' => $apiKey,
            'api_secret' => $apiSecret,
            'outer_id' => $outerId
        ]
    ]);

    $data = $response->toArray(false);
    if ($response->getStatusCode() === 200) {
        echo "FaceSet exists! Found " . ($data['face_count'] ?? 0) . " faces.\n";
    } else {
        echo "FaceSet error: " . ($data['error_message'] ?? 'Unknown error') . "\n";
        
        if (isset($data['error_message']) && $data['error_message'] === 'FACESET_NOT_FOUND') {
            echo "Creating FaceSet...\n";
            $response = $client->request('POST', 'https://api-us.faceplusplus.com/facepp/v3/faceset/create', [
                'body' => [
                    'api_key' => $apiKey,
                    'api_secret' => $apiSecret,
                    'outer_id' => $outerId
                ]
            ]);
            echo "Create result: " . $response->getContent() . "\n";
        }
    }
} catch (\Exception $e) {
    echo "Fatal Error: " . $e->getMessage() . "\n";
}
