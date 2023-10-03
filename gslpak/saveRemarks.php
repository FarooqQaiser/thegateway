<?php
session_start();
include('dbcon.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jobFormId = $_POST['jobFormId'];
    $followUp = $_POST['followUp'];
    $comments = $_POST['comments'];

    // Insert data into the adminRemarks table
    $insertQuery = "INSERT INTO adminRemarks (jobForm_id, followUp, comments) VALUES (?, ?, ?)";
    $insertStatement = $conn->prepare($insertQuery);
    $insertStatement->execute([$jobFormId, $followUp, $comments]);

    // You can return a response to indicate success or failure if needed
    echo "Data saved successfully!";
} else {
    echo "Invalid request";
}
?>
