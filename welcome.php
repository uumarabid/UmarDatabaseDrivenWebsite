<?php
require_once "pdo.php";
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
    <body><h1>Welcome  <?= $_SESSION['username']; ?></h1>
    
        <?php 
        echo '<table border="1">'."\n";
foreach ( $rows as $row ) {
    echo "<tr><td>";
    echo($row['id']);
    echo("</td><td>");
    echo($row['name']);
    echo("</td><td>");
    echo($row['picture']);
    echo("</td></tr>\n");
}
echo "</table>\n";
        
        ?>
        
    </body>
</html>