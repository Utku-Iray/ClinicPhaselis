<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Flaticon Two CSS -->
        <link rel="stylesheet" href="assets/css/flaticon-two.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <!-- Carousel CSS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Carousel Default CSS -->
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Popup CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Dark CSS -->
        <link rel="stylesheet" href="assets/css/dark.css">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
		
		<title>Grin - Medical Health & Dental Clinic HTML Template</title>

        <link rel="icon" type="image/png" href="assets/images/favicon.png">
    </head>

    
<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>
        
        <!-- Start Page Banner -->
        <!-- <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Gallery</h2>
                    
                    <ul class="pages-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div> -->
        <!-- End Page Banner -->
        
        <!-- Start Gallery Area -->
        <section class="gallery-area pt-100 pb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">
                        <i class="flaticon-hashtag-symbol"></i>
                       B&A Gallery
                    </span>
                    <h2>Before & After Gallery</h2>
                </div>

                <div class="row">
                    <?php foreach ($beforeAfter_JSON as $beforeAfter) { ?>
                      <div class="col-lg-4 col-md-6">
                      <div class="single-gallery">
                          <img src="<?= $beforeAfter -> before_after_image  ?> " alt="image">

                      </div>
                  </div>
                  <?php } ?>
                    


                </div>
            </div>
        </section>
        <!-- End Gallery Area -->

        
<?php include 'php/footer.php' ?>