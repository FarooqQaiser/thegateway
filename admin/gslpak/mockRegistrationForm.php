<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include('dbcon.php');



if (isset($_POST['submit_btn'])) {
    $fullName = $_POST['fullName'];
    $cnic = $_POST['cnic'];
    $phoneNumber = $_POST['phoneNumber']; // Corrected variable name
    $email = $_POST['email'];
    $testType = $_POST['testType'];
    $testMode = $_POST['testMode']; // Corrected variable name

    // Insert data into the mocktest_reg table
    $query1 = "INSERT INTO mocktest_reg (fullName, cnic, phoneNumber, email) VALUES (:fullName, :cnic, :phoneNumber, :email)"; // Corrected parameter name
    $stmt1 = $conn->prepare($query1);
    $stmt1->bindParam(':fullName', $fullName);
    $stmt1->bindParam(':cnic', $cnic);
    $stmt1->bindParam(':phoneNumber', $phoneNumber);
    $stmt1->bindParam(':email', $email);
    $stmt1->execute();

    // Retrieve the mockTestReg_id
    $mockTestReg_id = $conn->lastInsertId(); // Corrected function name

    // Insert data into the testtype table
    $query2 = "INSERT INTO testtype (mockTestReg_id, testType) VALUES (:mockTestReg_id, :testType)";
    $stmt2 = $conn->prepare($query2);
    $stmt2->bindParam(':mockTestReg_id', $mockTestReg_id);
    $stmt2->bindParam(':testType', $testType);
    $stmt2->execute();

    // Insert data into the ieltstype, pettype, or oettype table based on the testType value
    switch ($testType) {
        case 'IELTS':
            $ieltsType = $_POST['ielts_type'];
            $query3 = "INSERT INTO ieltstype (mockTestReg_id, ieltsType) VALUES (:mockTestReg_id, :ieltsType)";
            $stmt3 = $conn->prepare($query3);
            $stmt3->bindParam(':mockTestReg_id', $mockTestReg_id);
            $stmt3->bindParam(':ieltsType', $ieltsType);
            $stmt3->execute();
            break;
        case 'PTE': // Corrected test type
            $pteType = $_POST['pte_type'];
            $query4 = "INSERT INTO ptetype (mockTestReg_id, pteType) VALUES (:mockTestReg_id, :pteType)"; // Corrected table name
            $stmt4 = $conn->prepare($query4);
            $stmt4->bindParam(':mockTestReg_id', $mockTestReg_id);
            $stmt4->bindParam(':pteType', $pteType);
            $stmt4->execute();
            break;
        case 'OET':
            $oetType = $_POST['oet_type'];
            $query5 = "INSERT INTO oettype (mockTestReg_id, oetType) VALUES (:mockTestReg_id, :oetType)";
            $stmt5 = $conn->prepare($query5);
            $stmt5->bindParam(':mockTestReg_id', $mockTestReg_id);
            $stmt5->bindParam(':oetType', $oetType);
            $stmt5->execute();
            break;
    }

    // Insert data into the testmode table
    $query6 = "INSERT INTO testmode (mockTestReg_id, testMode) VALUES (:mockTestReg_id, :testMode)";
    $stmt6 = $conn->prepare($query6);
    $stmt6->bindParam(':mockTestReg_id', $mockTestReg_id);
    $stmt6->bindParam(':testMode', $testMode);
    $stmt6->execute();

    // Redirect to success page or do further processing
    header("Location: mockRegistrationForm.html");
    exit();
}
?>
