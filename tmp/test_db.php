<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=boussole', 'root', '');
    echo "Connection ROOT success\n";
} catch (Exception $e) {
    echo "Connection ROOT fail: " . $e->getMessage() . "\n";
}

try {
    $pdo = new PDO('mysql:host=localhost;dbname=boussole', 'boussole_user', '2121');
    echo "Connection BOUSSOLE_USER success\n";
} catch (Exception $e) {
    echo "Connection BOUSSOLE_USER fail: " . $e->getMessage() . "\n";
}
