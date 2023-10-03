<?php
session_start();
include('dbcon.php');

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
    <style>
  .no-resize {
    resize: none;
  }
</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                    <li class="breadcrumb-item active">Jobs</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <table class="table">
             <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Phone No</th>
                    <th scope="col">More Details</th>
                    <th scope="col">Follow Up</th>
                    <th scope="col">Comments</th>
                </tr>
            </thead>
            <tbody>
            <?php
                
                  $query = "
                  SELECT jf.jobForm_id, jf.fullName, jf.phone, ar.adminRemarks_id, ar.followUP, ar.comments
                      FROM jobform jf
                      LEFT JOIN adminremarks ar ON jf.jobForm_id = ar.jobForm_id
                  ";
                  $statement = $conn->prepare($query);
                  $statement->execute();

                  $statement->setFetchMode(PDO::FETCH_OBJ);
                  $result = $statement->fetchAll();

                  if ($result) {
                    foreach ($result as $row) {
                      ?>
                      <tr>
                          <td hidden><?= $row->jobForm_id; ?></td>
                          <td><?= $row->fullName; ?></td>
                          <td><?= $row->phone; ?></td>
                          <td>
                              <?php if (isset($row->adminRemarks_id)) { ?>
                                  <a href="jobdetails.php?jobForm_id=<?= $row->jobForm_id; ?>&adminRemarks_id=<?= $row->adminRemarks_id; ?>"><i class="bi bi-arrow-right"></i>More Details</a>
                              <?php } else { ?>
                                  No Details
                              <?php } ?>
                          </td>
                          <td><textarea readonly name="follow_up" class="form-control no-resize"><?= $row->followUP; ?></textarea></td>
                          <td><textarea readonly name="comments" class="form-control no-resize"><?= $row->comments; ?></textarea></td>
                      </tr>
                      <?php
                  }
                }
                if (isset($_SESSION['message'])) {
                  echo "<p>" . $_SESSION['message'] . "</p>";
                  unset($_SESSION['message']); // Clear the message after displaying
              }

                ?>
                
                
            </tbody>
        </table>