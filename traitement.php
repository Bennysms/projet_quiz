<?php require 'db.php';

if(isset($_GET['action']) && $_GET['action'] == 'getQuestions'){
    $query = "SELECT * FROM questions";
    $stm = $db->prepare($query);
    $stm->execute();
    $questions = $stm->fetchAll(PDO::FETCH_ASSOC);
    header('Content-Type: application');
    json_endecode($questions);
}

if(isset($_GET['action']) && $_GET['action'] == 'getAnswer'){

    $question_id = $_GET['question_id'];

    $query = "SELECT * FROM response WHERE question_id = ?";
    $stm = $db->prepare($query);
    $stm->execute([$question_id]);
    $answers = $stm->fetchAll(PDO::FETCH_ASSOC);
    header('Content-Type: application');
    json_endecode($answers);
}
$db = null;