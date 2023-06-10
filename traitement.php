<?php 
    require 'db.php';

    $query = "SELECT * FROM quiz_table";
    $stm = $db->prepare($query);
    $stm->execute();

    $quizData = $stm->fetchAll(PDO::FETCH_ASSOC);

    $quiz = json_encode($quizData);

    echo $quiz;

    $db = null;

?>