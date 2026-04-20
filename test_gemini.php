<?php
require 'vendor/autoload.php';
$client = \Symfony\Component\HttpClient\HttpClient::create();
$res = $client->request('GET', 'https://generativelanguage.googleapis.com/v1beta/models?key=AIzaSyCLf5irleYBAb9J8HsuKsq8kMzPFGLLiU0');
$data = json_decode($res->getContent(false), true);
if (isset($data['models'])) {
    foreach ($data['models'] as $m) {
        if (isset($m['supportedGenerationMethods']) && in_array('generateContent', $m['supportedGenerationMethods'])) {
            echo $m['name'] . "\n";
        }
    }
} else {
    print_r($data);
}
