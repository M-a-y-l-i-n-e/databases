<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "stage";

$conn = new mysqli ($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("connection failed" . $conn->connect_error);
}
$sql = "INSERT INTO stagiaire (nom, prenom) VALUES ('iks', 'igrek')";
$conn->query($sql);
$conn->close();
?>

