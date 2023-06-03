<?php
//Maak de onderstaande code af;

$variabele1 = 10;
$variabele2 = 10;


if ($variabele1 == $variabele2){
    
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
}

$variabele1 = 10;
$variabele2 = 12;

if($variabele1 != $variabele2) {
    echo "De twee waarden zijn ongelijk";
}

$variabele1 = 10;
$variabele2 = 10;


if ( $variabele1 == $variabele2){
    
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
}
?>



<!DOCTYPE html>
<html>
<head>
  <title>Formulier</title>
</head>
<body>
  <form id="myForm">
    <label for="username">Gebruikersnaam:</label>
    <input type="text" id="username" name="username"><br><br>
    
    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password"><br><br>
    
    <input type="button" value="LOGIN" onclick="printData()">
  </form>

  <script>
    function printData() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      console.log("Gebruikersnaam: " + username);
      console.log("Wachtwoord: " + password);
    }
  </script>
</body>
</html>
