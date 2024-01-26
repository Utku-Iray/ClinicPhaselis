<!doctype html>
<html lang="zxx">
<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>

        
        <!-- Start Page Banner -->
        <!-- <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Appointment</h2>
                    
                    <ul class="pages-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Appointment</li>
                    </ul>
                </div>
            </div>
        </div> -->
        <!-- End Page Banner -->
        
        <!-- Start Features Area -->
        <section class="features-area-two pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-features-box">
                            <div class="content">
                                <div class="icon">
                                    <i class="flaticon-caduceus"></i>
                                </div>
                                <h3>
                                    <a href="#0"><?php echo $lang['qualityBrackets'] ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-features-box">
                            <div class="content">
                                <div class="icon">
                                    <i class="flaticon-policy"></i>
                                </div>
                                <h3>
                                    <a href="#0"><?php echo $lang['certifiedDoctors'] ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-features-box">
                            <div class="content">
                                <div class="icon">
                                    <i class="flaticon-diamond"></i>
                                </div>
                                <h3>
                                    <a href="#0"><?php echo $lang['experience'] ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-features-box">
                            <div class="content">
                                <div class="icon">
                                    <i class="flaticon-hospitalisation"></i>
                                </div>
                                <h3>
                                    <a href="#0"><?php echo $lang['patientCare'] ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Area -->

        <!-- Start Appointment Area -->
        <section class="appointment-area bg-image ptb-100">
            <div class="container">
                <div class="appointment-form">
                    <h4><i class="flaticon-calendar"></i> <?php echo $lang['makeaAnAppointment'] ?></h4>

                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="<?php echo $lang['name'] ?>">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="<?php echo $lang['eMail'] ?>">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="<?php echo $lang['number'] ?>">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="<?php echo $lang['subjject'] ?>">
                        </div>

                        <button type="submit" class="default-btn"><?php echo $lang['bookAppointment'] ?></button>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Appointment Area -->

<?php include 'php/footer.php' ?>
      