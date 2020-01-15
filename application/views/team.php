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
    <div class="fancy-breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo base_url(); ?>assets/img/pictures/KCL-096-768x1150.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>Our Dedicated Team</h2>                                                
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
                       <?php //$this->load->view("shared/social_media");  ?>

                        <!-- Single Post -->
                        <div class="col-12 col-sm-11">
                            <div class="single-post">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    
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