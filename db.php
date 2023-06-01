<?php
ini_set('display_errors',1);
$host = "localhost";
$dbname = "Quiz";
$username ="root";
$pawd ="root";
$dsn = "mysql:dbname=".$dbname.";host=".$host;
try {
    $db = new PDO($dsn,$username,$pawd);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die('Erreur '.$e->getMessage());
}

?>