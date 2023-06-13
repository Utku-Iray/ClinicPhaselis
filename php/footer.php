<!-- End Dental Tourism Blog Area -->
<div id="capitol-callback">
  <div class="cpt-circle"></div>
  <div class="cpt-circle-fill"></div>
  <a href="https://api.whatsapp.com/send?phone=+905421590907&text=Hello" id="WhatsAppBtnDesktop" target="_blank" class="main-button" lang="en">
    <img src="https://nhtagent.com/nht-upload/assets/javascripts/WhatsApp/WhatsApp.png" width="50%">
  </a>
</div>
<!-- Start Dental Tourism Footer Area -->
<div class="dental-tourism-footer-area pt-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-sm-6">
                <div class="dental-tourism-footer-widget">
                    <h2>
                        <a href="index.php">
                            <img src="assets/images/logo/clinic-phaselis-beyaz.png" alt="">
                        </a>
                    </h2>
                    
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="dental-tourism-footer-widget">
                    <h3><?php echo $lang['usefulLinks'] ?></h3>

                    <ul class="quick-links">
                        <li><i class='bx bxs-chevrons-right'></i> <a href="index.php"><?php echo $lang['homePage'] ?></a></li>
                        <li><i class='bx bxs-chevrons-right'></i> <a href="about-us.php"><?php echo $lang['aboutUs'] ?></a></li>
                        <li><i class='bx bxs-chevrons-right'></i> <a href="contact-us.php"><?php echo $lang['contactUs'] ?></a></li>
                        <!-- <li><i class='bx bxs-chevrons-right'></i> <a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><i class='bx bxs-chevrons-right'></i> <a href="contact-us.html">Contact Us</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="dental-tourism-footer-widget">
                    <h3><?php echo $lang['ourServices'] ?></h3>

                    <ul class="quick-links">
                        <?php foreach ($plastic_JSON as $plastic ) {?>
                            
                       
                        <li><i class='bx bxs-chevrons-right'></i> <a href="<?= $plastic -> treatment_link ?>"><?= $plastic -> $langTreatmentName ?></a></li>
                        <?php   } ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="dental-tourism-footer-widget">
                    <h3><?php echo $lang['ourServices'] ?></h3>

                    <ul class="quick-links">
                        <li><i class='bx bxs-chevrons-right'></i> <a href="bariatric_surgery.php"><?php echo $lang['bariatricSurgery'] ?></a></li>
                        <li><i class='bx bxs-chevrons-right'></i> <a href="dental_procedures.php"><?php echo $lang['dentalProcedures'] ?></a></li>
                        <li><i class='bx bxs-chevrons-right'></i> <a href="hair_transplant_details.php"><?php echo $lang['hairTransplant'] ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="dental-tourism-footer-widget">
                    <h3><?php echo $lang['contact'] ?></h3>

                    <ul class="info-list">
                        <li><span><?php echo $lang['location'] ?>:</span> Muratpaşa/Antalya</li>
                        <li><span><?php echo $lang['phone'] ?>:</span> <a href="tel:+90 0850 757 93 94"> + 90 0850 757 93 94</a></li>
                        <li><span>Whatsapp:</span> <a href="tel:+90 542 159 09 07">+90 542 159 09 07</a></li>
                        <li><span>E-Mail:</span> <a href="mailto:info@clinicphaselis.com">info@clinicphaselis.com</a></li>
                    </ul>
                    <ul class="share-link">
                        <li>
                            <span><?php echo $lang['getSocial'] ?>:</span>
                        </li>
                        <li>
                                <a href="https://www.facebook.com/clinicphaselis" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="https://twitter.com/?lang=en" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li> -->
                            <li>
                                <a href="https://www.linkedin.com/company/clinicphaselis/" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/clinicphaselis/" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="dental-tourism-copyright-area">
            <div class="container">
                <div class="copyright-area-content">
                    <p>
                        © 
                        <a href="https://www.ideaplusagency.net/" target="_blank">
                            Ideaplus Digital Agency
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Dental Tourism Footer Area -->

<!-- Start Go Top Area -->
<div class="go-top">
    <i class='bx bx-up-arrow-alt'></i>
</div>
<!-- End Go Top Area -->

<!-- Jquery Slim JS -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Meanmenu JS -->
<script src="assets/js/jquery.meanmenu.js"></script>
<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Jquery Appear JS -->
<script src="assets/js/jquery.appear.js"></script>
<!-- Odometer JS -->
<script src="assets/js/odometer.min.js"></script>
<!-- Nice Select JS -->
<script src="assets/js/nice-select.min.js"></script>
<!-- Popup JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Ajaxchimp JS -->
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Form Validator JS -->
<script src="assets/js/form-validator.min.js"></script>
<!-- Contact JS -->
<script src="assets/js/contact-form-script.js"></script>
<!-- Wow JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/main.js"></script>
</body>

</html>