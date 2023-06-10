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
                <p class="question" id ="question"></p>
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
                <button id="submit">Next</button>

            </div>
        </div>
        <div class="compteur">
            <p><span class="minuteCompt"></span>  minute(s)</p>
            <p><span class="secondCompt"></span>  seconde(s)</p>
        </div>
        <div class="compteurAnswer">
            <p>Vous avez <span class="total_point"></span></p>
        </div>
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
        <script src="traitement.js"></script>
</body>

</html>