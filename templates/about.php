<?php
/* *
 *  Template Name: About*/ ?> 
<?php get_header();?>

<!-- 
    <section class="about-1  section-gap">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="text-15 text-white pt-5 px-5" >
                        <?php echo get_field('sub-heading'); ?>  
                    </h2>
                    <h1 class="text-16 text-white pt-3 "><?php echo get_field('heading'); ?></h1>
                </div>

                <div class="col-md-3">
                    <div class="image">
                       
                    </div>
                </div>
            </div>
        </div>


    </section> -->


    <section class="top-content section-gap">
        <h1 class="top-heading text-white  text-center " >
            <span> <?php echo get_field('sub-heading'); ?>  </span><br><?php echo get_field('heading'); ?>

        </h1>
    </section>


    <section class="about-2 section-gap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about">
                        <h2 class="text-17">
                            <?php echo get_field('heading-for-covid'); ?>
                        </h2>
                        <p class="text-18 pt-3"> <?php echo get_field('line-covid'); ?></p>
                    </div>
                    <div class="btn-group text-center  pt-4" role="group" aria-label="Basic example">

                        <button type="button" class="btn btn-dark rounded-0"
                            ><a
                                href="https://www.worldometers.info/coronavirus/"
                                style="text-decoration: none; color: white;">COVID-19 UPDATE</a></button>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="content-10 section-gap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <div class="locations"> -->
                    <h2 class="text-18 text-center pt-5 fs-1" style="font-weight: 680;"><?php echo get_field('location'); ?></h2>
                    <p class="text-19 text-center" > <?php echo get_field('loc-text'); ?></p>

<div class="grid ">
    <div class="container">

   
    <div class="row media1" >
        <div class="col-md-3">
<ul style="font-size: 1.6rem;"><li>Tarrant</li></ul>
        </div>
        <div class="col-md-3">
            <ul style="font-size: 1.6rem;"><li>Denton</li></ul>
        </div>
        <div class="col-md-3">
            <ul style="font-size: 1.6rem;"><li>Johnson</li></ul>
        </div>
        <div class="col-md-3">
            <ul style="font-size: 1.6rem;"><li>Collin</li></ul>
        </div>
    </div>

    <div class="row media2" >
        <div class="col-md-3">
            <ul style="font-size: 1.6rem;"><li>Dallas</li></ul>
        </div>
        <div class="col-md-3">
            <ul style="font-size: 1.6rem;"><li>Parker</li></ul>
        </div>
        <div class="col-md-3">
            <ul style="font-size: 1.6rem;"><li>Ellis</li></ul>
        </div>
    </div>
</div>
</div>

<p class="text-19 text-center" style="  font-size: 1.3rem; font-weight: 4000;"> <?php echo get_field('sub-text'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-11 section-gap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-18 text-center pt-5  text-white TE" >
                       <?php echo get_field('service'); ?></h2>
                    <p class="text-19 text-center text-white" >  <?php echo get_field('service-text'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="IMG">
        <div class="image-4">
            <img src="<?php echo get_template_directory_uri();?>/image/IMG.jpg" alt="" srcset="">
        </div>
    </section>

    <section class="content-9 text-center pt-5" style="justify-content: center; align-items: center;">
        <div class="btn-group px-3" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-dark text-center" style="    padding: 10px 9px;  font-size: 24px;">
                <a href="https://www.test.easysofty.com/quote/" style="text-decoration: none; color: white;">GET A QUOTE</a>
               
            </button>
        </div>
		
<!-- 			<div class="get-btn pt-4">
							 <button type="button" class="btn btn-lg-primary"><a    href="https://www.test.easysofty.com/quote/" style="text-decoration: none; color: white;">Get A Quote</a></button>
                    </div> -->
    </section>


    <section class="last-part section-gap">
        <div class="testimonial">
            <div class="flex">
                <div class="item pt-4">
                    <p class="text-19  text-white text-center pt-5" ><?php echo get_field('testi1'); ?>
                    </p>
                    <p class="author  text-white text-center pt-3" ><?php echo get_field('author1'); ?></p>
                </div>
            </div>
        </div>
    </section>


<?php get_footer();?>




  