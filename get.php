<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get.php" method="GET">
    Naam: <input type="text" name="naam"><br>
    Achternaam: <input type="text" name="achternaam"><br>
    Leeftijd: <input type="number" name="leeftijd"><br>
    Adres: <input type="text" name="adres"><br>
    E-mail: <input type="email" name="email"><br>
  <input type="submit" value="Verzenden">
</form>
<?php 

$naam = $_GET["naam"];
$achternaam = $_GET["achternaam"];
$leeftijd = $_GET["leeftijd"];
$adres = $_GET["adres"];
$email = $_GET["email"];
echo "$naam $achternaam $leeftijd $adres $email";
?>
<!-- bij "GET" kan je gegevens veranderen in de url -->

</body>
</html>