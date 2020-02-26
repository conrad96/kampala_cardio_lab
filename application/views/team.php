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
    <div id="bg-disp" class="fancy-breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo base_url(); ?>assets/img/pictures/KCL-096-768x1150.jpg);">
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
    <section class="single_blog_area section-padding-100" >
    <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="row gutters">
                        <!-- Single Post Share Info -->
                       <?php //$this->load->view("shared/social_media");  ?>

                        <!-- Single Post -->
                        <div class="col-12 col-sm-12">
                            <div class="single-post">
                                <!-- Post Thumb -->
                                <div class="team-section">
                                <!-- Post Content -->
                                    <div class="post-content">                                    
                                        <div class="row">
                                            <div class="column">
                                                <div class="card">                                                			        				        	
                                                    <img src="<?php echo base_url(); ?>assets/img/pictures/team/KCL-041.jpg" alt="" class="img-team">                                                                                                
                                                    <span class="team-title">Moses Kyobe </span>                                               
                                                    <span class="job-title">MbchB , FACC</span>
                                                </div>
                                            </div>
                                            <div class="column">
                                                <div class="card">
                                                    <img src="<?php echo base_url(); ?>assets/img/pictures/team/KCL-050-1.jpg" alt="" class="img-team">
                                                    <span class="team-title">Ms. Racheal  Nannozi</span>
                                                    <span class="job-title">Administrative Assistant</span>

                                                </div>
                                            </div>
                                            <!-- <div class="column">
                                                <div class="card">
                                                    <img src="<?php //echo base_url(); ?>assets/img/pictures/team/KCL-048-1.jpg" alt="" class="img-team">
                                                    <span class="team-title">Ms. Grace Matovu</span>
                                                    <span class="job-title">Registered Nurse /Echotechnician</span>
                                                </div>
                                            </div> -->
                                            <div class="column">
                                                <div class="card">
                                                    <img src="<?php echo base_url(); ?>assets/img/pictures/team/KCL-046-1.jpg" alt="" class="img-team">
                                                    <span class="team-title">Ms. Barbara Namakula</span>                                               
                                                    <span class="job-title">Registered Nurse /Echotechnician</span>
                                                </div>
                                            </div>
                                            <div class="column">
                                                <div class="card">
                                                    <img src="<?php echo base_url(); ?>assets/img/pictures/team/KCL-043.jpg" alt="" class="img-team">
                                                    <span class="team-title">Ms. Jane-Liz Nambogo</span>    
                                                    <span class="job-title">Practice Manager, Registered Nurse/Echotechnician</span>                                           
                                                </div>
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