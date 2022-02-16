<!doctype html>
<html <?php language_attributes();?> >

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
<link rel="stylesheet" href=" <?php echo get_template_directory_uri();?>/style.css " >

<?php wp_head();
 ?>

    <title>Hello, world!</title>
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
	  <header>
        <div class="top-line">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <span>
                           <img src=" <?php echo get_template_directory_uri();?>/image/mobile-icon.png" alt="" srcset="">
                            <a href="tel: 385-324-7936" class="text-white  "
                                style="text-decoration: none; padding:0px 9px"> 385-324-7936</a>
                        </span>

                        <span>
                            <img src="<?php echo get_template_directory_uri();?>/image/mail-icon.png" alt="" srcset="">
                            <a href="mailto:www.easymobilestorage.com" class="text-white  "
                                style="text-decoration: none; padding:0px 4px">www.easymobilestorage.com</a>
                        </span>


                    </div>
                    <div class="col-md-6" style="text-align: right;">
                        <div class="social-media ">
                            <a href="#">
                                <i class="fab fa-instagram "></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light pb-0">
            <div class="container-fluid ">
                <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri();?>/image/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav  "
                       >
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="https://www.test.easysofty.com/home/" style="color: black;" style="color: black;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.test.easysofty.com/quote/ " style="color: black;">Get a quote</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.test.easysofty.com/work/" style="color: black;">how it work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.test.easysofty.com/container/" style="color: black;">container</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.test.easysofty.com/about/" style="color: black;">about</a>
                        </li>
                        <li class="nav-item">
<!--                             <button type="button" class="btn btn-1 rounded-0 text-white">   <a href=" https://www.test.easysofty.com/quote/ " style="text-decoration: none; color: white;">GET A QUOTE</a></button> -->
							 <button type="button" class="btn btn-lg-primary"><a    href="https://www.test.easysofty.com/quote/"       style="text-decoration: none; color: white;">Get A Quote</a></button>
                        </li>
              
                </ul>
            </div>  </div>
        </nav>
    </header>
	
   
    <main class="main area">