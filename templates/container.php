<?php
/* *
 *  Template Name:  Container*/ ?> 
<?php get_header();?>
   

    <section class="top-content section-gap">
        <h1 class="top-heading text-white  text-center " >
            <span> <?php echo get_field('sub-heading'); ?>  </span><br><?php echo get_field('heading'); ?>

        </h1>
    </section>


    <section class="gif pt-3 section-gap">
        <h2 class="center text-center pt-5" ><?php echo get_field('head-contain'); ?>
        </h2>
        <!-- <h3 class="box-partial center"></h3> -->
        <h3 class="box-partial center text-center"> <?php echo get_field('sub1'); ?>  </h3>
        <!-- <h2 class="text-20 text-center">Rent an 8’ x 16’ CAPSULE container for:</h2> -->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="Gif text-center">
                        <img src="<?php echo get_template_directory_uri();?>/image/i1.jpeg" alt="" srcset="" >
                        <a href="#" style="text-decoration: none;">
                            <h3><?php echo get_field('sub-head-for-work-1'); ?></h3>
                            <p style="font-size: 1.25rem;"> <?php echo get_field('rent1'); ?></p>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="Gif text-center">
                        <img src="<?php echo get_template_directory_uri();?>/image/i2.jpeg" alt="" srcset="" >
                        <a href="#" style="text-decoration: none;">
                            <h3>  <?php echo get_field('sub-head-for-work-2'); ?></h3>
                            <p style="font-size: 1.25rem;"> <?php echo get_field('rent2'); ?></p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="Gif text-center">
                        <img src="<?php echo get_template_directory_uri();?>/image/i3.jpeg" alt="" srcset="" >
                        <a href="#" style="text-decoration: none;">
                            <h3><?php echo get_field('sub-head-for-work-3'); ?></h3>
                            <p style="font-size: 1.25rem;"> <?php echo get_field('rent3'); ?></p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
 

    <section class=" content text-center section-gap" style="justify-content: center; align-items: center;">
        <div class="btn-group px-3" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-dark text-center" >
                <a href=" https://www.test.easysofty.com/quote/" style="text-decoration: none; color: white;">GET A QUOTE</a>
              
            </button>
        </div>
		
<!-- 			<div class="get-btn pt-4">
							 <button type="button" class="btn btn-lg-primary"><a    href="https://www.test.easysofty.com/quote/" style="text-decoration: none; color: white;">Get A Quote</a></button>
                    </div> -->
    </section>

   
     <section class="easy-mobile section-gap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="section-title text-center text-black bold-font pt-5">
                        <h2><?php echo get_field('head-mobile'); ?></h2>
                        <p class="text-3 pt-3">
                            <?php echo get_field('sub-mobile'); ?>
                        </p>
                    </div>
                     <div class="text-4 pt-3">
                      <ul class="mid-text">
                             <li> <?php echo get_field('bu-1'); ?></li>
							     <li> <?php echo get_field('bu-2'); ?></li>
							     <li> <?php echo get_field('bu-3'); ?></li>
							     <li> <?php echo get_field('bu-4'); ?></li>
							     <li> <?php echo get_field('bu-5'); ?></li>
							
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
 


  
    

    <section class="last-part-1 section-gap">
        <div class="testimonial">
            <div class="flex">
                <div class="item pt-4">
                    <p class="text-19  text-white text-center pt-5" ><?php echo get_field('testimonial'); ?>
                    </p>
                    <p class="author  text-white text-center pt-3" ><?php echo get_field('author-name'); ?>
                       </p>
                </div>
            </div>
        </div>
    </section>

   <?php get_footer();?>