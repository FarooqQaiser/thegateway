<?php
session_start();
include('dbcon.php');

if (isset($_GET['jobForm_id'])) {
  $_SESSION['jobForm_id'] = $_GET['jobForm_id'];
}

$adminRemarks_id = isset($_GET['adminRemarks_id']) ? $_GET['adminRemarks_id'] : null;

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
                    <li class="breadcrumb-item active">Job Forms</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">




                <section class="d-flex">
                                <!-- <div class="left-div">
                                  <div class="d-flex justify-content-center align-items-center flex-column h-100">
                                    <h4 class="text-center">Download Resume</h4>
                                    <button class="btn btn-primary mt-3">Download</button>
                                  </div>
                                </div> -->
                                <div class="right-div">
                                  <div class=" align-items-center h-100"  style="display:flex;justify-content:space-around">
                                    <table class="table" style="width:100%">
                                      <tbody>
                                      <?php
                                          $query = "SELECT fullName, phone, coverLetter, resume FROM jobform WHERE jobForm_id = :jobForm_id";
                                          $statement = $conn->prepare($query);
                                          $statement->bindParam(':jobForm_id', $_SESSION['jobForm_id']);
                                          $statement->execute();
                                          $result = $statement->fetch(PDO::FETCH_OBJ);

                                          
                                          if ($adminRemarks_id !== null) {
                                            $query = "SELECT followUP, comments FROM adminremarks WHERE adminRemarks_id = :adminRemarks_id";
                                            $statement = $conn->prepare($query);
                                            $statement->bindParam(':adminRemarks_id', $adminRemarks_id);
                                            $statement->execute();
                                            $adminRemarks = $statement->fetch(PDO::FETCH_OBJ); // Fetch admin remarks if available
                                          }
                                          
                                        if($result)  
                                         {       
                                          $row = $result;

                            
                                          ?>
                                          <tr>
                                              <th>Full Name:</th>
                                              <td><?= $row->fullName; ?></td>
                                           </tr>
                                          <tr>
                                            <th>Phone:</th>
                                            <td><?= $row->phone; ?></td>
                                         </tr>
                                         <tr>
                                           <th>Cover Letter:</th>
                                            <td><?= $row->coverLetter; ?></td>
                                        </tr>
                                        <tr>
                                              <th >Resume:</th>
                                              <td>
                                              <a href="Download.php?file=<?= $row->resume ?>">Download</a><br>
                                        </td>
                                    </tr> 
                                    <?php if ($adminRemarks_id !== null && $adminRemarks) { ?>
                                    <tr>
                                        <th>Follow Up:</th>
                                        <td><?= $adminRemarks->followUP; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Comments:</th>
                                        <td><?= $adminRemarks->comments; ?></td>
                                    </tr>
                                    <?php } ?>

                                    <?php
                        }
                      
                      ?>
                        </tbody>
                                    </table>
                                  </div>
                                </div>
                              </section>
                         
                    </div>

                </div>
                <div class="col-md-9">
            <section class="d-flex">
            <form action="saveRemarks.php" method="POST">
            <input type="hidden" name="adminRemarks_id" value="<?php echo $adminRemarks_id; ?>">
            <input type="hidden" name="jobForm_id" value="<?= $_SESSION['jobForm_id'] ?>">

            <div class="form-group">
                <label for="follow_up">Follow Up:</label>
                <textarea name="follow_up" id="follow_up" class="form-control no-resize" style="resize: none; width: 200%; height: 50px;"></textarea>
            </div>

            <div class="form-group">
                <label for="comments">Comments:</label>
                <textarea name="comments" id="comments" class="form-control no-resize" style="resize: none; width: 200%; height: 50px;"></textarea>
            </div>

            <button type="submit" name="update_remarks" class="btn btn-primary">Update</button>
        </form>
            </section>

                
                  

            </div>
        </div>
        </div>