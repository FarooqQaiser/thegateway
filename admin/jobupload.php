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
                    <li class="breadcrumb-item active">Consultation Forms</li>
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
                            <h4 class="text-right">Upload Jobs</h4>
                        </div>

                        <form action="process_jobupload.php" method="POST">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                              
                              <label class="form-label fw-bold" for="jobTitle">Job Title</label>
                              <input type="text" id="jobTitle" name ="jobTitle" class="form-control" />
                            </div>
                          
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                              <!-- <input type="radio" id="type" class="form-control" /> -->
                              <label class="form-label fw-bold" for="jobType">Job Type</label><br>
                              <input type="radio" name="jobType" value="Full Time">Full Time  <br>
                              <input type="radio" name="jobType" value="Part Time">Part Time  <br>
                              <input type="radio" name="jobType" value="Internship">Internship
                            </div>
                            <div>
                                <label class="fw-bold" for="jobDescription">Job Description</label>
                                <textarea name="jobDescription" id="jobDescription" cols="30" rows="3"></textarea><br><br>
                            </div>
                          
                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                              <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                               
                            </div>
                          
                            
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Upload</button>
                          </form>


                       
                         </section>
                         
                    </div>

                </div>


                  

            </div>
        </div>
        </div>