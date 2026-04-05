<?php
$data = json_encode(['email' => 'admin@gmail.com', 'password' => 'admin123']);
$opts = ['http' => ['method' => 'POST', 'header' => "Content-Type: application/json\r\n", 'content' => $data, 'ignore_errors' => true]];
$context = stream_context_create($opts);
$result = file_get_contents('http://localhost:8001/api/login_check', false, $context);
echo "HTTP Status: " . $http_response_header[0] . "\n";
echo "Response: " . $result . "\n";
