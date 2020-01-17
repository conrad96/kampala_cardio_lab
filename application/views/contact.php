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

    <!-- ***** Breadcumb Area Start ***** -->
    <div id="bg-disp" class="fancy-breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo base_url(); ?>assets/img/pictures/reception_2.jpeg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>Contact Us</h2>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="fancy-contact-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Google Map -->
                    <div id="google-map-canvas">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.751954252935!2d32.57527334258987!3d0.33047209123872845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb737282783d%3A0xefb556ed7dc72747!2sAfri%20Courts%20Parking!5e0!3m2!1sen!2sug!4v1579243896051!5m2!1sen!2sug" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6">
                    <!-- Contact Details -->
                    <div class="contact-details-area">
                        <div class="section-heading">
                            <h2>Contact Us</h2>
                            <p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
                        </div>
                        <p>+256 759 277 332, +256 392 260041  <br> kampalacardiolab@gmail.com 
                        </p>
                        <p>AfriCourts, 2nd Floor, <br> plot 107, Buganda Rd. Kampala</p>
                        <p>Open hours: 8.00-18.00 Mon-Fri
                    </div>
                    <!-- Follow Us -->
                    <div class="follow-us-area">
                        <h2>Follow Us:</h2>
                       <?php //$this->load->view("shared/social_media"); ?>
                        <a href="https://facebook.com" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://twitter.com" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>                        
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <!-- Contact Form -->
                    <div class="contact-form-area">
                        <div class="section-heading">
                            <h2>Get In Touch With Us!</h2>
                            <p>Fill out the form below </p>
                        </div>
                        <div class="contact-form">
                            <form id="contactForm">
                                <!-- Message Input Area Start -->
                                <div class="contact_input_area">
                                    <div class="row">
                                        <!-- Single Input Area -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <!-- Single Input Area -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                            </div>
                                        </div>
                                        
                                        <!-- Single Input Area -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Messages" required></textarea>
                                            </div>
                                        </div>
                                        <!-- Single Input Area -->
                                        <div class="col-8">
                                            <button type="submit" class="btn fancy-btn fancy-dark bg-transparent">Send Message</button>
                                        </div>
                                        <div class="col-4" id="msg-stat">
                                            <!-- loader -->
                                            <img src="<?php echo base_url(); ?>assets/img/loading.gif" alt="" class="loading-gif" style="display: none;">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Contact Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <?php $this->load->view("shared/footer"); ?>
    <!-- ***** Footer Area End ***** -->

    <?php $this->load->view("shared/scripts"); ?>
</body>