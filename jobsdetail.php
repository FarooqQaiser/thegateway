<?php

session_start();
include('dbcon.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Careers - GSL Pakistan</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/GSL-PAK.png" rel="icon" />
    <link href="assets/img/GSL-PAK.png" rel="GSL-PAK-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Mentor
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <h1 class="logo me-auto">
          <a href="index.html" style="color: #f26722">
            GateWay<span style="color: #fff">Study</span>Links
          </a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="courses.html">Courses</a></li>
            <li><a href="studyAbroad.html">Study Abroad</a></li>
            <li><a href="succesStories.html">Success Stories</a></li>
            <li><a class="active" href="careers.html">Careers</a></li>
            <!-- <li><a href="pricing.html">Pricing</a></li> -->

            <!-- <li class="dropdown">
              <a href="#"
                ><span>Drop Down</span> <i class="bi bi-chevron-down"></i
              ></a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown">
                  <a href="#"
                    ><span>Deep Drop Down</span>
                    <i class="bi bi-chevron-right"></i
                  ></a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
              </ul>
            </li> -->
            <li><a href="contact.html">Contact</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

        <a href="courses.html" class="get-started-btn">Get Started</a>
      </div>
    </header>
    <!-- End Header -->
    <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
          <h2>Careers</h2>
          <p style="font-size: larger">
            <em> We provide the best educational platform</em>
          </p>
        </div>
      </div>
      <!-- End Breadcrumbs -->

      <!-- Start of Career Section -->
      <section class="careers" id="careers">
        <!-- <div class="container" data-aos="fade-up">
          <h3>What we Do Offer!</h3>
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                <img src="assets/img/img 3.avif" class="img-fluid" alt="..." />
                <div class="course-content">
                  <div
                    class="d-flex justify-content-between align-items-center mb-3"
                  >
                    <h4 style="background-color: #f26722">
                      <a
                        style="color: white"
                        href="/gslpak/consultationForm.html"
                        >Register Now!</a
                      >
                    </h4>
                  </div>

                  <h3>IELTS Prepration</h3>
                  <p>
                    Familiarize with exam format,improve English skills,use
                    official IELTS materials.Practice sample questions, take
                    mock tests,improve time management.Focus on weaknesses, get
                    feedback for improvement.
                  </p>
                  <div
                    class="trainer d-flex justify-content-between align-items-center"
                  >
                    <div
                      class="trainer-profile d-flex align-items-center"
                    ></div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class=""></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0"
            >
              <div class="course-item">
                <img src="assets/img/img 4.avif" class="img-fluid" alt="..." />
                <div class="course-content">
                  <div
                    class="d-flex justify-content-between align-items-center mb-3"
                  >
                    <h4 style="background-color: #f26722">
                      <a
                        style="color: white"
                        href="/gslpak/consultationForm.html"
                        >Register Now!</a
                      >
                    </h4>
                  </div>

                  <h3>PTE Prepration</h3>
                  <p>
                    PTE Academic is a computer-based English proficiency test
                    for non-native speakers. It assesses academic language
                    skills.It is taken by those applying to study in an
                    English-speaking environment. Recognized worldwide by
                    institutions. Universities, colleges, and governmentsaccept
                    PTE Academic as a valid language test.
                  </p>
                  <div
                    class="trainer d-flex justify-content-between align-items-center"
                  >
                    <div
                      class="trainer-profile d-flex align-items-center"
                    ></div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class=""></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div
              class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0"
            >
              <div class="course-item">
                <img src="assets/img/img 5.avif" class="img-fluid" alt="..." />
                <div class="course-content">
                  <div
                    class="d-flex justify-content-between align-items-center mb-3"
                  >
                    <h4 style="background-color: #f26722">
                      <a
                        style="color: white"
                        href="/gslpak/consultationForm.html"
                        >Register Now!</a
                      >
                    </h4>
                  </div>

                  <h3>OET Prepration</h3>
                  <p>
                    OET: English test for healthcare professionals aiming to
                    work or study in an English environment. Focuses on
                    workplace communication skills. Tailored for healthcare
                    contexts, assesses language proficiency. Vital for success
                    in the medical field. Designed to ensure effective
                    communication in an English-speaking work setting. Ideal for
                    aspiring healthcare workers.
                  </p>
                  <div
                    class="trainer d-flex justify-content-between align-items-center"
                  >
                    <div class="trainer-profile d-flex align-items-center">
                      <img src="" class="img-fluid" alt="" />
                      <span></span>
                    </div>
                    <div class="trainer-rank d-flex align-items-center">
                      <i class=""></i>

                      <i></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <div class="container">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" hidden >ID</th>
                <th scope="col">Job Title</th>

                <th scope="col">Job Type</th>
                <th scope="col">Job Description</th>
              </tr>
            </thead>
            <tbody>
            <?php
                $query = "SELECT job_ID,jobTitle,jobType,jobDescription	FROM uploadjobs ";
                $statment = $conn->prepare($query);
                $statment->execute();

                $statment->setFetchMode(PDO::FETCH_OBJ);
                $result = $statment->fetchAll();
                if($result)
                {       
                    foreach($result as $row)
                    {
                         ?>
                            <tr>
                                  <td hidden><?= $row->job_ID; ?></td>
                                  <td><?= $row->jobTitle; ?></td>
                                  <td><?= $row->jobType; ?></td>
                                  <td><?= $row->jobDescription; ?></td>
                                  
                            </tr>
                         <?php
                    }
                }
                else
                {
                    ?>
                        <tr>
                            <td colspan="8">No record found</td>
                        </tr>
                    <?php
                }


                ?>
            </tbody>
          </table>
          <a href="./gslpak/jobForm.html"><button class="apply" type="submit">Apply Now</button></a>
        </div>
      </section>
      <!-- End of Career -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3><span style="color: #f26722">GSL</span> PAKISTAN</h3>
              <p>
                Head Office: GSL Pakistan, Office 7-9, Anique Arcade, I-8
                Markaz, Islamabad <br /><br />
                <strong>Phone:</strong> +92 331 873 1234<br />
              </p>

              <p><strong> Email:</strong>gatewayconsultancy9@gmail.com<br /></p>
            </div>
          </div>
        </div>
      </div>

      <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <span>GSL Pakistan</span>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
            Designed by
            <a href="http://abtitinnovation.com/"
              >ABT IT Innovation PVT LTD.</a
            >
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">

          <a
            href="https://www.facebook.com/gatewayconsultancy9"
            class="facebook"
            ><i class="bx bxl-facebook"></i
          ></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a
            href="https://youtube.com/channel/UC2_6LIivyZq8em4F7jiIySQ"
            class="google-plus"
            ><i class="bx bxl-youtube hover"></i
          ></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
