<?php
require_once "pdo.php";

if (isset($_POST['username']) && isset($_POST['thepass'])) {
    
    $the_name = $_POST['username'];
    $sql = "SELECT password FROM users WHERE name = '$the_name'";
    //echo $sql;
    $stmt = $pdo->query($sql);
    $rows = $stmt->fetchALL(PDO::FETCH_ASSOC);
    
    if (password_verify($_POST['thepass'], $rows[0]['password'])){
        header("Location: welcome.php");
        exit();
    }
    else {
        header("Location: login.php");
        exit();
    }   
}

?>