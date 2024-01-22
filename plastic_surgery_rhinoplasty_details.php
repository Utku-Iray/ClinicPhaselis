<!doctype html>
<html lang="zxx">
<?php include "config.php"; ?>

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
                    <img src="<?= $rhinoplasty_JSON[0]->treatment_photo ?>" alt="image">
                </div>

                <div class="services-details-content">
                    <?= $rhinoplasty_JSON[0]->$langTreatmentContent ?>
                </div>
                <section class="faq-area ptb-100">
                    <div class="container">
                        <div class="section-title" style="text-align:left">
                            <span class="sub-title">
                                <i class="flaticon-hashtag-symbol"></i>
                                <?php echo $lang['faq'] ?>
                            </span>
                            <h2> <?php echo $lang['frequentlyAskedQuestions'] ?></h2>
                        </div>

                        <div class="faq-accordion">
                            <div class="accordion">
                                <?php
                                $treatment_faq = $rhinoplasty_JSON[0]->$langFaq;
                                $treatment_answer = $rhinoplasty_JSON[0]->$langAnswer;
                                for ($i = 0; $i < count($treatment_faq); $i++) { ?>
                                    <div class="accordion-item">
                                        <div class="accordion-title active">
                                            <i class='bx bx-plus'></i>
                                            <?= $treatment_faq[$i] ?>
                                        </div>
                                        <div class="accordion-content show">
                                            <?= $treatment_answer[$i] ?>

                                        </div>
                                    </div>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                </section>



            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area">


                    <div class="widget widget_grin_posts_thumb">
                        <h3 class="widget-title"><?php echo $lang['treatments'] ?></h3>
                        <hr>
                        <?php foreach ($plastic_JSON as $rhinoplasty) { ?>

                            <article class="item">
                                <a href="<?= $rhinoplasty->treatment_link ?>" class="thumb">
                                    <img src="<?= $rhinoplasty->treatment_first_photo ?>" alt="">
                                </a>
                                <div class="info">
                                    <h4 class="title usmall">
                                        <a href="<?= $rhinoplasty->treatment_link ?>"><?= $rhinoplasty->$langTreatmentName ?></a>
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