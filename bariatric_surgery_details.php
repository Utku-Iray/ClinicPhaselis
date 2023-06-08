<?php
$selectedVal = array();

if (isset($_GET["name"]) && $_GET["name"] != "" && !isset($_GET["lang"])) {

    $name = $_GET['name'];
} else {
    header("Location: index.php");
}
?>
<!doctype html>
<html lang="zxx">

<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>
<?php 

for ($i = 0; $i < count($bariatric_JSON); $i++) {
    if ($bariatric_JSON[$i]->$langTreatmentName == $name) {

        array_push($selectedVal, $bariatric_JSON[$i]);
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


               

            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area">


                    <div class="widget widget_grin_posts_thumb">
                        <h3 class="widget-title">Treatments</h3>
                        <hr>
                        <?php foreach ($bariatric_JSON as $bariatric) {?>
                           
                        <article class="item">
                            <a href="bariatric_surgery_details.php?name=<?= $bariatric->$langTreatmentName ?>" class="thumb">
                                <img src="<?= $bariatric->treatment_first_photo ?>" alt="">
                            </a>
                            <div class="info">
                                <h4 class="title usmall">
                                    <a href="bariatric_surgery_details.php?name=<?= $bariatric->$langTreatmentName ?>"><?= $bariatric->$langTreatmentName ?></a>
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