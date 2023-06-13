<!doctype html>
<html lang="zxx">
<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>


<!-- Start Page Banner -->
<!-- <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Services</h2>
                    
                    <ul class="pages-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div> -->
<!-- End Page Banner -->

<!-- Start Services Area -->
<section class="services-area  pb-70" style="padding-top:50px">
    <div class="container">
        <div class="section-title">
            <!-- <span class="sub-title">
                        <i class="flaticon-hashtag-symbol"></i>
                        Our Best Dental Services
                    </span> -->
            <h2><?php echo $lang['bariatricSurgery'] ?></h2>
            <hr>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p> -->
        </div>

        <div class="row">
            <?php foreach ($bariatric_JSON as $bariatric) { ?>

                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <div class="services-image">
                            <a href="bariatric_surgery_details.php?name=<?= $bariatric->$langTreatmentName ?>"><img src="<?= $bariatric->treatment_first_photo ?>" alt="image"></a>

                            <div class="icon">
                                <a href="bariatric_surgery_details.php?name=<?= $bariatric->$langTreatmentName ?>"><i class="flaticon-chair"></i></a>
                            </div>
                        </div>

                        <div class="services-content">
                            <h3>
                                <a href="bariatric_surgery_details.php?name=<?= $bariatric->$langTreatmentName ?>"><?= $bariatric->$langTreatmentName ?></a>
                            </h3>
                            <p><?= $bariatric->$langTreatmentDescription ?></p>
                        </div>
                    </div>
                </div>
            <?php  } ?>

        </div>
    </div>
</section>
<!-- End Services Area -->

<!-- Start Footer Area -->
<?php include 'php/footer.php' ?>