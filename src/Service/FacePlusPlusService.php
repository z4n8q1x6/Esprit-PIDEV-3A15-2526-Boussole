<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class FacePlusPlusService
{
    private const BASE_URL = 'https://api-us.faceplusplus.com/facepp/v3/';

    public function __construct(
        private HttpClientInterface $httpClient,
        private string $faceppKey,
        private string $faceppSecret,
        private string $faceppFaceSet
    ) {}

    public function detectFace(string $base64Image): ?string
    {
        $base64Data = preg_replace('/^data:image\/\w+;base64,/', '', $base64Image);
        $logFile = __DIR__ . '/../../var/log/facepp_debug.log';

        $attempts = 0;
        $maxAttempts = 2;

        while ($attempts < $maxAttempts) {
            try {
                $response = $this->httpClient->request('POST', self::BASE_URL . 'detect', [
                    'body' => [
                        'api_key' => $this->faceppKey,
                        'api_secret' => $this->faceppSecret,
                        'image_base64' => $base64Data,
                        'return_landmark' => 0,
                        'return_attributes' => 'none'
                    ]
                ]);

                $data = $response->toArray(false);
                file_put_contents($logFile, date('[Y-m-d H:i:s] ') . "Detect Response: " . json_encode($data) . "\n", FILE_APPEND);

                if (isset($data['faces'][0]['face_token'])) {
                    return $data['faces'][0]['face_token'];
                }

                // Handle rate limit (Free Tier: 1 QPS)
                if (isset($data['error_message']) && str_contains($data['error_message'], 'CONCURRENCY_LIMIT_EXCEEDED')) {
                    $attempts++;
                    if ($attempts < $maxAttempts) {
                        sleep(1); // Wait 1s and retry
                        continue;
                    }
                }

                if (empty($data['faces'])) {
                    file_put_contents($logFile, date('[Y-m-d H:i:s] ') . "Detect: No face found in image.\n", FILE_APPEND);
                } else {
                    error_log('Face++ Detect failed: ' . json_encode($data));
                }
                
                return null;
            } catch (\Exception $e) {
                file_put_contents($logFile, date('[Y-m-d H:i:s] ') . "Detect Exception: " . $e->getMessage() . "\n", FILE_APPEND);
                
                $attempts++;
                if ($attempts < $maxAttempts) {
                    sleep(1);
                    continue;
                }
                return null;
            }
        }
        return null;
    }

    public function addFaceToFaceSet(string $faceToken): bool
    {
        $logFile = __DIR__ . '/../../var/log/facepp_debug.log';
        try {
            $response = $this->httpClient->request('POST', self::BASE_URL . 'faceset/addface', [
                'body' => [
                    'api_key' => $this->faceppKey,
                    'api_secret' => $this->faceppSecret,
                    'outer_id' => $this->faceppFaceSet,
                    'face_tokens' => $faceToken
                ]
            ]);

            $data = $response->toArray(false);
            file_put_contents($logFile, date('[Y-m-d H:i:s] ') . "AddFace Response: " . json_encode($data) . "\n", FILE_APPEND);
            
            // Handle rate limit (Free Tier: 1 QPS) or missing FaceSet
            $retry = false;
            if (isset($data['error_message'])) {
                if (str_contains($data['error_message'], 'FACESET_NOT_FOUND') || str_contains($data['error_message'], 'INVALID_OUTER_ID')) {
                    $this->createFaceSet();
                    $retry = true;
                } elseif (str_contains($data['error_message'], 'CONCURRENCY_LIMIT_EXCEEDED')) {
                    $retry = true;
                }
            }

            if ($retry) {
                sleep(1); // Wait to respect QPS limit
                
                $response = $this->httpClient->request('POST', self::BASE_URL . 'faceset/addface', [
                    'body' => [
                        'api_key' => $this->faceppKey,
                        'api_secret' => $this->faceppSecret,
                        'outer_id' => $this->faceppFaceSet,
                        'face_tokens' => $faceToken
                    ]
                ]);
                $data = $response->toArray(false);
                file_put_contents($logFile, date('[Y-m-d H:i:s] ') . "AddFace (Retry) Response: " . json_encode($data) . "\n", FILE_APPEND);
            }

            if (($data['face_added'] ?? 0) > 0) {
                return true;
            }

            error_log('Face++ AddFace failed: ' . json_encode($data));
            return false;
        } catch (\Exception $e) {
            file_put_contents($logFile, date('[Y-m-d H:i:s] ') . "AddFace Exception: " . $e->getMessage() . "\n", FILE_APPEND);
            return false;
        }
    }

    /**
     * Search for the closest face in the FaceSet from a base64 image.
     * Returns the matching face_token if confidence is high enough.
     */
    public function searchFace(string $base64Image, float $threshold = 80.0): ?string
    {
        $base64Data = preg_replace('/^data:image\/\w+;base64,/', '', $base64Image);
        $logFile = __DIR__ . '/../../var/log/facepp_debug.log';

        try {
            $response = $this->httpClient->request('POST', self::BASE_URL . 'search', [
                'body' => [
                    'api_key' => $this->faceppKey,
                    'api_secret' => $this->faceppSecret,
                    'outer_id' => $this->faceppFaceSet,
                    'image_base64' => $base64Data
                ]
            ]);

            $data = $response->toArray(false);
            file_put_contents($logFile, date('[Y-m-d H:i:s] ') . "Search Response: " . json_encode($data) . "\n", FILE_APPEND);

            // Handle missing FaceSet during search
            if (isset($data['error_message']) && (str_contains($data['error_message'], 'FACESET_NOT_FOUND') || str_contains($data['error_message'], 'INVALID_OUTER_ID'))) {
                $this->createFaceSet();
                sleep(1);
                
                $response = $this->httpClient->request('POST', self::BASE_URL . 'search', [
                    'body' => [
                        'api_key' => $this->faceppKey,
                        'api_secret' => $this->faceppSecret,
                        'outer_id' => $this->faceppFaceSet,
                        'image_base64' => $base64Data
                    ]
                ]);
                $data = $response->toArray(false);
                file_put_contents($logFile, date('[Y-m-d H:i:s] ') . "Search (Retry) Response: " . json_encode($data) . "\n", FILE_APPEND);
            }

            if (isset($data['results'][0])) {
                $result = $data['results'][0];
                if ($result['confidence'] >= $threshold) {
                    return $result['face_token'];
                }
            }
            
            if (isset($data['error_message'])) {
                error_log('Face++ Search failed: ' . json_encode($data));
            }
        } catch (\Exception $e) {
            file_put_contents($logFile, date('[Y-m-d H:i:s] ') . "Search Exception: " . $e->getMessage() . "\n", FILE_APPEND);
        }

        return null;
    }

    private function createFaceSet(): void
    {
        try {
            $this->httpClient->request('POST', self::BASE_URL . 'faceset/create', [
                'body' => [
                    'api_key' => $this->faceppKey,
                    'api_secret' => $this->faceppSecret,
                    'outer_id' => $this->faceppFaceSet,
                    'display_name' => 'Boussole Users'
                ]
            ]);
        } catch (\Exception $e) {
            // Ignore errors here
        }
    }
}
