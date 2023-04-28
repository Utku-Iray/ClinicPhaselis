<!-- End Dental Tourism Blog Area -->

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
                    <h3>Useful Links</h3>

                    <ul class="quick-links">
                        <li><i class='bx bxs-chevrons-right'></i> <a href="about-us.html">Homepage</a></li>
                        <li><i class='bx bxs-chevrons-right'></i> <a href="services.html">About Us</a></li>
                        <li><i class='bx bxs-chevrons-right'></i> <a href="appointment.html">Contact Us</a></li>
                        <!-- <li><i class='bx bxs-chevrons-right'></i> <a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><i class='bx bxs-chevrons-right'></i> <a href="contact-us.html">Contact Us</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="dental-tourism-footer-widget">
                    <h3>Our Services</h3>

                    <ul class="quick-links">
                        <?php foreach ($plastic_JSON as $plastic ) {?>
                            
                       
                        <li><i class='bx bxs-chevrons-right'></i> <a href="services-details.html"><?= $plastic -> treatment_name_en ?></a></li>
                        <?php   } ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="dental-tourism-footer-widget">
                    <h3>Our Services</h3>

                    <ul class="quick-links">
                        <?php foreach ($breast_JSON as $breast ) {?>
                            
                       
                        <li><i class='bx bxs-chevrons-right'></i> <a href="services-details.html"><?= $breast -> treatment_name_en ?></a></li>
                        <?php   } ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="dental-tourism-footer-widget">
                    <h3>Contact</h3>

                    <ul class="info-list">
                        <li><span>Location:</span> Muratpaşa/Antalya</li>
                        <li><span>Phone:</span> <a href="tel:088123654987">+90 542 159 09 07</a></li>
                        <li><span>Email:</span> <a href="mailto:info@clinicphaselis.com">info@clinicphaselis.com</a></li>
                    </ul>
                    <ul class="share-link">
                        <li>
                            <span>Get Social:</span>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank"><i class='bx bxl-facebook'></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/?lang=en" target="_blank"><i class='bx bxl-twitter'></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank"><i class='bx bxl-linkedin'></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank"><i class='bx bxl-instagram'></i></a>
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