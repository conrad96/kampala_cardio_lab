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
    <div id="bg-disp" class="fancy-breadcumb-area bg-img" style="background-image: url(<?php echo base_url(); ?>assets/img/pictures/patient_2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2><?php echo (!empty($page_title)? $page_title : '') ?></h2>                                                
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
                        <?php $this->load->view("shared/social_media"); ?>

                        <!-- Single Post -->
                        <div class="col-10 col-sm-11">
                            <div class="single-post">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <?php 
                                    if(!empty($main_image)){
                                        foreach($main_image as $image){
                                            echo '<img src="'.base_url().'assets/img/pictures/'.$image['image'].'" alt="'.$image['caption'].'"/>';
                                        }
                                    }
                                    ?>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <?php 
                                    if(!empty($page_content)){
                                        //print pages content
                                        foreach($page_content as $content){
                                            //print '<p>'.$content.'</p>';
                                            foreach($content as $page){
                                                print '<p>'.$page.'</p>';
                                            }
                                        }
                                    }
                                    ?>
                                   
                                    <!-- carousel of patient pics --> 
                                    <script src="<?php echo base_url(); ?>assets/js/jquery/jquery-2.2.4.min.js"></script>
                                    <?php $this->load->view("shared/image_carousel", array('images'=> $resources)); ?>                                    
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
