<!doctype html>
<html lang="zxx">

<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>

<!-- Start Page Banner -->
<!-- <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Contact Us</h2>
                    
                    <ul class="pages-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div> -->
<!-- End Page Banner -->

<!-- Start Contact Area -->
<section class="contact-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">
                <i class="flaticon-hashtag-symbol"></i>
                <?php echo $lang['contactUs'] ?>
            </span>
            <h2><?php echo $lang['contactDescription'] ?></h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p> -->
        </div>
        <div class="row" style="    background-color: aliceblue;
    padding: 40px;
    border-radius: 15px;">
            <div class="col-md-6">
                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="<?php echo $lang['name'] ?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="<?php echo $lang['eMail'] ?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="<?php echo $lang['number'] ?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="<?php echo $lang['subjject'] ?>">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="<?php echo $lang['message'] ?>"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn"><?php echo $lang['sendMessage'] ?></button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class=" pb-75">
                    <div class="container">
                        <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-6">
                                <div class="hospital-information-card">
                                    <div class="content">
                                        <div class="icon">
                                            <i class='bx bx-phone-call'></i>
                                        </div>
                                        <h3><?php echo $lang['contactUsFree'] ?></h3>
                                        <p>
                                        <i class='bx bxs-phone'></i>  <a href="tel:+9008507579394">+ 90 0850 757 93 94 </a> <br>
                                        <i class='bx bxl-whatsapp'></i> <a href="tel:+905421590907">+ 90 542 159 09 07</a>
                                        </p>
                                    </div>
                                    <div class="shape">
                                        <img src="assets/images/hospital/info-shape.png" alt="image">
                                    </div>
                                </div>
                            </div>
                          

                            <div class="col-lg-12 col-md-6">
                                <div class="hospital-information-card">
                                    <div class="content">
                                        <div class="icon">
                                            <i class='bx bx-envelope'></i>
                                        </div>
                                        <h3><?php echo $lang['EMail'] ?></h3>
                                        <p>
                                            <a href="mailto: info@clinicphaselis.com"> info@clinicphaselis.com</a>
                                           
                                        </p>
                                    </div>
                                    <div class="shape">
                                        <img src="assets/images/hospital/info-shape.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="hospital-information-card">
                                    <div class="content">
                                        <div class="icon">
                                            <i class='bx bx-map'></i>
                                        </div>
                                        <h3><?php echo $lang['officeAddress'] ?></h3>
                                        <p>Fener Mahallesi, 1967. Sokak, No:6/8 Muratpaşa/Antalya </p>
                                    </div>
                                    <div class="shape">
                                        <img src="assets/images/hospital/info-shape.png" alt="image">
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</section>
<!-- End Contact Area -->

<!-- Start Footer Area -->

<?php include 'php/footer.php' ?>