<?php
$hash = '$2y$12$4kZSlS3Nk7G6HE/s2vjYUYurvbq5hg7UmRYevVBRwiJOgV7U';
echo "Verifying hash for '1234': " . (password_verify('1234', $hash) ? "SUCCESS" : "FAIL") . "\n";

try {
    // Re-verify the user in DB one last time with correct root connection
    $pdo = new PDO('mysql:host=localhost;dbname=boussole', 'root', '');
    $stmt = $pdo->prepare("SELECT email, role, actif, mot_de_passe FROM utilisateur WHERE email = ?");
    $stmt->execute(['koxi@gmail.com']);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    echo "USER DATA IN DB:\n";
    print_r($user);
    
    // Ensure it's active and has the right hash
    if ($user) {
        $update = $pdo->prepare("UPDATE utilisateur SET actif = 1, role = 'ROLE_FRANCHISE' WHERE email = ?");
        $update->execute(['koxi@gmail.com']);
        echo "Update status/role: SUCCESS\n";
    }
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}
