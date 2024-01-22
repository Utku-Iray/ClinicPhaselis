<!doctype html>
<html lang="zxx">
<?php include "config.php"; ?>
<?php

include 'php/head.php';
include 'php/header.php';

?>
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
                            <a href="blog-details.php?name=<?= $blog->$langBlogLink ?>"><img src="<?= $blog->blog_image_cover ?>" alt="image"></a>


                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="blog-details.php?name=<?= $blog->$langBlogLink ?>"><?= $blog->$langBlogTitle ?></a>
                            </h3>
                            <p><?= $blog->$langBlogDescription ?></p>
                            <a href="blog-details.php?name=<?= $blog->$langBlogLink ?>" class="blog-btn"><?php echo $lang['learnMore'] ?></a>


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