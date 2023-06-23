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

    $sql = "UPDATE producten SET product_naam='$product_naam', prijs_per_stuk='$prijs_per_stuk', omschrijving='$omschrijving' WHERE id=2";

    if ($conn->query($sql) === TRUE) {
        echo "Product is succesvol bijgewerkt.";
    } else {
        echo "Fout bij het bijwerken van het product: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Product bijwerken</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="product_naam">Productnaam:</label>
        <input type="text" name="product_naam" required><br><br>

        <label for="prijs_per_stuk">Prijs per stuk:</label>
        <input type="text" name="prijs_per_stuk" required><br><br>

        <label for="omschrijving">Omschrijving:</label>
        <textarea name="omschrijving" required></textarea><br><br>

        <input type="submit" value="Bijwerken">
    </form>
</body>
</html>






