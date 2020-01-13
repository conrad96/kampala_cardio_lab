<?php $this->load->view("shared/header"); ?>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="loader">
            <span class="inner1"></span>
            <span class="inner2"></span>
            <span class="inner3"></span>
        </div>
    </div>

    <!-- Search Form Area -->
    <div class="fancy-search-form d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Close Btn -->
                    <div class="search-close-btn" id="closeBtn">
                        <i class="ti-close" aria-hidden="true"></i>
                    </div>
                    <!-- Form -->
                    <form action="#" method="get">
                        <input type="search" name="fancySearch" id="search" placeholder="| Enter Your Search...">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <?php $this->load->view("shared/header_area"); ?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Hero Area Start ***** -->
    <?php $this->load->view("shared/top_header"); ?>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Top Feature Area Start ***** -->
    <div class="fancy-top-features-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="fancy-top-features-content">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-clock-o" aria-hidden="true"></i> Expertise</h5>                                    
                                    <p>We pride ourselves in delivering the best cardiography in the country with State of the Art Equipment
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Reliability</h5>
                                    <p>We keep in touch with our clients and monitor their recovery 
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-diamond" aria-hidden="true"></i> Quality Treatment</h5>
                                    <p>Experienced team of doctors and nurses to treat you
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Feature Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="fancy-about-us-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about-us-text">                        
                        <h2>Kampala CardioLab (KCL) </h2>
                            <p>We specialize in the treatment and management of cardiovascular diseases while emphasizing preventive, and overall health and wellness of patients with state-of-the-art equipment and well- trained staff to optimize the care of each patient.</p> 
                            <p>Because many factors affect heart health like exercise, diet, environment and heredity, we strive to provide the most comprehensive cardiovascular care possible in order to optimize the care and well- being of each patient.</p>
                        <a href="<?php echo base_url(); ?>index.php/Home/about" class="btn fancy-btn fancy-dark">Read More</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-5 ml-xl-auto">
                    <div class="about-us-thumb wow fadeInUp" data-wow-delay="0.5s">
                        <img src="<?php  echo base_url(); ?>assets/img/pictures/reception_2.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Skills Area Start ***** -->
    <section class="fancy-skills-area section-padding-200">
        <!-- Side Thumb -->
        <div class="skills-side-thumb">
            <img src="<?php  echo base_url(); ?>assets/img/pictures/reception.jpeg" alt="">
        </div>
        <!-- Skills Content -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-5 ml-auto">
                    <div class="section-heading">
                        <h2>Services offered</h2>
                        <p>some of the services offered at Kampala cardio lab include:</p>
                    </div>
                    <div class="skills-content">
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar wow fadeInUp" data-wow-delay="0.5s">
                            <h5 class="services-list">Electrocardiogram (ECG/EKG)</h5>
                            <!-- <p>A test that reveals rythm problems such as the cause of slow or fast heart beat -->
                        </div>
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar wow fadeInUp" data-wow-delay="1s">
                            <h5 class="services-list">Echocardiogram</h5> 
                            <!-- <p>A test that allows the doctor to see how the heart is beating and pumping blood.</p>                            -->
                        </div>
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar wow fadeInUp" data-wow-delay="1.5s">
                            <h5 class="services-list">Exercise Stress Test</h5>     
                            <!-- <p>A test used to see how the heart responds during times when it is working its hardest</p>                        -->
                        </div>
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar wow fadeInUp" data-wow-delay="2s">
                            <h5 class="services-list">Holter Monitoring</h5>
                            <!-- <p>A test used to detect irregularities in your heart rhythm that an electrocardiogram cannot detect.</p> -->
                        </div>
                        <div class="single_progress_bar wow fadeInUp" data-wow-delay="2s">
                            <h5 class="services-list">Spirometry with oximetry</h5>
                            <!-- <p>A common test used to assess how well your lungs work by measuring how much air you inhale, how much you exhale and how quickly you exhale.</p> -->
                        </div>
                        <div class="single_progress_bar wow fadeInUp" data-wow-delay="2s">
                            <h5 class="services-list">Sleep apnea treatment</h5>
                            <!-- <p>A test used to diagnose sleep disorders.</p> -->
                        </div>
                        <div class="single_progress_bar wow fadeInUp" data-wow-delay="2s">
                            <h5 class="services-list">Cardiac rehabilitation</h5>
                            <!-- <p>A customized outpatient program of exercise and education to help improve one’s health.</p> -->
                        </div>
                    </div>
                    <a href="#" id="findOutBtn" class="btn fancy-btn fancy-dark">Find out more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Skills Area End ***** -->

    <!-- ***** Service Area Start ***** -->
    <section class="fancy-services-area bg-img bg-overlay section-padding-100-70" style="background-image: url(img/bg-img/hero-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="serviceSection" class="section-heading heading-white text-center">
                        <h2>Our Services</h2>
                        <p>We diagnose and treat cardiovascular conditions while emphasizing preventive, and overall health and wellness of patients with state-of-the-art equipment and well-trained staff to optimize the care of each patient.  This is achieved through an evaluation process that involves the use of the following</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service -->
                <div class="col-12 col-md-4">
                    <div data-service="diagnostic_echocardiography" class="single-service-area text-center wow fadeInUp service-card" data-wow-delay="0.5s">
                        <img class="services-icon" src="<?php echo base_url(); ?>assets/img/pictures/electrodiagram-150x149.jpg" />
                        <h5>Electrocardiogram (ECG/EKG)</h5>
                        <p>A test that reveals rhythm problems such as the cause of slow or fast heart beat.</p>
                    </div>
                </div>
                <!-- Single Service -->
                <div class="col-12 col-md-4">
                    <div data-service="ecg_monitoring" class="service-card single-service-area text-center wow fadeInUp" data-wow-delay="1s">
                        <img class="services-icon" src="<?php echo base_url(); ?>assets/img/pictures/diagnostic-150x150.jpg" />
                        <h5>Echocardiogram</h5>
                        <p>A test that allows the doctor to see how the heart is beating and pumping blood.</p>
                    </div>
                </div>
                <!-- Single Service -->
                <div class="col-12 col-md-4">
                    <div data-service="exercise_stress_test" class="service-card single-service-area text-center wow fadeInUp" data-wow-delay="1.5s">
                        <img class="services-icon" src="<?php echo base_url(); ?>assets/img/pictures/exercise-150x150.jpg" />
                        <h5>Exercise Stress Test</h5>
                        <p>A test used to see how the heart responds during times when it is working its hardest.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Service -->
                <div class="col-12 col-md-4">
                    <div data-service="holter_monitoring" class="service-card single-service-area text-center wow fadeInUp" data-wow-delay="0.5s">
                        <img class="services-icon" src="<?php echo base_url(); ?>assets/img/pictures/holter-150x150.jpg" />
                        <h5>Holter Monitoring</h5>
                        <p>A test used to detect irregularities in your heart rhythm that an electrocardiogram couldn't detect.</p>
                    </div>
                </div>
                <!-- Single Service -->
                <div class="col-12 col-md-4">
                    <div data-service="spirometry_test" class="service-card single-service-area text-center wow fadeInUp" data-wow-delay="1s">
                        <img class="services-icon" src="<?php echo base_url(); ?>assets/img/pictures/spirometry-150x150.png" />
                        <h5>Spirometry with Oximetry</h5>
                        <p>A common test used to assess how well your lungs work by measuring how much air you inhale, how much you exhale and how quickly you exhale.</p>
                    </div>
                </div>
                <!-- Single Service -->
                <div class="col-12 col-md-4">
                    <div data-service="sleep_apnea_treatment" class="service-card single-service-area text-center wow fadeInUp" data-wow-delay="1.5s">
                        <img class="services-icon" src="<?php echo base_url(); ?>assets/img/pictures/CPAP-150x150.png" />
                        <h5>Sleep Apnea Treatment</h5>
                        <p>A test used to diagnose sleep disorders.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div data-service="cardiac_rehabilitation" class="service-card single-service-area text-center wow fadeInUp" data-wow-delay="1.5s">
                        <img class="services-icon" src="<?php echo base_url(); ?>assets/img/pictures/cardiac-150x150.jpg" />
                        <h5>Cardiac Rehabilitation</h5>
                        <p>A customized outpatient program of exercise and education to help improve one’s health.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Service Area End ***** -->

    <!-- *****fun facts area ***** -->
   <?php $this->load->view("shared/fun_facts"); ?>
    <!-- ***** fun facts area ***** -->

    <!-- ***** CTA Area Start ***** -->
    <section class="fancy-cta-area bg-img bg-overlay section-padding-100" style="background-image: url(img/bg-img/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2>Want to schedule appontment ?</h2>
                        <p>Click the button below to schedule an appoinment with us.</p>
                        <a href="#" class="btn fancy-btn">Make Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <section class="fancy-blog-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Latest News</h2>
                        <p>We Are A Creative Digital Agency. Focused on Growing Brands Online</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                        <img src="<?php  echo base_url(); ?>assets/img/blog-img/blog-1.jpg" alt="">
                        <div class="blog-content">
                            <h5><a href="static-page.html">We Create Experiences</a></h5>
                            <p>The Fancy that recognize the talent and effort of the best web designers, developers and agencies in the world.</p>
                            <a href="static-page.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1s">
                        <img src="<?php  echo base_url(); ?>assets/img/blog-img/blog-2.jpg" alt="">
                        <div class="blog-content">
                            <h5><a href="static-page.html">Simple, Fast And Fun</a></h5>
                            <p>The Fancy that recognize the talent and effort of the best web designers, developers and agencies in the world.</p>
                            <a href="static-page.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- Single Blog -->
                <div class="col-12 col-md-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="1.5s">
                        <img src="<?php  echo base_url(); ?>assets/img/blog-img/blog-3.jpg" alt="">
                        <div class="blog-content">
                            <h5><a href="static-page.html">Device Friendly</a></h5>
                            <p>The Fancy that recognize the talent and effort of the best web designers, developers and agencies in the world.</p>
                            <a href="static-page.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <?php $this->load->view("shared/footer"); ?>
    <!-- ***** Footer Area End ***** -->

    <?php $this->load->view("shared/scripts"); ?>
</body>