<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8" />
    <title>Quiz med Formulär och PHP</title>
</head>
<body>
    <header>
        <?php
        include('inc/header.html');
        ?>
    </header>
<h1>Resultat</h1>
<?php 
    $points = 0;
    $ansOne = $_POST['q1'];
    $ansTwo = $_POST['q2'];
    $ansThree = $_POST['q3'];
    $ansFour = $_POST['q4'];
    $ansFive = $_POST['q5'];
    $ansName = $_POST['name'];


    if($ansOne == '3')
        $points++;
    if($ansTwo == '7')
        $points++;
    if($ansThree == '3')
        $points++;
    if($ansFour == '3')
        $points++;
    if($ansFive == '3')
        $points++;


    echo '<strong>Du fick '.$points.' av 6 möjliga. Bra jobbat'.$ansName.' </strong>';
   
 
?>

<footer>
<footer>
   <?php
   include('inc/footer.html');

   ?>

</footer>

</footer>
</body>
</html>

