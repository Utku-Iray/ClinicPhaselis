<?php

$URL = 'data/plastic_surgery_body.json';
$JSON = file_get_contents($URL);
$body_JSON = json_decode($JSON);

$selectedVal = array();

if (isset($_GET["name"])) {

    $name = $_GET['name'];
    for ($i = 0; $i < count($body_JSON); $i++) {
        if ($body_JSON[$i]->treatment_name_en == $name) {

            array_push($selectedVal, $body_JSON[$i]);
        }
    }
} else {
    header("Location: index.php");
}

?>
<!doctype html>
<html lang="zxx">

<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>


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
                    <img src="<?= $selectedVal[0] ->treatment_photo ?>" alt="image">
                </div>

                <div class="services-details-content">
                    <?= $selectedVal[0] ->treatment_details ?>
                </div>


               

            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area">


                    <div class="widget widget_grin_posts_thumb">
                        <h3 class="widget-title">Treatments</h3>
                        <hr>
                        <?php foreach ($body_JSON as $body) {?>
                           
                        <article class="item">
                            <a href="plastic_surgery_body_details.php?name=<?= $body -> treatment_name_en ?>" class="thumb">
                                <img src="<?= $body -> treatment_first_photo ?>" alt="">
                            </a>
                            <div class="info">
                                <h4 class="title usmall">
                                    <a href="plastic_surgery_body_details.php?name=<?= $body -> treatment_name_en ?>"><?= $body -> treatment_name_en ?></a>
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