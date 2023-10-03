<?php
session_start();
include('dbcon.php');

if(isset($_POST['submit_btn'])) {
    $fullName = $_POST['fullName'];
    $gname = $_POST['gname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $cnic = $_POST['cnic'];
    $city = $_POST['city'];
    $reference = $_POST['reference'];

    $query = "INSERT INTO consultantform (fullName, fatherName, phone, email, cnic,  city, reference) 
                VALUES (:fullName, :gname, :phone, :email, :cnic, :city, :reference)";
    $query_run = $conn->prepare($query);

    $data = [
        ':fullName' => $fullName,
        ':gname' => $gname,
        ':phone' => $phone,
        ':email' => $email, 
        ':cnic' => $cnic, 
        ':city' => $city,
        ':reference' => $reference,
    ];

    $query_execute = $query_run->execute($data);
    if($query_execute) {
        $_SESSION['message'] = "Registered Successfully";
        header('location: index.html');
        exit(0);
    } else {
        $_SESSION['message'] = "Not Registered";
        header('Location: index.html');
        exit(0);
    }
}
