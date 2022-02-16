<?php
/* *
 *  Template Name:  Work*/ ?> 
<?php get_header();?>




    <section class="gif pt-3 section-gap">
        <h3 class="box-partial center"></h3>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="Gif text-center">
                        <img src="<?php echo get_template_directory_uri();?>/image/i4.jpeg" alt="" srcset="" >
                        <a href="#" style="text-decoration: none;">
                            <h3><?php echo get_field('sub-head-for-work-1'); ?></h3>
                            <p >  <?php echo get_field('bu-1'); ?>   </p>
                        </a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="Gif text-center">
                        <img src="<?php echo get_template_directory_uri();?>/image/i5.jpeg" alt="" srcset="">
                        <a href="#" style="text-decoration: none;">
                            <h3><?php echo get_field('sub-head-for-work-2'); ?></h3>
                            <p >  <?php echo get_field('bu-2'); ?>   </p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="Gif text-center">
                        <img src="<?php echo get_template_directory_uri();?>/image/i6.jpeg" alt="" srcset="">
                        <a href="#" style="text-decoration: none;">
                            <h3><?php echo get_field('sub-head-for-work-3'); ?></h3>
                            <p>  <?php echo get_field('bu-3'); ?>   </p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <section class="renting section-gap ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-6 text-center text-black pt-5">
                        <h2><?php echo get_field('heading-for-renting'); ?></h2>
                    </div>
                    <div class="content-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="content-5 pt-5 font-lg-20">
                                        <p>    <?php echo get_field('head-rent'); ?></p>
                                    </div>
                                    <div class="text-7 pt-5">
                                        <ul>
                                             <li> <?php echo get_field('rent1'); ?></li>
											 <li> <?php echo get_field('rent2'); ?></li>
											 <li> <?php echo get_field('rent3'); ?></li> 
											<li> <?php echo get_field('rent4'); ?></li>
											 <li> <?php echo get_field('rent5'); ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 RENTZ">
                                    <img src="<?php echo get_template_directory_uri();?>/image/rentz.png" alt="" srcset=""  class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


  


 



    <section class="faq section-gap">
        <div class="text-6 text-center text-black pt-5">
            <h2><?php echo get_field('heading-for-faq'); ?></h2>
        </div>
        <div class="container">
            <div class="row flex-center pt-5">
                <div class="col-md-10">

              
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                           <h4> How much can I fit in the container 8’x16’?</h4>
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body" > <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.</h5></div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                           <h4> Lorem Ipsum dolor sit amet?</h4>
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.</h5></div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <h4> Lorem Ipsum dolor sit amet?</h4> 
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body"> <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                              commodo ligula eget dolor.</h5></div>
                        </div>
                      </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                           <h4> Lorem Ipsum dolor sit amet?</h4>
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                            commodo ligula eget dolor.</h5></div>
                      </div>
                    </div>
                </div>
                  </div>
            </div>
        </div>
    </section>

    <section class=" content-9 text-center pt-5" style="justify-content: center; align-items: center;">
        <div class="btn-group px-3" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-dark text-center" >
                <a href=" https://www.test.easysofty.com/quote/" style="text-decoration: none; color: white;">GET A QUOTE</a>
            
            </button>
        </div>
		
<!-- 			<div class="get-btn pt-4">
							 <button type="button" class="btn btn-lg-primary get"><a    href="https://www.test.easysofty.com/quote/" style="text-decoration: none; color: white;">Get A Quote</a></button>
                    </div> -->
    </section>

    <section class="last-part-1 section-gap">
        <div class="testimonial">
            <div class="flex">
                <div class="item pt-4">
                    <p class="text-19  text-white text-center pt-5" >  <?php echo get_field('testimonial'); ?>
                    </p>
                    <p class="author  text-white text-center pt-3" ><?php echo get_field('author-name'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>
    