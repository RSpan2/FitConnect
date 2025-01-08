<?php
session_start();
$servername = "*******;
$username = "*******";
$password = "*******";
$dbname = "*******";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $column = $_POST['column'];
   
