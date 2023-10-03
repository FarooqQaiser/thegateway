<?php

session_start();
include('dbcon.php');



if (isset($_GET['mockTestReg_id'])) {
  $_SESSION['mockTestReg_id'] = $_GET['mockTestReg_id'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/GSL-PAK.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

   <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="admin.php" class="logo d-flex align-items-center">
        <img src="assets/img/GSL-PAK.png" alt="">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/GSL-PAK.png" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="jobupload.php">
                <i class="bi bi-person"></i>
                <span>Upload Jobs</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
           

            <li>
              <a class="dropdown-item d-flex align-items-center" href="process_logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->


  </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="admin.php">
                    <i style="color: orange;" class="bi bi-grid"></i>
                    <span style="color: orange;">Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="asses.php">
                    <i class="bi bi-menu-button-wide"></i><span>Assesment Forms</span>
                </a>

            </li><!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse"
                    href="consultationform.php">
                    <i class="bi bi-journal-text"></i><span>Consultation Forms</span>
                </a>

            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse"
                    href="mockform.php">
                    <i class="bi bi-journals"></i><span>Mock Forms</span>
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse"
                    href="jobform.php">
                    <i class="bi bi-journal-text"></i><span>Jobs</span>
                </a>

            </li><!-- End Charts Nav -->


    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                    <li class="breadcrumb-item active">Mock Forms</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">




                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between mb-3">
                            <h4 class="text-right">Profile</h4>
                        </div>


                        
                            
                        <section class="d-flex">
                            
                            <div class="right-div">
                              <div class="d-flex justify-content-center align-items-center h-100">
                                <table class="table">
                                  <tbody>
                                  <?php
                                     $query = "SELECT fullName, cnic, phoneNumber, email
                                     FROM mocktest_reg
                                     WHERE mockTestReg_id   = :mockTestReg_id  ";
                                      $statement = $conn->prepare($query);
                                      $statement->bindParam(':mockTestReg_id', $_SESSION['mockTestReg_id']);

                                      $statement->execute();

                                      
                                      $result = $statement->fetchAll(PDO::FETCH_OBJ);
                            if ($result) {
                           foreach ($result as $row) {
                           
                                      ?>
                                    <th>Full Name:</th>
                                    <tr>
                                      <td><?= $row->fullName; ?></td>
                                    </tr>
                                    <th>CNIC:</th>
                                    <tr>
                                      <td><?= $row->cnic; ?></td>
                                    </tr>
                                    <th>Phone Number:</th>
                                    <tr>
                                      <td><?= $row->phoneNumber; ?></td>
                                    </tr>
                                    <th>Email:</th>
                                    <tr>
                                      <td><?= $row->email; ?></td>
                                    </tr>
                   
    
                                    <?php
                           }
                          }
                                     $query = "SELECT testtype
                                     FROM testtype
                                     WHERE mockTestReg_id   = :mockTestReg_id  ";
                                      $statement = $conn->prepare($query);
                                      $statement->bindParam(':mockTestReg_id', $_SESSION['mockTestReg_id']);

                                      $statement->execute();

                                      
                                      $result = $statement->fetchAll(PDO::FETCH_OBJ);
                                      if ($result) {
                                     foreach ($result as $row) {
                                      ?>
                                    <th>Test Type</th>
                                    <tr>
                                      <td><?= $row->testtype;?></td>
                                    </tr>
                                    <?php
                                     }
                                   } else {
                                   ?>
                                     <tr>
                                       <td colspan="7">No record found</td>
                                     </tr>
                                      <?php
                                       }
                                      $query = "SELECT testtype FROM testtype WHERE mockTestReg_id = :mockTestReg_id";
                                      $statement = $conn->prepare($query);
                                       $statement->bindParam(':mockTestReg_id', $_SESSION['mockTestReg_id']);
                                       $statement->execute();
                                      $result = $statement->fetch(PDO::FETCH_OBJ);
                                      if ($result) {
                                        $testType = $result->testtype;
                                        if ($testType == "IELTS") {
                                          $query = "SELECT ieltsType FROM ieltstype WHERE mockTestReg_id = :mockTestReg_id";
                                          $statement = $conn->prepare($query);
                                          $statement->bindParam(':mockTestReg_id', $_SESSION['mockTestReg_id']);
                                          $statement->execute();
                                          $result = $statement->fetch(PDO::FETCH_OBJ);
                                          if ($result) {
                                            if ($result) {
                                              ?>
                                              <tr>
                                                      <th>IELTS Type:</th>
                                                      <td><?= $result->ieltsType; ?></td>
                                                    </tr>
                                              <?php
                                                  }
                                                } elseif ($testType == "OET") {
                                                  $query = "SELECT oetType FROM oettype WHERE mockTestReg_id = :mockTestReg_id";
                                                  $statement = $conn->prepare($query);
                                                  $statement->bindParam(':mockTestReg_id', $_SESSION['mockTestReg_id']);
                                                  $statement->execute();
                                                  $result = $statement->fetch(PDO::FETCH_OBJ);
                                                  if ($result) {
                                                    ?>
                                                    <tr>
                                                      <th>OET Type:</th>
                                                      <td><?= $result->oetType; ?></td>
                                                    </tr>
                                              <?php
                                                  }
                                                } elseif ($testType == "PTE") {
                                                  $query = "SELECT pteType FROM ptetype WHERE mockTestReg_id = :mockTestReg_id";
                                                  $statement = $conn->prepare($query);
                                                  $statement->bindParam(':mockTestReg_id', $_SESSION['mockTestReg_id']);
                                                  $statement->execute();
                                                  $result = $statement->fetch(PDO::FETCH_OBJ);
                                                  if ($result) {
                                              ?>
                                                    <tr>
                                                      <th>PTE Type:</th>
                                                      <td><?= $result->pteType; ?></td>
                                                    </tr>
                                              <?php
                                                  }
                                                }
                                              } else {
                                                ?>
                                                
                                              <?php
                                              }
                                            }
                                              ?>
                                              <?php
                              
                                              
                                                  $query = "SELECT testMode
                                                  FROM testmode
                                                  WHERE mockTestReg_id   = :mockTestReg_id  ";
                                                  $statement = $conn->prepare($query);
                                                  $statement->bindParam(':mockTestReg_id', $_SESSION['mockTestReg_id']);

                                                  $statement->execute();

                                      
                                                  $result = $statement->fetchAll(PDO::FETCH_OBJ);
                                                  if ($result) {
                                                  foreach ($result as $row) {
                                                  ?>
                                                  <th>Test Mode</th>
                                                    <tr>
                                                      <td><?= $row->testMode; ?></td>
                                                   </tr>
                                                   <?php
                                                  }
                                                }
                      
                                                  
                                                ?>
                                        
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </section>
                         
                    </div>

                </div>

                
                  

            </div>
        </div>
        </div>
