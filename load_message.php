<?php
include 'db.php';

$stmt = $pdo->query("SELECT * FROM messages ORDER BY created_at DESC LIMIT 10");
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($messages as $message) {
    echo "<div class='message'><strong>" . htmlspecialchars($message['username']) . ":</strong> " . htmlspecialchars($message['message']) . "</div>";
}
?>
