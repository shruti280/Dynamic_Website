<?php
/* *
 *  Template Name:  Quote*/ ?> 
<?php get_header();?>



    <section class="top-content section-gap">
        <h1 class="top-heading text-white pt-4 text-center ">
            <span> <?php echo get_field('sub-heading'); ?>  </span><br> <?php echo get_field('heading'); ?>

        </h1>
    </section>

    <section class="mid-content section-gap">
        <h2 class="text-10 text-center pt-5 fs-1 " style="text-transform: uppercase; font-weight: 700;"><?php echo get_field('sub-head-for-work-1'); ?></h2>
		<?php the_content();
		
		?>
		
        <p class="text-11 text-center fs-5"><?php echo get_field('sub1'); ?></p>
        <div class="container pt-5">
            <div class="row">
				 <div class="col-md-12">
 <h2 class="text-10 text-center" style="font-weight: 660; color: gray;">I NEED TO DELIVER THE INFORMATION</h2>
 <!-- <h2 class="text-10 text-center" style="font-weight: 660; color: gray;"></h2> -->

                </div>
				
			
				
                <div class="col-md-6 pt-5 ">
						

                    <div class="form pt-3 text-center">
                     
                        <select name="work" class="work rounded 5">
                            <option value="volvo">*Choose Location</option>
                            <option value="saab">on site Storage</option>
                            <option value="opel">Easy Mobile Storage</option>
                        </select>
                        <br> <br>
                        <textarea id="Add a comment" name="Add a comment" placeholder=" Add Comment"
                            class="work-1 rounded 5"></textarea>
						
						
                    </div>
                </div>
				
                <div class="col-md-6 pt-5">
						<?php echo do_shortcode( '[contact-form-7 id="312" title="contact"]' ); ?>
				

                   

            </div>
			
        </div>
		</div>

    </section>



    <section class="mid-content-2 mt-5">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-12 text-center pt-5 fs-1 " style="font-weight: 660;">
               <?php echo get_field('head-mobile'); ?>
            </h2>
        </div>
    </div>
    
<div class="content-7 section-gap">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <div class="bullets">
                <ul type="square" >
                    <li>  <?php echo get_field('bulleted-faq'); ?></li>
							  <li>  <?php echo get_field('bulleted-faq'); ?></li>
							  <li>  <?php echo get_field('bulleted-faq'); ?></li>
							
                </ul>
            </div>
        </div>
        <div class="col-md-6  px-4">
            <div class="video">
            <div class="video-container">
              <iframe id="player"src="https://www.youtube.com/embed/-Lwpuxd2kLw?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>

              <button id="play" class="play-btn">
                <!-- <img src="https://www.dfwcapsule.com/wp-content/themes/capsule/dist/images/play-button.png"> -->
              </button>
            </div> 
          </div>
        </div>
    </div>
    </div>
</div>
    
</div>
    </section>

    <section class="content-8 section-gap">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-5">
                    <h1 class="text-13 text-center text-white" ><?php echo get_field('loc-text'); ?></h1>
                    <p class="text-14 text-center text-white">Read our <a href="https://www.test.easysofty.com/work/" class="faq">FREQUENTLY ASKED QUESTIONS</a> or <a href ="tel:+385-324-7936"  class="faq">GIVE US A CALL!</a></p>
                </div>
            </div>
        </div>
    </section>

  



   


    <?php get_footer();?>
   