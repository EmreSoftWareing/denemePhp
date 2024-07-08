
<?php
include 'db.php';

function adminLogin($username, $password) {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM admin WHERE username = :username AND password = MD5(:password)");
    $stmt->execute(['username' => $username, 'password' => $password]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getPersoneller() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM personeller");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
