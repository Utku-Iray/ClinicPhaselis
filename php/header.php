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

$URL = 'data/dialcode.json';
$JSON = file_get_contents($URL);
$phone_JSON = json_decode($JSON);

$URL = 'data/blog.json';
$JSON = file_get_contents($URL);
$blog_JSON = json_decode($JSON);


?>


<body>

    <div class="preloader">
        <div class="loader">
            <div class="sbl-half-circle-spin"></div>
        </div>
    </div>

    <header class="header-area">

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
                                Registered by Lilith Health Tourism
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
                            <a href="https://clinicphaselis.com">
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
                        <a class="navbar-brand" href="https://clinicphaselis.com"> <img src="assets/images/logo/clinic-phaselis.png" class="main-logo" alt="logo"></a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                
                                <li class="nav-item">
                                    <a href="https://clinicphaselis.com" class="nav-link"><?php echo $lang['homePage'] ?></a>
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
                                <li class="nav-item">
                                    <a href="blog.php" class="nav-link"><?php echo $lang['blogs'] ?></a>
                                </li>
                                
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

           
        </div>

    </header>
  