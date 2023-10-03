<?php
session_start();
include('dbcon.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

$insertedRows = 0;
$currentMonthEntries = 0;
$filledForms = 0;
$filledjobsForms = 0;

// Function to check if a new form has been submitted
function checkNewFormSubmission($lastCheckedTimestamp)
{
  global $conn;
  $query = "SELECT COUNT(*) AS new_forms FROM (
    SELECT * FROM personal_details
    UNION ALL
    SELECT * FROM consultantform
    UNION ALL
    SELECT * FROM mocktest_reg
    UNION ALL
    SELECT * FROM jobform
  ) AS forms
  WHERE date > '$lastCheckedTimestamp'";

  $statement = $conn->prepare($query);
  $statement->execute();
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  $newFormsCount = $row['new_forms'];

  return $newFormsCount;
}

// Initialize $newFormsCount variable
$newFormsCount = 0;
try {
  // Prepare the SQL query
  $query = "SELECT COUNT(*) AS inserted_rows FROM personal_details WHERE date >= NOW() - INTERVAL 1 DAY";
  $statement = $conn->prepare($query);
  // Execute the query
  $statement->execute();

  // Fetch the result
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  $insertedRows = $row['inserted_rows'];

  // Query for the total entries in the current month
  $query1 = "SELECT COUNT(*) AS current_month_entries FROM consultantform WHERE YEAR(date) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE())";
  $statement = $conn->prepare($query1);
  $statement->execute();
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  $currentMonthEntries = $row['current_month_entries'];

  $query2 = "SELECT COUNT(*) AS filled_forms FROM mocktest_reg WHERE YEAR(date) = YEAR(CURRENT_DATE())";
  $statement = $conn->prepare($query2);
  $statement->execute();
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  $filledForms = $row['filled_forms'];

  $query3 = "SELECT COUNT(*) AS filled_forms FROM jobform WHERE YEAR(date) = YEAR(CURRENT_DATE())";
  $statement = $conn->prepare($query3);
  $statement->execute();
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  $filledjobsForms = $row['filled_forms'];

  // Get the last checked timestamp from a database or other storage mechanism
  $lastCheckedTimestamp = date('Y-m-d H:i:s');

  // Check for new form submissions
  $newFormsCount = checkNewFormSubmission($lastCheckedTimestamp);

  // Update the last checked timestamp with the current timestamp
  $currentTimestamp = date('Y-m-d H:i:s');
  // Update the last checked timestamp in the database or other storage mechanism

} catch (PDOException $e) {
  // Handle any PDO errors
  echo "Error: " . $e->getMessage();
}
try {
  // Prepare the SQL query
  $query = "SELECT COUNT(*) AS inserted_rows FROM personal_details WHERE date >= NOW() - INTERVAL 1 DAY";
  $statement = $conn->prepare($query);
  // Execute the query
  $statement->execute();

  // Fetch the result
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  $insertedRows = $row['inserted_rows'];


  // Query for the total entries in the current month
  $query1 = "SELECT COUNT(*) AS current_month_entries FROM consultantform WHERE YEAR(date ) = YEAR(CURRENT_DATE()) AND MONTH(date) = MONTH(CURRENT_DATE())";
  $statement = $conn->prepare($query1);
  $statement->execute();
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  $currentMonthEntries = $row['current_month_entries'];


  $query2 = "SELECT COUNT(*) AS filled_forms FROM mocktest_reg WHERE YEAR(date) = YEAR(CURRENT_DATE())";
  $statement = $conn->prepare($query2);
  // Execute the query
  $statement->execute();

  // Fetch the result
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  $filledForms = $row['filled_forms'];


  $query3 = "SELECT COUNT(*) AS filled_forms FROM jobform WHERE YEAR(date) = YEAR(CURRENT_DATE())";
  $statement = $conn->prepare($query3);
  // Execute the query
  $statement->execute();

  // Fetch the result
  $row = $statement->fetch(PDO::FETCH_ASSOC);
  $filledjobsForms = $row['filled_forms'];



} catch (PDOException $e) {
  // Handle any PDO errors
  echo "Error: " . $e->getMessage();
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
          <i class="bi bi-menu-button-wide"></i><span>Assessment Forms</span>
        </a>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" href="consultationform.php">
          <i class="bi bi-journal-text"></i><span>Consultation Forms</span>
        </a>

      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" href="mockform.php">
          <i class="bi bi-journals"></i><span>Mock Forms</span>
        </a>

      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" href="jobform.php">
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

        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-6">
              <div class="card info-card sales-card">



                <div class="card-body">
                  <h5 class="card-title">Assesments Forms <br> Filled <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-buildings-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                        <?php echo $insertedRows; ?>
                      </h6>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span
                        class="text-muted small pt-2 ps-1">increase</span> -->

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-3 col-md-6">
              <div class="card info-card revenue-card">



                <div class="card-body">
                  <h5 class="card-title">Consultations Forms Filled <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                        <?php echo $currentMonthEntries; ?>
                      </h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-3 col-md-6">

              <div class="card info-card customers-card">



                <div class="card-body">
                  <h5 class="card-title">Mocks Forms Filled <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-newspaper"></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                        <?php echo $filledForms; ?>
                      </h6>
                      <!-- <span class="text-danger small pt-1 fw-bold">15%</span> <span
                        class="text-muted small pt-2 ps-1">increase</span> -->

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->
            <div class="col-xxl-3 col-md-6">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Jobs Applied To <span>| This <br> Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person-lines-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>
                        <?php echo $filledjobsForms; ?>
                      </h6>
                      <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span
                        class="text-muted small pt-2 ps-1">decrease</span> -->

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->




          </div>
        </div><!-- End Left side columns -->

      </div>
      </div>



      </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>GSL Pakistan</span></strong>. All Rights Reserved
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>



<script>
  document.addEventListener("DOMContentLoaded", () => {
    echarts.init(document.querySelector("#trafficChart")).setOption
      ({
        tooltip: {
          trigger: 'item'
        },
        legend: {
          top: '5%',
          left: 'center'
        },
        series: [{
          name: 'Access From',
          type: 'pie',
          radius: ['40%', '70%'],
          avoidLabelOverlap: false,
          label: {
            show: false,
            position: 'center'
          },
          emphasis: {
            label: {
              show: true,
              fontSize: '18',
              fontWeight: 'bold'
            }
          },
          labelLine: {
            show: false
          },
          data: [{
            value: 1048,
            name: 'Search Engine'
          },
          {
            value: 735,
            name: 'Direct'
          },
          {
            value: 580,
            name: 'Email'
          },
          {
            value: 484,
            name: 'Union Ads'
          },
          {
            value: 300,
            name: 'Video Ads'
          }
          ]
        }]
      });
  });
</script>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>