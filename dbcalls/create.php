<h1>create</h1>
<?php
include("./conn.php");

//formulier en zet in de variabel product
$product = $_POST['gerecht'];
echo 'dit is mijn productnaam: '.$product.' <<<<<';
//Het create request
$sql = 'INSERT INTO menuitems(Productnaam) VALUES (:product);';

$stmt = $conn->prepare($sql);
$stmt->bindParam(":product", $product);
$stmt->execute();
// $stmt->bindParam(":prijs", 1.5);

header('Location: ../index.php');