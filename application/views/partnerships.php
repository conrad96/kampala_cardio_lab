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
    <div class="fancy-breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo base_url(); ?>assets/img/pictures/KCL-017-1024x684.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>Our Partnerships</h2>                                                
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ****** Single Blog Area Start ****** -->
    <section class="single_blog_area section-padding-100" >
    <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="row no-gutters">
                        <!-- Single Post Share Info -->
                       <?php //$this->load->view("shared/social_media");  ?>

                        <!-- Single Post -->
                        <div class="col-12 col-sm-12">
                            <div class="single-post">
                                <!-- Post Thumb -->
                                
                                <!-- Post Content -->
                                <div class="post-content">                                    
                                    <div class="row" id="partnership-cards-row">                                        
                                        <div class="column-partnership">
                                            <div class="card">                                                			        				        	
                                                <img src="<?php echo base_url(); ?>assets/img/pictures/partnerships/PHOTO-2018-12-04-08-58-29_4016x5000-resized.jpg" alt="" class="img-team">                                                                                                
                                                <span class="team-title">Moses M. Kitakule  MBchB,FACP,FCCP</span>                                               
                                                <span class="job-title">Consultant Pulmonary, Sleep, Critical care Medicine.</span>
                                            </div>
                                        </div> 
                                        <div class="column-partnership">
                                            <div class="card">                                                			        				        	
                                                <img src="<?php echo base_url(); ?>assets/img/pictures/partnerships/PHOTO-2018-12-06-01-16-00.jpg" alt="" class="img-team">                                                                                                
                                                <span class="team-title">Emmy Okello  </span>                                               
                                                <span class="job-title">MD, PhD,  FACC.</span>
                                            </div>
                                        </div> 
                                        <div class="column-partnership">
                                            <div class="card">                                                			        				        	
                                                <img src="<?php echo base_url(); ?>assets/img/pictures/partnerships/8ef531f8-0b48-4801-b2a3-b93665d5baa7_4016x5000.jpg" alt="" class="img-team">                                                                                                
                                                <span class="team-title">Aliku Twalib </span>                                               
                                                <span class="job-title">MBChB, MMED, Consultant Paediatric Cardiologist </span>
                                            </div>
                                        </div>                                                                                                                                                                                                                                                                                                                          
                                    </div>                                                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ****** Blog Sidebar ****** -->
                <?php //$this->load->view("shared/blog_sidebar"); ?>
            </div>
    </section>
    <!-- ****** Single Blog Area End ****** -->

    <!-- ***** Footer Area Start ***** -->
    <?php $this->load->view("shared/footer"); ?>
    <!-- ***** Footer Area End ***** -->

    <?php $this->load->view("shared/scripts"); ?>
</body>