<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class FacePlusPlusService
{
    private const BASE_URL = 'https://api-us.faceplusplus.com/facepp/v3/';

    public function __construct(
        private HttpClientInterface $httpClient,
        private \Psr\Log\LoggerInterface $logger,
        private string $faceppKey,
        private string $faceppSecret,
        private string $faceppFaceSet
    ) {}

    /**
     * Detect a face from a base64 image and return the first face_token.
     */
    public function detectFace(string $base64Image): ?string
    {
        $base64Data = preg_replace('/^data:image\/\w+;base64,/', '', $base64Image);

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
            if (isset($data['faces'][0]['face_token'])) {
                return $data['faces'][0]['face_token'];
            }

            $this->logger->error('Face++ Detect failed: ' . json_encode($data));
            return null;
        } catch (\Exception $e) {
            $this->logger->error('Face++ Detect Exception: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Add a face_token to the global FaceSet.
     */
    public function addFaceToFaceSet(string $faceToken): bool
    {
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
            
            // If FaceSet doesn't exist, create it and try again
            if (isset($data['error_message']) && (str_contains($data['error_message'], 'FACESET_NOT_FOUND') || str_contains($data['error_message'], 'INVALID_OUTER_ID'))) {
                $this->logger->info('FaceSet not found, attempting to create: ' . $this->faceppFaceSet);
                $this->createFaceSet();
                // Avoid infinite recursion by checking a static flag if needed, but here we just try once more
                $response = $this->httpClient->request('POST', self::BASE_URL . 'faceset/addface', [
                    'body' => [
                        'api_key' => $this->faceppKey,
                        'api_secret' => $this->faceppSecret,
                        'outer_id' => $this->faceppFaceSet,
                        'face_tokens' => $faceToken
                    ]
                ]);
                $data = $response->toArray(false);
            }

            if (($data['face_added'] ?? 0) > 0) {
                return true;
            }

            $this->logger->error('Face++ AddFace failed: ' . json_encode($data));
            return false;
        } catch (\Exception $e) {
            $this->logger->error('Face++ AddFace Exception: ' . $e->getMessage());
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

            if (isset($data['results'][0])) {
                $result = $data['results'][0];
                if ($result['confidence'] >= $threshold) {
                    return $result['face_token'];
                }
            }
            
            if (isset($data['error_message'])) {
                $this->logger->error('Face++ Search failed: ' . json_encode($data));
            }
        } catch (\Exception $e) {
            $this->logger->error('Face++ Search Exception: ' . $e->getMessage());
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
            // Ignore if already exists
        }
    }
}
