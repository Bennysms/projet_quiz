<?php


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="requete.js" defer></script>
    <script src="index.js"></script>
    <title>Quiz</title>
</head>

<body>
    <header>
        <a href="#" class="logo">
            <img src="image/cdp.JPG" alt="logo">
        </a>
        <div class="timer">
            <span>00:00</span>
        </div>
    </header>
    <div class="container">
        <div class="content">
            <div class="title">
                <h2>Quiz Game</h2>
            </div>
            <div class="compter">
                <span class="point">0 / </span><span class="total">10</span>
            </div>
            <form action="traitement.php" method="POST" class="questions">
                <p class="question" id ="question">
                    Quel est le nom de votre chien?
                </p>
                <ul class="response">
                    <li>1. milou</li>
                    <li>2. Chalako</li>
                    <li>3. Bouledogue</li>
                    <li>4. Max</li>
                </ul>
                <p class="true_response response">Bonne reponse</p>
                <p class="false_response response">Mauvaise reponse</p>

                <input type="submit" value="Next">

            </form>
        </div>
        <!-- <script>
            let text = document.querySelector('.question');
            let resp = document.querySelectorAll('.response li');
            text.addEventListener('click', () => {
                let ute = new SpeechSynthesisUtterance(text.innerHTML);
                speechSynthesis.speak(ute);
            });

            resp.forEach(el => {
                el.addEventListener('mouseenter', () => {
                    let ute = new SpeechSynthesisUtterance(el.innerHTML);
                    speechSynthesis.speak(ute);
                });
            });
        </script> -->
</body>

</html>