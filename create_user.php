<?php
require_once 'database.php';
require_once 'user.php';
require_once 'userManagement.php';

// Initialize the database connection
$database = new Database('localhost', 'root', '', 'usermanagement');

// Create instances of the classes
$userManagement = new UserManagement($database);

// Process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    // Create a new User object with the required arguments
    $user = new User(null, $username, $email, $role);

// Create the user
$createdUserId = $userManagement->create($user->toArray());

    if ($createdUserId) {
        echo "User created successfully with ID: $createdUserId";
    } else {
        echo "User creation failed.";
    }
}


?>
