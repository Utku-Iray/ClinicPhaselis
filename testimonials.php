<!doctype html>
<html lang="zxx">
<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>
  
        
        <!-- Start Page Banner -->
        <!-- <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Testimonials</h2>
                    
                    <ul class="pages-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Testimonials</li>
                    </ul>
                </div>
            </div>
        </div> -->
        <!-- End Page Banner -->
        
        <!-- Start Review Area -->
        <section class="review-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">
                        <i class="flaticon-hashtag-symbol"></i>
                        <?php echo $lang['ourReview'] ?>
                    </span>
                    <h2>   <?php echo $lang['realReviewFrom'] ?></h2>
                </div>

                <div class="row">
                    <?php foreach ($reviews_JSON as $reviews ) { ?>
                     <div class="col-lg-4 col-md-6">
                     <div class="single-review-item mb-30">
                         <div class="icon">
                             <i class="flaticon-left-quote"></i>
                         </div>
                         <p><?= $reviews->reviews_content ?></p>
 
                         <div class="review-info">
                             <img src="<?= $reviews->reviews_image ?>" alt="image">
                             <h3><?= $reviews->reviews_name ?></h3>
                            
                         </div>
                     </div>
                 </div>
                 <?php   } ?>
                    

               
                    
                </div>
            </div>
        </section>
        <!-- End Review Area -->

<?php include 'php/footer.php' ?>
        