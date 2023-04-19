<!doctype html>
<html lang="zxx">

<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>




<!-- Start Dental Tourism Banner Area -->
<div class="dental-tourism-banner-area">
    <div class="container-fluid">
        <div class="dental-tourism-banner-content">
            <!-- <span class="sub-title wow animate__animated animate__fadeInDown" data-wow-delay="0.5s"># Professional</span> -->
            <h1 class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.5s">Welcome to a NEW ERA in COSMETİC SURGERY</h1>
            <!-- <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="0.5s">Mauris blandit aliquet elit eget tincidunt nibh pulvinar. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus.</p> -->

            <div class="banner-btn wow animate__animated animate__fadeInDown" data-wow-delay="0.5s">
                <a href="appointment.html" class="default-btn">Book Appointment</a>
            </div>
        </div>
    </div>
</div>
<!-- End Dental Tourism Banner Area -->

<!-- Start Dental Tourism Features Area -->
<div class="dental-tourism-features-area pt-100 pb-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="single-dental-tourism-features">
                    <div class="content">
                        <div class="icon-image">
                            <a href="#"><img src="assets/images/dental-tourism/features/travel.png" alt="image"></a>

                            <!-- <div class="number">1</div> -->
                        </div>
                        <h3>
                            <a href="#">Tours</a>
                        </h3>
                        <p>Tours to all historical and touristic places in and around Antalya</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-dental-tourism-features">
                    <div class="content">
                        <div class="icon-image">
                            <a href="#"><img src="assets/images/dental-tourism/features/assistance.png" alt="image"></a>

                            <!-- <div class="number">2</div> -->
                        </div>
                        <h3>
                            <a href="#">Accommodation</a>
                        </h3>
                        <p>Accommodation in 3 to 5 star hotels with high guest satisfaction rates</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-dental-tourism-features">
                    <div class="content">
                        <div class="icon-image">
                            <a href="#"><img src="assets/images/dental-tourism/features/cost.png" alt="image"></a>

                            <div class="number">3</div>
                        </div>
                        <h3>
                            <a href="#">All Transfers</a>
                        </h3>
                        <p>Tours to all historical and touristic places in and around Antalya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Dental Tourism Features Area -->

<!-- Start Dental Tourism About Area -->
<div class="dental-tourism-about-area pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="dental-tourism-about-image">
                    <img src="assets/images/dental-tourism/about/about.jpg" alt="image">

                    <div class="certified">
                        <img src="assets/images/dental-tourism/about/certified.png" alt="image">
                    </div>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="dental-tourism-about-content">
                    <span># Clinic Phaselis</span>
                    <h3>Quality Meets Aesthetics</h3>

                    <ul class="list">
                        <li><i class='bx bxs-check-shield'></i>Combining our expertise and experience in cosmetic surgery and patient care with our spectacular services, we deliver a wide variety of procedures to address any cosmetic concerns you may have.</li>
                        <li><i class='bx bxs-check-shield'></i>Our aim is to provide you an exceptional medical service by introducing you to our experienced board-certified surgeons and medical team.</li>
                        <li><i class='bx bxs-check-shield'></i> Our medical team provides a specific treatment plan personalized and totally tailored to your unique needs. With us, you will feel the difference of receiving an exceptional health care management from A to Z. </li>
                        <li><i class='bx bxs-check-shield'></i> We understand your concerns about having a procedure abroad therefore we are here with you throughout the entire process providing support 24/7.</li>
                    </ul>
                    <div class="about-btn">
                        <a href="about-us.html" class="default-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Dental Tourism About Area -->

<!-- Start Dental Tourism Services Area -->
<div class="dental-tourism-services-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="section-title-warp">
                    <span class="sub-title"># Treatments</span>
                    <h2>Enhance Your Beauty with a Genuine Touch</h2>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="section-warp-btn">
                    <a href="plastic_surgery_procedures.php" class="default-btn">See All Services</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="dental-tourism-services-slides owl-carousel owl-theme">
            <?php foreach ($plastic_JSON as $plastic) { ?>

                <div class="dental-tourism-services-card">
                    <div class="services-image">
                        <a href="<?= $plastic->treatment_link ?>"><img src="<?= $plastic->treatment_first_photo ?>" alt="image"></a>

                        <div class="icon">
                            <i class="flaticon-dental-implant"></i>
                        </div>
                    </div>
                    <div class="services-content">
                        <h3>
                            <a href="<?= $plastic->treatment_link ?>"><?= $plastic->treatment_name_en ?></a>
                        </h3>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- End Dental Tourism Services Area -->

<!-- Start Dental Tourism Choose Area -->
<div class="dental-tourism-choose-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="dental-tourism-choose-content">
                    <span># Why Choose Us</span>
                    <h3>We never leave health to chance.</h3>
                    <p><i class='bx bxs-badge-check' style="color:black" ></i> We work with board certified surgeons who are compassionate and friendly in order to achieve the finest results. They will gladly spend time with you to determine the best ways to enhance your most attractive features. We designed a 'Zero-Risk-Model' to ensure that any complication be avoided at all costs. Every step and every decision made by you or your surgeons are documented in a Unique Patient Surgery File.
                        ‍<br><br>
                        <i class='bx bxs-badge-check' style="color:black"></i> We concentrated on medical expertise and invested in delivering the best care to our patients throughout their journey. We offer quality at an affordable and accessible price. <br><br>
                        <i class='bx bxs-badge-check'style="color:black"></i>  We devised a Zero-Risk-Model to eliminate the possibility of complications by carefully preparing and carrying out each phase of your surgery plan. A unique Patient Surgery File is formed to document every detail; such as your blood results, consultations, anesthesia as well as the decisions you and your doctor make to achieve your goals, outlining your tailored schedule. You have regular check-ins with our medical team and have priority access to our support lines. Before your operation, a team comprised of your internal medicine specialist, anesthesiologist, and plastic surgeon evaluate and create a precise surgery road map.</p>
                   

                  

                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="dental-tourism-choose-image">
                    <img src="assets/images/dental-tourism/choose/choose.png" alt="image">

                    <a href="https://www.youtube.com/watch?v=Buhosl-jJGA" class="video-btn popup-youtube">
                        <i class='bx bx-play-circle'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Dental Tourism Choose Area -->

<!-- Start Dental Tourism Appointment Area -->
<div class="dental-tourism-appointment-area ptb-100">
    <div class="container">
        <div class="dental-tourism-appointment-form">
            <h4><i class="flaticon-calendar"></i> Make An Appointment</h4>

            <form>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <select>
                                <option value="1">Select a Procedure</option>
                                <option value="2">General Dentistry</option>
                                <option value="3">Cosmetic Dentistry</option>
                                <option value="4">Dental Implants</option>
                                <option value="5">Orthodontics</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Name">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter Email">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="date" class="form-control" placeholder="Appointment Date">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <select>
                                <option value="1">Select Country</option>
                                <option value="2">Finland</option>
                                <option value="3">Denmark</option>
                                <option value="4">Norway</option>
                                <option value="5">Belgium</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Country Code">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">Book An Appointment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Dental Tourism Appointment Area -->

<div class="skin-care-features-area pt-100 pb-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="skin-care-features-card">
                    <div class="features-title">
                        <div class="icon-image">
                            <a href="#0"><img src="assets/images/skin-care/features/medical-doctor.png" alt="image"></a>
                        </div>
                        <h3>
                            <a href="#0">Free Medical Consultation</a>
                        </h3>
                    </div>
                    <p>Unique treatment plan specifically tailored for you</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="skin-care-features-card">
                    <div class="features-title">
                        <div class="icon-image">
                            <a href="#0"><img src="assets/images/skin-care/features/medical-doctor.png" alt="image"></a>
                        </div>
                        <h3>
                            <a href="#0">Board-Certified Surgeons</a>
                        </h3>
                    </div>
                    <p>Surgeons with extensive experience and expertise in their fields who are mostly internationally accredited</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="skin-care-features-card">
                    <div class="features-title">
                        <div class="icon-image">
                            <a href="#0"><img src="assets/images/skin-care/features/medical-doctor.png" alt="image"></a>
                        </div>
                        <h3>
                            <a href="#0">Best Hospitals</a>
                        </h3>
                    </div>
                    <p>Accredited chain hospitals with international standards</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="skin-care-features-card">
                    <div class="features-title">
                        <div class="icon-image">
                            <a href="#0"><img src="assets/images/skin-care/features/medical-doctor.png" alt="image"></a>
                        </div>
                        <h3>
                            <a href="#0">Excellent Aftercare</a>
                        </h3>
                    </div>
                    <p>24/7 private nurse assistance throughout your medical journey</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="skin-care-features-card">
                    <div class="features-title">
                        <div class="icon-image">
                            <a href="#0"><img src="assets/images/skin-care/features/medical-doctor.png" alt="image"></a>
                        </div>
                        <h3>
                            <a href="#0">Ongoing Follow-up</a>
                        </h3>
                    </div>
                    <p>Medical support throughout your recovery after you leave via your consultant and surgeon</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="skin-care-features-card">
                    <div class="features-title">
                        <div class="icon-image">
                            <a href="#0"><img src="assets/images/skin-care/features/medical-doctor.png" alt="image"></a>
                        </div>
                        <h3>
                            <a href="#0">Recovery Hotels</a>
                        </h3>
                    </div>
                    <p>Accommodation at hotels designed for your recovery</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start Dental Tourism Tourists Area -->
<div class="dental-tourism-tourists-area pb-75">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="dental-tourism-tourists-content">
                    <h3>What We Offer?</h3>
                    <!-- <p>Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi pretium ut lacinia in elementum enim.</p> -->

                    <ul class="list">
                        <li><i class='bx bxs-check-shield'></i> Clinic Phaselis aims to maintain the boutique and premium practice model for every patient. All our patients are exclusive and they all receive an exclusive service with affordable prices. </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="dental-tourism-tourists-imagez" style="position:inherit">
                    <div class="row">

                        <div class="tourists-image">
                            <img src="assets/images/belge.jpg" alt="image">


                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Dental Tourism Tourists Area -->

<!-- Start Dental Tourism Review Area -->
<div class="dental-tourism-review-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title-warp">
                    <span class="sub-title"># Our Clients Review</span>
                    <h2>Real Review From Our Real Customer</h2>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="section-warp-btn">
                    <a href="testimonials.html" class="default-btn">See All Review</a>
                </div>
            </div>
        </div>

        <div class="dental-tourism-review-slides owl-carousel owl-theme">
            <div class="dental-tourism-review-card">
                <div class="review-info">
                    <img src="assets/images/dental-tourism/review/review-1.jpg" class="rounded-circle" alt="image">
                    <h3>Dorothy Bratt</h3>
                    <span>Manager</span>
                </div>
                <p>“Vivamus magna justo lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi pretium ut lacinia.”</p>
                <ul class="rating">
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                </ul>
                <div class="icon-quote">
                    <i class='bx bxs-quote-alt-right'></i>
                </div>
            </div>
            <div class="dental-tourism-review-card">
                <div class="review-info">
                    <img src="assets/images/dental-tourism/review/review-2.jpg" class="rounded-circle" alt="image">
                    <h3>Milan Wakefield</h3>
                    <span>Director</span>
                </div>
                <p>“Vivamus magna justo lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi pretium ut lacinia.”</p>
                <ul class="rating">
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                </ul>
                <div class="icon-quote">
                    <i class='bx bxs-quote-alt-right'></i>
                </div>
            </div>
            <div class="dental-tourism-review-card">
                <div class="review-info">
                    <img src="assets/images/dental-tourism/review/review-1.jpg" class="rounded-circle" alt="image">
                    <h3>Dorothy Bratt</h3>
                    <span>Manager</span>
                </div>
                <p>“Vivamus magna justo lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi pretium ut lacinia.”</p>
                <ul class="rating">
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                </ul>
                <div class="icon-quote">
                    <i class='bx bxs-quote-alt-right'></i>
                </div>
            </div>
            <div class="dental-tourism-review-card">
                <div class="review-info">
                    <img src="assets/images/dental-tourism/review/review-2.jpg" class="rounded-circle" alt="image">
                    <h3>Milan Wakefield</h3>
                    <span>Director</span>
                </div>
                <p>“Vivamus magna justo lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi pretium ut lacinia.”</p>
                <ul class="rating">
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                </ul>
                <div class="icon-quote">
                    <i class='bx bxs-quote-alt-right'></i>
                </div>
            </div>
            <div class="dental-tourism-review-card">
                <div class="review-info">
                    <img src="assets/images/dental-tourism/review/review-1.jpg" class="rounded-circle" alt="image">
                    <h3>Dorothy Bratt</h3>
                    <span>Manager</span>
                </div>
                <p>“Vivamus magna justo lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi pretium ut lacinia.”</p>
                <ul class="rating">
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                </ul>
                <div class="icon-quote">
                    <i class='bx bxs-quote-alt-right'></i>
                </div>
            </div>
            <div class="dental-tourism-review-card">
                <div class="review-info">
                    <img src="assets/images/dental-tourism/review/review-2.jpg" class="rounded-circle" alt="image">
                    <h3>Milan Wakefield</h3>
                    <span>Director</span>
                </div>
                <p>“Vivamus magna justo lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit. Quisque velit nisi pretium ut lacinia.”</p>
                <ul class="rating">
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                    <li><i class='bx bxs-star'></i></li>
                </ul>
                <div class="icon-quote">
                    <i class='bx bxs-quote-alt-right'></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Dental Tourism Review Area -->

<!-- Start Dental Tourism Blog Area -->

<?php include 'php/footer.php' ?>