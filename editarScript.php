<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_api";

$id = $_GET['id'];
$nom = $_GET['nom'];
$tel = $_GET['tel'];


try 
{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("UPDATE persona SET nombre = '".$nom."', telefono =".$tel." WHERE id =".$id);
  $stmt->execute();

  // set the resulting array to associative
  
  echo "Editado";

} 
catch(PDOException $e) 
{
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>