<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=toy', 
   'uumar', 'zap');
// See the "errors" folder for details...
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->query("SELECT * FROM users");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r($rows);

echo "</pre>\n";



