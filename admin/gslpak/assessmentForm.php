<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include('dbcon.php');

if (isset($_POST['submit_btn'])) {
    // Retrieve and sanitize personal details
    $fullName = $_POST['fullName'];
    $fatherName = $_POST['fatherName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $cnic = $_POST['cnic'];
    $city = $_POST['city'];
    $reference = $_POST['reference'];

    // Retrieve and sanitize academic details
    $degreeName = $_POST['degreeName'];
    $grade = $_POST['grade'];
    $year = $_POST['year'];
    $university = $_POST['university'];

    // Retrieve and sanitize professional details
    $organizationName = $_POST['organizationName'];
    $designation = $_POST['designation'];
    $period = $_POST['period'];

    // Retrieve and sanitize country of interest details
    $UK = isset($_POST['UK']) ? $_POST['UK'] : '';
    $Australia = isset($_POST['Australia']) ? $_POST['Australia'] : '';
    $Canada = isset($_POST['Canada']) ? $_POST['Canada'] : '';
    $USA = isset($_POST['USA']) ? $_POST['USA'] : '';
    $Other = isset($_POST['Other']) ? $_POST['Other'] : '';
    $visaRejectionAny = isset($_POST['visaRejectionAny']) ? $_POST['visaRejectionAny'] : '';
    $reasonVR = isset($_POST['reasonVR']) ? $_POST['reasonVR'] : '';

    // Insert data into the personal_details table
    $query1 = "INSERT INTO personal_details (fullName, fatherName, phone, email, cnic, city, reference) 
                VALUES (:fullName, :fatherName, :phone, :email, :cnic, :city, :reference)";
    $stmt1 = $conn->prepare($query1);
    $stmt1->bindParam(':fullName', $fullName);
    $stmt1->bindParam(':fatherName', $fatherName);
    $stmt1->bindParam(':phone', $phone);
    $stmt1->bindParam(':email', $email);
    $stmt1->bindParam(':cnic', $cnic);
    $stmt1->bindParam(':city', $city);
    $stmt1->bindParam(':reference', $reference);
    $stmt1->execute();

    // Retrieve the personal_id
    $personal_id = $conn->lastInsertId();

    // Insert data into the academic_details table
    $query2 = "INSERT INTO academic_details (personal_id, degreeName, grade, year, university ) 
                VALUES (:personal_id, :degreeName, :grade, :year, :university)";
    $stmt2 = $conn->prepare($query2);
    $stmt2->bindParam(':personal_id', $personal_id);
    $stmt2->bindParam(':degreeName',  $degreeName);
    $stmt2->bindParam(':grade', $grade);
    $stmt2->bindParam(':year', $year);
    $stmt2->bindParam(':university', $university);
    $stmt2->execute();

    // Insert data into the professional_details table
    $query3 = "INSERT INTO professional_details (personal_id, organizationName, designation, period) 
                VALUES (:personal_id, :organizationName, :designation, :period)";
    $stmt3 = $conn->prepare($query3);
    $stmt3->bindParam(':personal_id', $personal_id);
    $stmt3->bindParam(':organizationName',  $organizationName);
    $stmt3->bindParam(':designation', $designation);
    $stmt3->bindParam(':period', $period);
    $stmt3->execute();

    // Insert data into the countryofinterest table
    $query4 = "INSERT INTO countryofinterest (personal_id, UK, Australia, Canada, USA, Other, visaRejectionAny, reasonVR) 
                VALUES (:personal_id, :UK, :Australia, :Canada, :USA, :Other, :visaRejectionAny, :reasonVR)";
    $stmt4 = $conn->prepare($query4);
    $stmt4->bindParam(':personal_id', $personal_id);
    $stmt4->bindParam(':UK', $UK);
    $stmt4->bindParam(':Australia', $Australia);
    $stmt4->bindParam(':Canada', $Canada);
    $stmt4->bindParam(':USA', $USA);
    $stmt4->bindParam(':Other', $Other);
    $stmt4->bindParam(':visaRejectionAny', $visaRejectionAny);
    $stmt4->bindParam(':reasonVR', $reasonVR);
    $stmt4->execute();

    // Redirect to success page or do further processing
    header("Location: assessmentForm.html");
    exit();
}
?>
