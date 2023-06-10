<?php
    include 'header.php';
    $id = rand(1, 3);
?>

    <main class="start_main">
        
        <p class="start_p">Bienvenue sur notre plate forme</p>

        <a href="quiz.php?id=<?=$id?>" class="start_btn">Commencez</a>
    </main>

</body>

</html>