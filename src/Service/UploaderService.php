<?php

namespace App\Service;

use Cloudinary\Api\Upload\UploadApi;
use Cloudinary\Configuration\Configuration;
use RuntimeException;

class UploaderService
{
    private UploadApi $uploadApi;
    public function __construct(
        private readonly ?string $cloudinaryUrl,
        private readonly ?string $cloudinaryCaBundle = null,
    )
    {
        $this->configureCaBundle();

        if (trim((string) $this->cloudinaryUrl) === '') {
            throw new RuntimeException('CLOUDINARY_URL is not configured.');
        }

        $configuration = Configuration::fromCloudinaryUrl($this->cloudinaryUrl);
        $configuration->validate();

        $this->uploadApi = new UploadApi($configuration);
    }

    /**
     * Uploads a file to Cloudinary
     * * @param string $path The local path to the temporary file
     * @return string The secure URL of the uploaded file
     */
    public function uploadPdf(string $path): string
    {
        $result = $this->uploadApi->upload($path, [
            'resource_type' => 'raw',
            'folder' => 'boussole/reports',
        ]);

        return $result['secure_url'];
    }

    private function configureCaBundle(): void
    {
        $candidates = array_unique(array_filter([
            trim((string) $this->cloudinaryCaBundle),
            (string) ini_get('curl.cainfo'),
            (string) ini_get('openssl.cafile'),
            __DIR__ . '/../../cacert.pem',
            'C:/wamp64/cacert.pem',
            'C:/xampp/apache/bin/curl-ca-bundle.crt',
            'C:/xampp/php/extras/ssl/cacert.pem',
        ]));

        foreach ($candidates as $candidate) {
            if (!is_file($candidate)) {
                continue;
            }

            ini_set('curl.cainfo', $candidate);
            ini_set('openssl.cafile', $candidate);
            putenv("CURL_CA_BUNDLE=$candidate");
            putenv("SSL_CERT_FILE=$candidate");

            return;
        }
    }
}
