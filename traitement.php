<?php 
    require 'db.php';
    $theme = $_GET['theme'];
    try {

    $query = "SELECT * FROM $theme";
    $stm = $db->prepare($query);
    $stm->execute();

    $quizData = $stm->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($quizData);

    $db = null;

    } catch (PDOexception $e) {
        die('Erreur '.$e->getMessage());
    }


?>