<?php
include 'db.php';

if (isset($_POST['message'])) {
    $message = $_POST['message'];
    $username = 'User'; // You can replace this with a dynamic username or session-based login

    $stmt = $pdo->prepare("INSERT INTO messages (username, message) VALUES (:username, :message)");
    $stmt->execute(['username' => $username, 'message' => $message]);
}
?>
