<?php
$servername = "10.69.8.61";
$username = "user";
$password = "password";
$dbname = "stage";

$conn = new mysqli ($servername,$username,$password,$dbname);

if($conn->connect_error){
	die("connection failed" . $conn->connect_error);
}
$sql = "INSERT INTO stagiaire (nom, prenom) VALUES (\"$_POST['nom']\",\"$_POST['prenom']\")";

echo $sql;

$conn->query($sql);
$conn->close();
?>

