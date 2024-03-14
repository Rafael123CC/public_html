<?php
$servername = "localhost";
$username = "tv";
$password = "p7Vr6fQPjBSDmKG";
$db= "tv";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
  die("Falhou a ligação: " . $conn->connect_error);
}
//echo "Ligação bem sucedida";

