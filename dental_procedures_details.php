<?php
$selectedVal = array();

if (isset($_GET["name"]) && $_GET["name"] != "" && !isset($_GET["lang"])) {

    $name = $_GET['name'];
} else {
    header("Location: https://clinicphaselis.com");
}
?>
<!doctype html>
<html lang="zxx">
<?php include "config.php"; ?>

<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>
<?php

for ($i = 0; $i < count($dental_JSON); $i++) {
    if ($dental_JSON[$i]->$langTreatmentLink == $name) {

        array_push($selectedVal, $dental_JSON[$i]);
    }
}


?>


<!-- Start Page Banner -->
<!-- <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Services Details</h2>
                    
                    <ul class="pages-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Services Details</li>
                    </ul>
                </div>
            </div>
        </div> -->
<!-- End Page Banner -->

<!-- Start Services Details Area -->
<section class="services-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="services-details-image">
                    <img src="<?= $selectedVal[0]->treatment_photo ?>" alt="image">
                </div>

                <div class="services-details-content">
                    <?= $selectedVal[0]->$langTreatmentContent ?>
                </div>
                <?php
                $treatment_faq = $selectedVal[0]->$langFaq;
                $treatment_answer = $selectedVal[0]->$langAnswer;
                if ($treatment_faq != [""]) { ?>
                    <section class="faq-area ptb-100">
                        <div class="container">
                            <div class="section-title" style="text-align:left">
                                <span class="sub-title">
                                    <i class="flaticon-hashtag-symbol"></i>
                                    <?php echo $lang['faq'] ?>
                                </span>
                                <h2><?php echo $lang['frequentlyAskedQuestions'] ?></h2>
                            </div>

                            <div class="faq-accordion">
                                <div class="accordion">
                                    <?php
                                    for ($i = 0; $i < count($treatment_faq); $i++) {  ?>
                                        <div class="accordion-item">
                                            <div class="accordion-title active">
                                                <i class='bx bx-plus'></i>
                                                <?= $treatment_faq[$i] ?>
                                            </div>
                                            <div class="accordion-content show">
                                                <?= $treatment_answer[$i] ?>

                                            </div>
                                        </div>
                                    <?php    } ?>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php   } ?>




            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area">


                    <div class="widget widget_grin_posts_thumb">
                        <h3 class="widget-title"><?php echo $lang['treatments'] ?></h3>
                        <hr>
                        <?php foreach ($dental_JSON as $dental) { ?>

                            <article class="item">
                                <a href="dental_procedures_details.php?name=<?= $dental->$langTreatmentLink ?>" class="thumb">
                                    <img src="<?= $dental->treatment_first_photo ?>" alt="">
                                </a>
                                <div class="info">
                                    <h4 class="title usmall">
                                        <a href="dental_procedures_details.php?name=<?= $dental->$langTreatmentLink ?>"><?= $dental->$langTreatmentName ?></a>
                                    </h4>
                                </div>
                            </article>
                        <?php  } ?>

                    </div>






                </aside>
            </div>
        </div>
    </div>
</section>
<!-- End Services Details Area -->

<!-- Start Footer Area -->
<?php include 'php/footer.php' ?>