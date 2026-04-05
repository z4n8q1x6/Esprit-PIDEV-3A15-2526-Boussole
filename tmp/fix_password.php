<?php
// Connect to DB directly
$pdo = new PDO('mysql:host=127.0.0.1;dbname=boussole;charset=utf8mb4', 'root', '');

// 1. Show all users and their passwords
echo "=== ALL USERS ===\n";
$stmt = $pdo->query("SELECT id_user, email, role, actif, mot_de_passe FROM utilisateur");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($users as $u) {
    echo "ID: {$u['id_user']} | Email: {$u['email']} | Role: {$u['role']} | Actif: {$u['actif']} | Pass starts with: " . substr($u['mot_de_passe'], 0, 20) . "...\n";
}

// 2. Generate a proper bcrypt hash for "1234"
$hash = password_hash('1234', PASSWORD_BCRYPT);
echo "\n=== NEW HASH for '1234' ===\n";
echo $hash . "\n";

// 3. Verify it works
echo "Verify: " . (password_verify('1234', $hash) ? "OK" : "FAIL") . "\n";

// 4. Update ALL enterprise users with this new hash
$stmt = $pdo->prepare("UPDATE utilisateur SET mot_de_passe = ? WHERE role = 'ROLE_FRANCHISE'");
$stmt->execute([$hash]);
echo "\nUpdated " . $stmt->rowCount() . " enterprise users with new password hash.\n";

// 5. Also verify the admin password works
$stmt = $pdo->query("SELECT email, mot_de_passe FROM utilisateur WHERE role = 'ROLE_ADMIN'");
$admin = $stmt->fetch(PDO::FETCH_ASSOC);
if ($admin) {
    echo "\n=== ADMIN CHECK ===\n";
    echo "Admin email: {$admin['email']}\n";
    echo "Admin password hash starts with: " . substr($admin['mot_de_passe'], 0, 20) . "\n";
}

// 6. Verify the updated enterprise user
$stmt = $pdo->query("SELECT email, mot_de_passe FROM utilisateur WHERE email = 'koxi@gmail.com'");
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($user) {
    echo "\n=== VERIFICATION koxi@gmail.com ===\n";
    echo "Hash: " . $user['mot_de_passe'] . "\n";
    echo "password_verify('1234'): " . (password_verify('1234', $user['mot_de_passe']) ? "SUCCESS" : "FAIL") . "\n";
}
