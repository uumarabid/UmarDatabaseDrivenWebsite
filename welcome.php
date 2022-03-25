<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<html>
    <head>
        <title>Home Page</title>
    </head>
    <body><h1>Welcome  <?= $_SESSION['username']; ?></h1></body>
</html>