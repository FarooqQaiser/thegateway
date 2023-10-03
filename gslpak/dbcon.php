<?php

$servername = "localhost";
$username = "root";
$password = "" ;
$database = "gslpak-35303239069f";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected Successfully";
} catch (PDOException $e) {
    echo "Connection failed" .$e->getMessage();
}

?>
