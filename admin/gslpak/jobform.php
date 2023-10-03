<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include('dbcon.php');

if (isset($_POST['submit_btn'])) {
    $fullName = $_POST['fullName'];
    $phone = $_POST['phone'];
    $coverLetter = $_POST['coverLetter'];
    
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $path = "files/".$fileName;

    // Move the uploaded file to the desired location
    move_uploaded_file($fileTmpName, $path);
    


    $query = "INSERT INTO jobform (fullName, phone, coverLetter, resume) 
                VALUES (:fullName, :phone, :coverLetter, :fileName)";
    $query_run = $conn->prepare($query);

    $data = [
        ':fullName' => $fullName,
        ':phone' => $phone,
        ':coverLetter' => $coverLetter,
        ':fileName' => $fileName,
    ];

    $query_execute = $query_run->execute($data);
    if ($query_execute) {
        $_SESSION['message'] = "Registered Successfully";
        header('Location: jobForm.html');
        exit(0);
    } else {
        $_SESSION['message'] = "Not Registered";
        header('Location: jobForm.html');
        exit(0);
    }
}
?>
