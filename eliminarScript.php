<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_api";

$id = $_GET['id'];



try 
{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("DELETE FROM persona  WHERE id =".$id);
  $stmt->execute();

  // set the resulting array to associative
  
  echo "Eliminado el id: ".$id;

} 
catch(PDOException $e) 
{
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>