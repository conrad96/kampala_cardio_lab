<!-- class="slider" -->
<div class="slideshow" id="img-slideshow">
    <?php 
    if(!empty($images)){
        print '<ul class="slider"> ';
        foreach($images as $image){ ?>   
        <li>
            <img src="<?php echo base_url(); ?>assets/img/pictures/slideshow/<?php echo (!empty($image['image'])? $image['image'] : ''); ?>" class="slideshow-img" alt="<?php echo !empty($image['caption'])? $image['caption'] : '';?>"> 
        </li>
        <?php }
        print '</ul>';
        //initialise bxslider script   
    }
    ?>        
</div>