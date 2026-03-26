<?php
require_once '../CHAPTER-10/database.php';

$database = new Database();
$pdo = $database->getConnection();

$sql = "INSERT INTO users (username, email) VALUES (:username, :email)";
$stmt = $pdo->prepare($sql);
$stmt->execute(['username' => 'Agent 7X', 'email' => 'agent@7x.com']);

echo "<br> [SUCCESS] New Agent Inserted!";

$sqlUpdate = "UPDATE users SET email = :new_email WHERE username = :target_user";
$stmtUpdate = $pdo->prepare($sqlUpdate);
$stmtUpdate->execute(['new_email' => 'pro-agent@7x.com', 'target_user' => 'Agent 7X']);

echo "<br> [SUCCESS] Agent Email Updated!";

$sqlDelete = "DELETE FROM users WHERE username = :target_user";
$stmtDelete = $pdo->prepare($sqlDelete);
$stmtDelete->execute(['target_user' => 'Agent 7X']);

echo "<br> [SUCCESS] Agent Deleted from the system!";

echo "<hr><h3>📡 7X SYSTEM USERS:</h3>";

$stmtRead = $pdo->query('SELECT * FROM users');
$usersList = $stmtRead->fetchAll(PDO::FETCH_ASSOC);

foreach($usersList as $user) {
    echo "ID: " . $user['id'] . " | Name: <strong style='color: #00d4ff;'>" . $user['username'] . "</strong> | Email: " . $user['email'] . "<br>";
}

