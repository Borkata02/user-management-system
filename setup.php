<?php
include_once 'database.php';

$db = new Database('localhost', 'root', '', 'usermanagement');

$db->createDatabaseAndTable();

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
