<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="POST">
    Naam: <input type="text" name="naam"><br>
    Achternaam: <input type="text" name="achternaam"><br>
    Leeftijd: <input type="number" name="leeftijd"><br>
    Adres: <input type="text" name="adres"><br>
    E-mail: <input type="email" name="email"><br>
  <input type="submit" value="Verzenden">
</form>
<?php 

$naam = $_POST["naam"];
$achternaam = $_POST["achternaam"];
$leeftijd = $_POST["leeftijd"];
$adres = $_POST["adres"];
$email = $_POST["email"];
echo "$naam $achternaam $leeftijd $adres $email";
?>

<!-- bij "POST" is de url beveiligd --> 