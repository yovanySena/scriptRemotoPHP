<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_api";

$nom = $_GET['nom'];
$tel = $_GET['tel'];


try 
{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("INSERT INTO persona (nombre, telefono) values ('".$nom."','".$tel."')");
  $stmt->execute();

  // set the resulting array to associative
  
  echo "Agregado";

} 
catch(PDOException $e) 
{
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>