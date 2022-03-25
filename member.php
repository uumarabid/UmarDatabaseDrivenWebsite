<?php

require_once "pdo.php";
session_start();

if (isset($_POST['username']) && isset($_POST['thepass'])) {
    $the_name = $_POST['username'];
    $sql = "SELECT password FROM users WHERE name = '$the_name'";
    //echo $sql;
    $stmt = $pdo->query($sql);
    $rows = $stmt->fetchALL(PDO::FETCH_ASSOC);

    if (password_verify($_POST['thepass'], $rows[0]['password'])) {
        //session
        $_SESSION['username'] = $the_name;
        //redirect
        header("Location: welcome.php");
        exit();
    } else {
        session_destroy();
        session_start();
        header("Location: login.php");
        exit();
    }
}
?>