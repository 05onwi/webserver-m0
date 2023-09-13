<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8" />
    <title>sudo docker compose up -d sudo docker compose down </title>
</head>
<body>
   <header>
<?php
   include('inc/header.html');
   ?>

   </header>
  
   <main>
<h1>Quiz</h1>
<form action="result.php" method="post">
    <label>  5-2</label><br>
    <input type="text" name="q1">
    <br>
    <label>5+2</label><br>
    <input type="text" name="q2">
    <br>
    <label>  1+2</label><br>
    <input type="text" name="q3">
    <br>
    <label>  5*2</label><br>
    <input type="text" name="q4">
    <br>
    <label>  10-2</label><br>
    <input type="text" name="q5">
    <br>
    <label>  SKRIV NAMN</label><br>
    <input type="text" name="name">
    <br>
    <input type="submit" value="Skicka">

</form>


   </main>

<footer>
   <?php
   include('inc/footer.html');

   ?>

</footer>

</body>
</html>

