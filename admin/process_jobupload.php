<?php
session_start();
include('dbcon.php');



if(isset($_POST['submit']))
{
    $jobTitle = $_POST['jobTitle'];
    $jobType = $_POST['jobType'];
    $jobDescription = $_POST['jobDescription'];
    

    $query = "INSERT INTO uploadjobs (jobTitle,jobType,jobDescription) VALUES (:jobTitle, :jobType, :jobDescription)";
    $query_run = $conn->prepare($query);

    $data = [
        ':jobTitle'=> $jobTitle,
        ':jobType'=> $jobType,
        ':jobDescription'=> $jobDescription,
    ];

    $query_execute =  $query_run->execute($data);
    if ($query_execute) 
    {
        $_SESSION['message']=" Successfull";
        header('Location: admin.php');
        exit(0);
    }
    else {
        $_SESSION['message']="Not Successfull";
        header('Location: admin.php');
        exit(0);
    }

}