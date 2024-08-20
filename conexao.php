<?php
$servename = "localhost";
$username = "root";
$password = "";
$dbname = "";

$conn = mysqli_connect($servename, $username, $password, $dbname);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
