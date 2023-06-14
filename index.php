<?php
    include 'header.php';
?>

    <main class="start_main">
        
        <p class="start_p">Bienvenue sur notre plate-forme</p>
        <p class="dev">Développée par : <span class="text"></span></p>
        <p class="choix">Veuillez choisir le thème que vous voulez exploiter</p>
        <div class="theme">
            <a href="quiz.php?theme=science">Science</a>
            <a href="quiz.php?theme=info">Informatique</a>
            <a href="quiz.php?theme=cine">Cinéma et télévision</a>
            <a href="quiz.php?theme=histoire">Histoire</a>
            <a href="quiz.php?theme=geo">Géographie</a>
        </div>

    </main>


    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed(".text" ,{

            strings:[
                "Benny SIMISI",
                "et",
                "Ben Amor AMINE",
            ],
            typeSpeed: 60,
            backSpeed: 60,
            loop:true
        });
     
    </script>
</body>
</html>