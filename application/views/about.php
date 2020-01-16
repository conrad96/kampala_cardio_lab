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
    <div class="fancy-breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo base_url(); ?>assets/img/pictures/patient_2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>Who we are</h2>                                                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ****** Single Blog Area Start ****** -->
    <section class="single_blog_area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="row no-gutters">

                        <!-- Single Post Share Info -->
                       <?php $this->load->view("shared/social_media");  ?>

                        <!-- Single Post -->
                        <div class="col-10 col-sm-11">
                            <div class="single-post">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="<?php echo base_url(); ?>assets/img/pictures/values.jpg" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <p>Kampala CardioLab (KCL) opened in June 2010 and has become one of the leaders in its field, helping to advance the overall well-being of its patients. 
                                    <p>At KCL, we believe optimal heart health and performance can be attained through the proper balance of exercise, nutrition and education. 
                                    <p>We aim to educate our patients as well as treat them. Our objective is to provide the best cardiovascular care by creating the most well-rounded experience for the patients in order to elevate their health.
                                    <h4>Mission</h4>                                    
                                    <!-- blockquote -->
                                    <blockquote class="fancy-blockquote">
                                        <span class="quote playfair-font">“</span>
                                        <h5 class="mb-4">“To promote health and well-being by providing accessible, high quality cardiovascular care”</h5>                                        
                                    </blockquote>
                                    <p></p>
                                    <h4>Values</h4>
                                    <ul class="values-list list-group">
                                        <li class="list-group-item"><span class="about-values">R</span>espect</li>
                                        <li class="list-group-item"><span class="about-values">I</span>ntegrity</li>
                                        <li class="list-group-item"><span class="about-values">S</span>tewardship of the God-given knowledge and skill</li>
                                        <li class="list-group-item"><span class="about-values">E</span>xcellence in service</li>                                        
                                    </ul>
                                    <p></p>                                    
                                    <?php $this->load->view("shared/image_carousel", array("images"=> $resources)); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ****** Blog Sidebar ****** -->
                <?php //$this->load->view("shared/blog_sidebar"); ?>
            </div>
        </div>
    </section>
    <!-- ****** Single Blog Area End ****** -->

    <!-- ***** Footer Area Start ***** -->
    <?php $this->load->view("shared/footer"); ?>
    <!-- ***** Footer Area End ***** -->

    <?php $this->load->view("shared/scripts"); ?>
</body>