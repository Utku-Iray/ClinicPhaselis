<!doctype html>
<html lang="zxx">
<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>


<!-- Start Page Banner -->
<!-- <div class="page-banner-area">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Blog</h2>
                        
                        <ul class="pages-list">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div> -->
<!-- End Page Banner -->

<!-- Start Blog Area -->
<section class="blog-area pt-100 pb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">
                <i class="flaticon-hashtag-symbol"></i>
                Clinic Phaselis Blog
            </span>

        </div>

        <div class="row">
            <?php foreach ($blog_JSON as $blog) { ?>
               <div class="col-lg-4 col-md-6">
               <div class="single-blog">
                   <div class="blog-image">
                       <a href="blog-details.html"><img src="<?= $blog->$blog_image_cover ?>" alt="image"></a>


                   </div>
                   <div class="blog-content">
                       <h3>
                           <a href="blog-details.html"><?= $blog->$blog_title ?></a>
                       </h3>
                       <p><?= $blog->$blog_description ?></p>
                       <a href="blog-details.html" class="blog-btn">Read More</a>


                   </div>
               </div>
           </div>
           <?php } ?>
           



        </div>
    </div>
</section>
<!-- End Blog Area -->

<!-- Start Footer Area -->
<?php include 'php/footer.php' ?>