<?php
    // FUNCTIONS
    require "../../include/getRecentBlogs.php";
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>Bridge360</title>
    <?php include("../partials/head.php"); ?>
</head>


<body class="single-page home-page">

    <?php include("../partials/site-header.php"); ?>

    <!-- MODAL -->
    <?php include("../partials/login-register-modal.php"); ?>


    <!-- SWIPER -->
    <div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            
            <div class="swiper-slide hero-content-wrap">
                <img src="../../assets/images/swiper-img-1.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-50">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">                                    
                                    <h4 class="text-warning">Ideate. Innovate. Initiate.</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>Bridge360 is a Philippine based startup company that would bridge the gap between different social sectors, public sectors, and private sectors through <b class="text-info">hardware</b> and <b class="text-info">software innovations</b> here in the Philippines and the emerging markets among the ASEAN countries. </p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a class="btn btn-dark mr-2" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a>
                                    <a class="btn btn-dark mr-2" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->

            <div class="swiper-slide hero-content-wrap">
                <img src="../../assets/images/swiper-img-2.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-50">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">                                    
                                    <h4 class="text-warning">AI, Software, and 3D Solutions</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>The company is engaged in ideating, designing, developing, implementing, innovating, integrating, creating, supporting, and maintaining software applications, 3D, Drones, and Artificial Intelligence. </p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a class="btn btn-dark mr-2" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a>
                                    <a class="btn btn-dark mr-2" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->

            <div class="swiper-slide hero-content-wrap">
                <img src="../../assets/images/swiper-img-3.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-50">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1>Donate</h1>
                                    <h4 class="text-warning">Projects for Humanity not YouMoney-ty</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>Bridge360 can provide white-labeled system development, integration and implementation at a <b class="text-info">cheap</b> and <b class="text-info">affordable</b> price for SMEs and startups especially social enterprises. </p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a class="btn btn-dark mr-2" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a>
                                    <a class="btn btn-dark mr-2" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
        </div><!-- .swiper-wrapper -->

        <div class="pagination-wrap position-absolute w-100">
            <div class="container">
                <div class="swiper-pagination"></div>
            </div><!-- .container -->
        </div><!-- .pagination-wrap -->

        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white flex justify-content-center align-items-center"></div>
        <div class="swiper-button-prev swiper-button-white flex justify-content-center align-items-center"></div>
    </div><!-- .hero-slider -->


    <!-- SERVICES -->
    <div class="our-services">
        <div class="container mb-5">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2 class="entry-title">Our Core Services</h2>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
            </div><!-- .row -->

            <div class="row">
                <div class="col-12">
                    <div class="swiper-container causes-slider">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="services-wrap">

                                    <figure class="m-0">
                                        <img src="../../assets/images/cause-1.jpg" alt="">

                                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <a href="#" class="btn gradient-bg mr-2">More Details</a>
                                        </div><!-- .figure-overlay -->
                                    </figure>

                                    <div class="services-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0 mt-2"><a href="#" class="text-info">System Design and Development</a></h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0">Back-End and Front-End Systems</p>
                                        </div><!-- .entry-content -->
                                    </div><!-- .services-content-wrap -->

                                </div><!-- .services-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="services-wrap">
                                    <figure class="m-0">
                                        <img src="../../assets/images/cause-2.jpg" alt="">

                                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <a href="#" class="btn gradient-bg mr-2">More Details</a>
                                        </div><!-- .figure-overlay -->
                                    </figure>

                                    <div class="services-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0 mt-2"><a href="#" class="text-info">Online Services and Systems</a></h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0">Desktop, Mobile and Progressive Web Applications</p>
                                        </div><!-- .entry-content -->
                                        
                                    </div><!-- .services-content-wrap -->
                                </div><!-- .services-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="services-wrap">
                                    <figure class="m-0">
                                        <img src="../../assets/images/cause-3.jpg" alt="">

                                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <a href="#" class="btn gradient-bg mr-2">More Details</a>
                                        </div><!-- .figure-overlay -->
                                    </figure>

                                    <div class="services-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0 mt-2"><a href="#" class="text-info">Bridge360 Academy Courses and Trainings</a></h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0">Short Courses and Trainings for Digital Paradigm Shift</p>
                                        </div><!-- .entry-content -->
                                        
                                    </div><!-- .services-content-wrap -->
                                </div><!-- .services-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="services-wrap">
                                    <figure class="m-0">
                                        <img src="../../assets/images/cause-1.jpg" alt="">

                                        <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                            <a href="#" class="btn gradient-bg mr-2">More Details</a>
                                        </div><!-- .figure-overlay -->
                                    </figure>

                                    <div class="services-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0 mt-2"><a href="#" class="text-info">AI and 3D Solutions Development</a></h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0">Customized AI and 3D Design & Printing</p>
                                        </div><!-- .entry-content -->
                                        
                                    </div><!-- .services-content-wrap -->
                                </div><!-- .services-wrap -->
                            </div><!-- .swiper-slide -->
                            
                        </div><!-- .swiper-wrapper -->

                    </div><!-- .swiper-container -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white flex justify-content-center align-items-center"></div>

                    <div class="swiper-button-prev swiper-button-white flex justify-content-center align-items-center"></div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->


    <!-- WELCOME -->
    <div class="home-page-welcome">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title">Welcome to Bridge360</h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content mt-5">
                            <p>
                                Bridge360 aims to:
                                <ol class="list-styled">
                                    <li>
                                        Bridge the gap between traditional culture and the culture brought about by Artificial Intelligence (AI)
                                        <ul>
                                            <li>Publish materials such as videos, animations, infographics, books, articles, blogs, vlogs, and the like</li>
                                            <li>Establish an epistemic community that would produce critical thinkers, systems thinkers, design thinkers, experts in AI, and Executives of AI</li>
                                        </ul>
                                    </li>
                                    <li>Create an environment where prediction and trends are the norm</li>
                                    <li>Continuous IT development - <strong class="text-info">Hardware</strong>, <strong class="text-info">Software</strong>, and <strong class="text-info">Peopleware</strong></li>
                                </ol>   
                            </p>
                        </div><!-- .entry-content -->

                        <div class="entry-footer mt-5">
                            <a href="./about.php" class="btn gradient-bg mr-2">Read More</a>
                        </div><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                    <img class="thumbnail" src="../../assets/images/welcome.jpg" alt="welcome">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->    


    <!-- COMPANY BLOGS -->
    <div class="home-page-blogs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    </div>
                    <!-- start feedwind code -->
                    <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="101743/"></script>
                    <!-- end feedwind code -->
                </div>
            </div>
    </div>


    <?php include("../partials/site-footer.php"); ?>

</body>
</html>