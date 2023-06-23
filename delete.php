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


$host = 'localhost';
$username = 'jouw_gebruikersnaam';
$password = 'jouw_wachtwoord';
$database = 'winkel';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die('Verbindingsfout: ' . $conn->connect_error);
}

$product_code = $_GET['product_code'];

$sql = "DELETE FROM producten WHERE product_code = $product_code";
if ($conn->query($sql) === TRUE) {
    echo 'Product succesvol verwijderd.';
} else {
    echo 'Fout bij het verwijderen van het product: ' . $conn->error;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Producten</title>
</head>
<body>
    <?php
    
    $sql = 'SELECT * FROM producten ORDER BY product_code';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr><th>Product Code</th><th>Product Naam</th></tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr><td>' . $row['product_code'] . '</td><td>' . $row['product_naam'] . '</td></tr>';
        }

        echo '</table>';
    } else {
        echo 'Geen gegevens gevonden.';
    }

    $conn->close();
    ?>

    <a href="delete.php?product_code=2">Verwijder product met code 2</a>
</body>
</html>
