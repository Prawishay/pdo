<!DOCTYPE html>
<html>
<head>
    <title>Product toevoegen</title>
</head>
<body>
    <?php

$host = 'localhost:3307';
$db   = 'winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES   => false,
];
try 
{ $pdo = new PDO($dsn, $user, $pass, $options); 
echo 'connnectie met database';
} 
catch (\PDOException $e) 
{ throw new \PDOException($e->getMessage(), (int)$e->getCode());}



    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $product_naam = $_POST["product_naam"];
        $prijs_per_stuk = $_POST["prijs_per_stuk"];
        $omschrijving = $_POST["omschrijving"];

        $servername = "localhost";
        $username = "jouw_gebruikersnaam";
        $password = "jouw_wachtwoord";
        $dbname = "winkel";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Kan geen verbinding maken met de database: " . $conn->connect_error);
        }

        $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES ('$product_naam', '$prijs_per_stuk', '$omschrijving')";

        if ($conn->query($sql) === TRUE) {
            echo "Product succesvol toegevoegd.<br>";
        } else {
            echo "Er is een fout opgetreden bij het toevoegen van het product: " . $conn->error . "<br>";
        }

        $conn->close();
    }
    
    ?>

    <h2>Product toevoegen</h2>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="product_naam">Productnaam:</label>
        <input type="text" id="product_naam" name="product_naam" required><br><br>

        <label for="prijs_per_stuk">Prijs per stuk:</label>
        <input type="number" id="prijs_per_stuk" name="prijs_per_stuk" step="0.01" required><br><br>

        <label for="omschrijving">Omschrijving:</label>
        <textarea id="omschrijving" name="omschrijving" required></textarea><br><br>

        <input type="submit" value="Product toevoegen">
    </form>
</body>
</html>









?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>