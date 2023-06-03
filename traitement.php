<?php require 'db.php';

$query = "SELECT * FROM quiz_table";
$stm = $db->prepare($query);
$stm->execute();
$quizData = [];

while ($row = $stm->fetch()) {
    $question = $row["question"];
    $options = [
        $row["option1"],
        $row["option2"],
        $row["option3"],
        $row["option4"]
    ];
    $reponse = $row["reponse"];
    
    $quizData =array(
        "question" => $question,
        "options" => $options,
        "response" => $reponse
    );

    $quiz_data =json_encode($quizData);

    echo '<pre>';
    print_r($quiz_data);
    echo '</pre>';
}

$db = null;