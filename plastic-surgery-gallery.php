<!doctype html>
<html lang="zxx">
   
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