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
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="index.html">fancy</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fancyNav" aria-controls="fancyNav" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-menu"></span></button>
                        <div class="collapse navbar-collapse" id="fancyNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="index.html">Home</a>
                                        <a class="dropdown-item" href="static-page.html">Static Page</a>
                                        <a class="dropdown-item" href="contact.html">Contact</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Work</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="static-page.html">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                            <!-- Search & Shop Btn Area -->
                            <div class="fancy-search-and-shop-area">
                                <a id="search-btn" href="#"><i class="icon_search" aria-hidden="true"></i></a>
                                <a id="shop-btn" href="#"><i class="icon_bag_alt" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Hero Area Start ***** -->
    <div class="fancy-hero-area bg-img bg-overlay animated-img" style="background-image: url(img/bg-img/hero-1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="fancy-hero-content text-center">
                        <!-- Video Overview -->
                        <div class="video-overview">
                            <a href="https://www.youtube.com/watch?v=f5BBJ4ySgpo" class="video--play--btn"><i class="fa fa-play" aria-hidden="true"></i> Watch The Overview</a>
                        </div>
                        <h2>Website Design, Brand Strategy, Digital Marketing with Stunning Results</h2>
                        <a href="#" class="btn fancy-btn fancy-active">About Us</a>
                        <a href="#" class="btn fancy-btn">Get a quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                    <h5><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Reliability</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-clock-o" aria-hidden="true"></i> Expertise</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-diamond" aria-hidden="true"></i> Quality</h5>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
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
                        <h2>We Are A Creative Digital Agency Focused on Growing Brands Online</h2>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi.</p>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum. Sed ut perspiciatis unde omnis iste.</p>
                        <a href="#" class="btn fancy-btn fancy-dark">Read More</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-5 ml-xl-auto">
                    <div class="about-us-thumb wow fadeInUp" data-wow-delay="0.5s">
                        <img src="img/bg-img/about-1.jpg" alt="">
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
            <img src="img/bg-img/skills.png" alt="">
        </div>
        <!-- Skills Content -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-5 ml-auto">
                    <div class="section-heading">
                        <h2>We Serve All Industries</h2>
                        <p>We stay on top of our industry by being experts in yours. We measure our success by the results we drive for our clients.</p>
                    </div>
                    <div class="skills-content">
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar wow fadeInUp" data-wow-delay="0.5s">
                            <h6>Website Design</h6>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                        </div>
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar wow fadeInUp" data-wow-delay="1s">
                            <h6>Brand Strategy</h6>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="95"></span>
                            </div>
                        </div>
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar wow fadeInUp" data-wow-delay="1.5s">
                            <h6>Digital Marketing</h6>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="85"></span>
                            </div>
                        </div>
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar wow fadeInUp" data-wow-delay="2s">
                            <h6>Website Development</h6>
                            <div id="bar4" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn fancy-btn fancy-dark">Work with us</a>
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
                    <div class="section-heading heading-white text-center">
                        <h2>Our Services</h2>
                        <p>We Are A Creative Digital Agency. Focused on Growing Brands Online</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service -->
                <div class="col-12 col-md-4">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="0.5s">
                        <i class="ti-ruler-pencil"></i>
                        <h5>Website Design</h5>
                        <p>The Fancy that recognize the talent and effort of the best web designers, developers and agencies in the world.</p>
                    </div>
                </div>
                <!-- Single Service -->
                <div class="col-12 col-md-4">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="1s">
                        <i class="ti-desktop"></i>
                        <h5>Website Development</h5>
                        <p>The Fancy that recognize the talent and effort of the best web designers, developers and agencies in the world.</p>
                    </div>
                </div>
                <!-- Single Service -->
                <div class="col-12 col-md-4">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="1.5s">
                        <i class="ti-announcement"></i>
                        <h5>Digital Marketing</h5>
                        <p>The Fancy that recognize the talent and effort of the best web designers, developers and agencies in the world.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Service Area End ***** -->

    <!-- ***** Testimonials Area Start ***** -->
    <section class="fancy-testimonials-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial d-md-flex align-items-center">
                            <!-- Testimonial Thumb -->
                            <div class="testimonial-thumbnail">
                                <img src="img/clients-img/1.jpg" alt="">
                            </div>
                            <!-- Content -->
                            <div class="testimonilas-content">
                                <span class="playfair-font quote">“</span>
                                <h5>I wanted to mention that these days, when the opposite of good customer and tech support tends to be the norm, it’s always great having a team like you guys at Fancy! So, be sure that I’ll always spread the word about how good your product is and the extraordinary level of support that you provide any time there is any need for it.</h5>
                                <h6>Aigars Silkalns - <span>CEO DeerCreative</span></h6>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial d-md-flex align-items-center">
                            <!-- Testimonial Thumb -->
                            <div class="testimonial-thumbnail">
                                <img src="img/clients-img/1.jpg" alt="">
                            </div>
                            <!-- Content -->
                            <div class="testimonilas-content">
                                <span class="playfair-font quote">“</span>
                                <h5>I wanted to mention that these days, when the opposite of good customer and tech support tends to be the norm, it’s always great having a team like you guys at Fancy! So, be sure that I’ll always spread the word about how good your product is and the extraordinary level of support that you provide any time there is any need for it.</h5>
                                <h6>Aigars Silkalns - <span>CEO DeerCreative</span></h6>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial d-md-flex align-items-center">
                            <!-- Testimonial Thumb -->
                            <div class="testimonial-thumbnail">
                                <img src="img/clients-img/1.jpg" alt="">
                            </div>
                            <!-- Content -->
                            <div class="testimonilas-content">
                                <span class="playfair-font quote">“</span>
                                <h5>I wanted to mention that these days, when the opposite of good customer and tech support tends to be the norm, it’s always great having a team like you guys at Fancy! So, be sure that I’ll always spread the word about how good your product is and the extraordinary level of support that you provide any time there is any need for it.</h5>
                                <h6>Aigars Silkalns - <span>CEO DeerCreative</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    <section class="fancy-cta-area bg-img bg-overlay section-padding-100" style="background-image: url(img/bg-img/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2>Ready To Discuss Your Project?</h2>
                        <p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
                        <a href="#" class="btn fancy-btn">Work with us</a>
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
                        <img src="img/blog-img/blog-1.jpg" alt="">
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
                        <img src="img/blog-img/blog-2.jpg" alt="">
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
                        <img src="img/blog-img/blog-3.jpg" alt="">
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