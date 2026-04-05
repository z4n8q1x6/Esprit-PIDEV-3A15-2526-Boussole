<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=boussole', 'root', '');
    $stmt = $pdo->query("DESCRIBE utilisateur");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);
    }
    
    // Also check the koxi user
    $stmt = $pdo->query("SELECT email, role, actif, mot_de_passe FROM utilisateur WHERE email = 'koxi@gmail.com'");
    $koxi = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "USER KOXI: \n";
    print_r($koxi);
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage();
}
