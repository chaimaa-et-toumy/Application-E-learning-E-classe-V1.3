<?php

$dataname = "mysql:host=localhost;dbname=e_classe_db"; // data server name
$username = "root";  //user
$password = "A1Z2E3R4T5Y6"; // password of this user


try {
  $conn = new PDO($dataname, $username, $password); //start connection with pdo
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}                                                                                                                                                                                                                                 
?>