<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_api";

try 
{
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, nombre, telefono FROM persona");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $data =$stmt->fetchAll();
  echo json_encode($data);

} 
catch(PDOException $e) 
{
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>