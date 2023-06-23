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

// deel 1:

$sql = "SELECT * FROM jouw_tabelnaam ORDER BY jouw_kolomnaam";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<table>";
    echo "<tr><th>ID</th><th>Naam</th><th>Leeftijd</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["naam"]."</td><td>".$row["leeftijd"]."</td></tr>";
    }

    echo "</table>";
} else {
    echo "Geen resultaten gevonden.";
}

$conn->close();

// deel 2:

$stmt = $conn->prepare("SELECT product_naam FROM products WHERE product_code = ?");


$productCode = 1;
$stmt->bind_param("i", $productCode);


$stmt->execute();


$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["product_naam"];
    }
} else {
    echo "Geen resultaten gevonden.";
}

$stmt->close();
$conn->close();


// deel 3:

$stmt = $conn->prepare("SELECT product_naam FROM products WHERE product_code = :code");


$productCode = 2;
$stmt->bind_param(":code", $productCode);


$stmt->execute();


$result = $stmt->get_result();


if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
        echo $row["product_naam"];
    }
} else {
    echo "Geen resultaten gevonden.";
}

$stmt->close();
$conn->close();

?>











