<?php
include_once 'database.php'; // Include the Database class

// Create an instance of the Database class
$db = new Database('localhost', 'root', '', 'usermanagement');

$db->createDatabaseAndTable();

// The constructor of the Database class will create the database and table if necessary
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System Setup</title>
</head>
<body>
    <h1>User Management System Setup</h1>
    <p>Database and table have been created.</p>
</body>
</html>
