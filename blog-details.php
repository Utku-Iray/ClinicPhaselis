<?php
$selectedVal = array();

if (isset($_GET["name"]) && $_GET["name"] != "" && !isset($_GET["lang"])) {

    $name = $_GET['name'];
} else {
    header("Location: https://www.clinicphaselis.com");
}
?>
<!doctype html>
<html lang="zxx">
<?php include "config.php"; ?>
<?php
$URL = 'data/blog.json';
$JSON = file_get_contents($URL);
$blog_JSON = json_decode($JSON);

for ($i = 0; $i < count($blog_JSON); $i++) {
    if ($blog_JSON[$i]->$langBlogLink == $name) {

        array_push($selectedVal, $blog_JSON[$i]);
    }
}
$title = "Clinic Phaselis " . $lang['blogs'] ;
$description = $selectedVal[0]->$langBlogDescription ; 
?>
<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>


<!-- Start Page Banner -->
<!-- <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Blog Details</h2>
                    
                    <ul class="pages-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div> -->
<!-- End Page Banner -->

<!-- Start Blog Details Area -->
<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="article-image">
                        <img src="<?= $selectedVal[0]->blog_image_details  ?>" alt="image">


                    </div>

                    <div class="article-content">

                        <h3><?= $selectedVal[0]->$langBlogTitle  ?></h3>
                        <p><?= $selectedVal[0]->$langBlogContent ?></p>

                    </div>


                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area">




                    <div class="widget widget_grin_posts_thumb">
                        <h3 class="widget-title"><?php echo $lang['blogs'] ?></h3>
                        <?php foreach ($blog_JSON as $blog) { ?>
                            <article class="item">
                                <a href="blog-details.php?name=<?= $blog->$langBlogLink ?>" class="thumb">
                                    <span class="fullimage cover" role="img">
                                        <img src="<?= $blog->blog_image_cover ?>" alt="">
                                    </span>
                                </a>
                                <div class="info">

                                    <h4 class="title usmall">
                                        <a href="blog-details.php?name=<?= $blog->$langBlogLink ?>"><?= $blog->$langBlogTitle ?></a>
                                    </h4>
                                </div>
                            </article>
                        <?php } ?>



                    </div>


                </aside>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Details Area -->

<!-- Start Footer Area -->
<?php include 'php/footer.php' ?>