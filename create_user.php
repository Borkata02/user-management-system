<?php
require_once 'database.php';
require_once 'user.php';
require_once 'userManagement.php';

$database = new Database('localhost', 'root', '', 'usermanagement');

$userManagement = new UserManagement($database);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $user = new User(null, $username, $email, $role);

$createdUserId = $userManagement->create($user->toArray());

    if ($createdUserId) {
        echo "User created successfully with ID: $createdUserId";
    } else {
        echo "User creation failed.";
    }
}


?>
