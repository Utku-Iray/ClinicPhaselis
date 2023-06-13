<?php
include "config.php";
$URL = 'data/bariatric_surgery.json';
$JSON = file_get_contents($URL);
$bariatric_JSON = json_decode($JSON);

$URL = 'data/dental_procedures.json';
$JSON = file_get_contents($URL);
$dental_JSON = json_decode($JSON);

$URL = 'data/plastic_surgery_procedures.json';
$JSON = file_get_contents($URL);
$plastic_JSON = json_decode($JSON);

$URL = 'data/plastic_surgery_body.json';
$JSON = file_get_contents($URL);
$body_JSON = json_decode($JSON);

$URL = 'data/plastic_surgery_breast.json';
$JSON = file_get_contents($URL);
$breast_JSON = json_decode($JSON);

$URL = 'data/plastic_surgery_face.json';
$JSON = file_get_contents($URL);
$face_JSON = json_decode($JSON);

$URL = 'data/plastic_surgery_rhinoplasty.json';
$JSON = file_get_contents($URL);
$rhinoplasty_JSON = json_decode($JSON);

$URL = 'data/hair_transplant.json';
$JSON = file_get_contents($URL);
$hair_JSON = json_decode($JSON);

$URL = 'data/reviews.json';
$JSON = file_get_contents($URL);
$reviews_JSON = json_decode($JSON);

$URL = 'data/before_after.json';
$JSON = file_get_contents($URL);
$beforeAfter_JSON = json_decode($JSON);

$URL = 'data/dental_before_after.json';
$JSON = file_get_contents($URL);
$dentalBeforeAfter_JSON = json_decode($JSON);


?>


<body>

    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="loader">
            <div class="sbl-half-circle-spin"></div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Header Area -->
    <header class="header-area">

        <!-- Start Dental Tourism Top Area -->
        <div class="dental-tourism-top-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12">
                        <ul class="top-dental-tourism-information with-left">
                            <li>
                                <i class='bx bxl-whatsapp'></i>
                                <a href="tel:+905421590907">+90 542 159 09 07</a>
                            </li>

                            <li>
                                <i class='bx bxs-map'></i>
                                Fener Mahallesi, 1967. Sokak, No:6/8 Muratpaşa/Antalya
                            </li>

                            <li>
                                <i class='bx bx-envelope-open'></i>
                                <a href="mailto:info@clinicphaselis.com">info@clinicphaselis.com</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <ul class="top-dental-tourism-optional">
                            <li>
                                <a href="https://www.facebook.com/clinicphaselis" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="https://twitter.com/?lang=en" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li> -->
                            <li>
                                <a href="https://www.linkedin.com/company/clinicphaselis/" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/clinicphaselis/" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Dental Tourism Top Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area dental-tourism-navbar">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.php">
                                <img src="assets/images/logo/clinic-phaselis.png" class="main-logo" alt="logo">
                                <img src="assets/images/logo/clinic-phaselis.png" class="white-logo" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.php"> <img src="assets/images/logo/clinic-phaselis.png" class="main-logo" alt="logo"></a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <!-- <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    Home 
                                    <i class='bx bx-caret-down'></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link">Home One</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="index-2.html" class="nav-link">Home Two</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="index-3.html" class="nav-link">Home Three</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="index.php" class="nav-link active">Home Four</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="index-5.html" class="nav-link">Home Five</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="index-6.html" class="nav-link">Home Six</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="index-7.html" class="nav-link">Home Seven</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="index-8.html" class="nav-link">Home Eight</a>
                                    </li>
                                </ul>
                            </li> -->
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link"><?php echo $lang['homePage'] ?></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#0" class="nav-link"><?php echo $lang['aboutUs'] ?> <i class='bx bx-caret-down'></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="about-us.php" class="nav-link"><?php echo $lang['whoAreWe'] ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="accommodation.php" class="nav-link"><?php echo $lang['hospitals'] ?></a>
                                        </li>

                                    </ul>
                                </li>

                                <!-- <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Dentist 
                                    <i class='bx bx-caret-down'></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="dentist.html" class="nav-link">Dentist</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="dentist-details.html" class="nav-link">Dentist Details</a>
                                    </li>
                                </ul>
                            </li> -->

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                    <?php echo $lang['treatments'] ?>
                                        <i class='bx bx-caret-down'></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="plastic_surgery_procedures.php" class="nav-link"> <?php echo $lang['plasticSurgeryProcedures'] ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="bariatric_surgery.php" class="nav-link"> <?php echo $lang['bariatricSurgery'] ?></a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="dental_procedures.php" class="nav-link"> <?php echo $lang['dentalProcedures'] ?></a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="hair_transplant_details.php" class="nav-link"> <?php echo $lang['hairTransplant'] ?></a>
                                        </li>
                                    </ul>
                                </li>

                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Pages
                                        <i class='bx bx-caret-down'></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="about-us.html" class="nav-link">About Us</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="appointment.html" class="nav-link">Appointment</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="pricing.html" class="nav-link">Pricing</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="testimonials.html" class="nav-link">Testimonials</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="gallery.html" class="nav-link">Gallery</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="login.html" class="nav-link">Login</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="register.html" class="nav-link">Register</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">FAQ</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="error-404.html" class="nav-link">404 Error</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="terms-of-service.html" class="nav-link">Terms of Service</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                        </li>
                                    </ul>
                                </li> -->

                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog
                                        <i class='bx bx-caret-down'></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog.html" class="nav-link">Blog</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">Blog Details</a>
                                        </li>
                                    </ul>
                                </li> -->
                                <li class="nav-item">
                                    <a href="testimonials.php" class="nav-link"><?php echo $lang['reviews'] ?></a>
                                </li>
                                <li class="nav-item">
                                    <a href="#0" class="nav-link"><?php echo $lang['baGallery'] ?>
                                        <i class='bx bx-caret-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="plastic-surgery-gallery.php" class="nav-link"><?php echo $lang['plasticSurgeryBA'] ?></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dental-gallery.php" class="nav-link"><?php echo $lang['dentalBA'] ?></a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact-us.php" class="nav-link"><?php echo $lang['contactUs'] ?></a>
                                </li>

                                <li class="nav-item">
                                    <a href="#0" class="nav-link"> <img style="width: 30px;" src="assets/images/flag/<?= $_SESSION['lang'] ?>.png" alt="">
                                        <i class='bx bx-caret-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="<?php
                                                        $langQuery['lang'] = "tr";
                                                        $query_result = http_build_query($langQuery);
                                                        echo basename($_SERVER['PHP_SELF']) . "?" . $query_result; ?>" class="nav-link"><img style="width:40px" src="assets/images/flag/tr.png" alt=""></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php
                                                        $langQuery['lang'] = "fr";
                                                        $query_result = http_build_query($langQuery);
                                                        echo basename($_SERVER['PHP_SELF']) . "?" . $query_result; ?>" class="nav-link"><img style="width:40px" src="assets/images/flag/fr.png" alt=""></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php
                                                        $langQuery['lang'] = "en";
                                                        $query_result = http_build_query($langQuery);
                                                        echo basename($_SERVER['PHP_SELF']) . "?" . $query_result; ?>" class="nav-link"><img style="width:40px" src="assets/images/flag/en.png" alt=""></a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>

                            <div class="others-options d-flex align-items-center">
                                <!-- <div class="option-item">
                                <div class="search-btn">
                                    <a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                        <i class="flaticon-search"></i>
                                    </a>
                                </div>
                            </div> -->

                                <div class="option-item">
                                    <div class="navbar-btn">
                                        <a href="https://www.trustpilot.com/review/clinicphaselis.com"><img width="100px" src="assets/images/trustpliot.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <div class="search-btn">
                                        <a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                            <i class="flaticon-search"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="navbar-btn">
                                        <a href="appointment.html" class="default-btn"><?php echo $lang['bookAppointment'] ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- End Navbar Area -->

    </header>
    <!-- Start Header Area -->
    <!-- Search Modal -->
    <!-- <div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal">
                    <i class='bx bx-x'></i>
                </button>
            </div>

            <div class="modal-body">
                <form class="modal-search-form">
                    <input type="search" class="search-field" placeholder="Search...">

                    <button type="submit"><i class='bx bx-search-alt'></i></button>
                </form>
            </div>
        </div>
    </div>
</div> -->
    <!-- End Search Modal -->