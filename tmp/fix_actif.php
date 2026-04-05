<?php
$pdo = new PDO('mysql:host=127.0.0.1;dbname=boussole;charset=utf8mb4', 'root', '');

// Fix actif = 1 for all ROLE_FRANCHISE users
$stmt = $pdo->prepare("UPDATE utilisateur SET actif = 1 WHERE role = 'ROLE_FRANCHISE'");
$stmt->execute();
echo "Updated actif=1 for " . $stmt->rowCount() . " enterprise users.\n";

// Verify koxi@gmail.com
$stmt = $pdo->query("SELECT email, role, actif, mot_de_passe FROM utilisateur WHERE email = 'koxi@gmail.com'");
$user = $stmt->fetch(PDO::FETCH_ASSOC);
echo "\n=== VERIFICATION koxi@gmail.com ===\n";
echo "Email: {$user['email']}\n";
echo "Role: {$user['role']}\n";
echo "Actif: {$user['actif']}\n";
echo "Hash valid: " . (password_verify('1234', $user['mot_de_passe']) ? "YES" : "NO") . "\n";
