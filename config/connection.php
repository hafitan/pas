<?php
$host = "localhost";
$user = "root";
$pw = "";
$dbname = "pesantren";

try {
    $conn = new PDO("mysql:host=localhost;dbname=pesantren", $user,$pw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

$con = mysqli_connect("localhost", "root", "" ,"pesantren");
?>