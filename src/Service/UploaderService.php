<?php

namespace App\Service;

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

class UploaderService
{
    private $uploadApi;

    public function __construct()
    {
        // This automatically reads the CLOUDINARY_URL from your .env file
        Configuration::instance();
        $this->uploadApi = new UploadApi();
    }

    /**
     * Uploads a file to Cloudinary
     * * @param string $path The local path to the temporary file
     * @return string The secure URL of the uploaded file
     */
    public function uploadPdf(string $path): string
    {
        $result = $this->uploadApi->upload($path, [
            'resource_type' => 'raw', // Use 'raw' for PDFs to avoid the /image/ path issue
            'folder' => 'boussole/reports',
        ]);

        return $result['secure_url'];
    }
}
