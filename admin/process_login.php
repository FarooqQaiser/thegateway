<?php
session_start();
include('dbcon.php');

if(isset($_POST["submit"])){
    
    if (isset($_POST['username']) && isset($_POST['password'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT  * FROM `admin` WHERE username='$username' AND password='$password'";
        $query_run = $conn->prepare($query);
        $query_run->execute();
        $result = $query_run->fetch(PDO::FETCH_ASSOC);

        if($result){
            $id = $result['id'];
            $username = $result['username'];
            
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;
           $query_execute = $query_run->execute();
           if($query_execute)
           {
               $_SESSION['message']="Register Successfully";
               header('location: admin.php');
               exit(0);
           }
          
        }else {
            echo "incorrect";
    }
    }
}
