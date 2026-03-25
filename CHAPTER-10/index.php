<?php 
require 'database.php';
require 'user.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

$user->name = 'ASSMA';
$user->email = 'assma@7x.com';

if($user->create()) {
    echo "<div style='color: #00d4ff; background-color: #0b0e14; padding: 10px; margin-bottom: 20px; border-left: 4px solid #00d4ff;'>
            [SUCCESS] New user added to the system successfully.
        </div>";
}

echo "<h3 style='color: #6a0dad; font-family: sans-serif;'>SYSTEM USERS LIST:</h3>";

$usersList = $user->read();

foreach($usersList as $u) {
    echo "<div style='color: #fff; background-color: #1a1a1a; padding: 10px; margin-bottom: 5px; font-family: sans-serif;'>
            ID: " . $u['id'] . " | Name: <strong style='color: #00d4ff;'>" . $u['username'] . "</strong> | Email: " . $u['email'] . "
        </div>";
}
?>

