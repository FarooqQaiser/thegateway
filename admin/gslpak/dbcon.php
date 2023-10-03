<?php

$hostname = "sdb-62.hosting.stackcp.net";
$username = "gslpak-35303239069f";
$password = "abc123def";
$database = "gslpak-35303239069f";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected Successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
