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

for ($i = 0; $i < count($blog_JSON); $i++) {
    if ($blog_JSON[$i]->$langBlogTitle == $name) {

        array_push($selectedVal, $blog_JSON[$i]);
    }
}



?>

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
                                <a href="blog-details.php?name=<?= $blog->$langBlogTitle ?>" class="thumb">
                                    <span class="fullimage cover" role="img">
                                        <img src="<?= $blog->blog_image_cover ?>" alt="">
                                    </span>
                                </a>
                                <div class="info">

                                    <h4 class="title usmall">
                                        <a href="blog-details.php?name=<?= $blog->$langBlogTitle ?>"><?= $blog->$langBlogTitle ?></a>
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