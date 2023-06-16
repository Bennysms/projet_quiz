<?php
    include 'header.php';

?>

    <div class="container">
        <div class="content">
            <div class="title">
                <h2>Quiz Game</h2>
            </div>
            <div class="compter">
                <span class="point">15</span> / <span class="total"></span>
            </div>
            <div class="question_content">
                <div class="num">
                    <span class="numero">1 </span> .
                    <p class="question" id ="question">1</p>
                </div>
                <ul class="response">
                    <li class="option1"></li>
                    <li class="option2"></li>
                    <li class="option3"></li>
                    <li class="option4"></li>
                </ul>

                <p class="true_response response">
                    Bonne réponse
                </p>
                <p class="false_response response">
                    Mauvaise réponse
                </p> 
                <div class="btn-group">
                    <button id="submit">Next</button>
                    <a href="index.php" id="prev">Changez de thème</a>
                </div>

            </div>
        </div>
        <div class="compteur">
            <p><span class="minuteCompt"></span>  minute(s)</p>
            <p><span class="secondCompt"></span>  seconde(s)</p>
        </div>
        <div class="compteurAnswer">
            <p>Vous avez <span class="total_point"></span> bonne(s) réponse(s)</p>
        </div>
    </div>
</body>

</html>