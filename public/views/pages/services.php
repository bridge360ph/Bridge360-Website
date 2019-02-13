<?php
    // FUNCTIONS
    require '../../include/getRecentBlogs.php';
?>



<!DOCTYPE html>
<html lang="en">


<head>
    <title>Bridge360</title>
    <?php require "../partials/head.php" ; ?>
</head>


<body class="single-page services-page" data-spy="scroll" data-target="#scroll-list-services" data-offset="30">
    
    <div class="supreme-container">

        <!-- SCROLLSPY -->
        <?php include("../partials/scrollspy-services.php"); ?>        

        <?php include("../partials/site-header.php"); ?>

    </div>

    <!-- MODAL -->
    <?php require "../partials/login-register-modal.php"; ?>

    <div class="supreme-container">

        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Services</h1>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header -->

        <div class="portfolio-wrap service-1" id="services-system">
            <div class="container">
                <div class="row">    
                    <div class="col-12 col-lg-6">
                        <header class="entry-header">
                            <h2 class="entry-title">System Design and Development</h2>
                        </header><!-- .entry-header -->
                        <div class="entry-content mt-5">
                            <p>
                            Bridge360 developers can plan, design, build, test, and deliver information systems that are customized to the clients’ needs.
                            </p>
                        </div><!-- .entry-content -->
                    </div><!-- .col -->
                    <div class="col-12 col-lg-6">
                        <img id="pic1" src="../../assets/images/services/1.png">
                    </div>
                </div><!-- .row -->
                <div class="row">
                    <div class="col-12 col-lg-6 service-vid">
                        <img class="thumbnail" src="../../assets/images/services/2.jpg">
                    </div>
                    <div class="col-12 col-lg-6 service-info">
                        <p>
                            Back-End and Front-End Systems                
                        </p>
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
        </div>
        
        <div class="portfolio-wrap service-2" id="services-webapp">
            <div class="container">
                <div class="row">  
                    <div class="col-12 col-lg-6">
                        <img src="../../assets/images/services/3.png">
                    </div>  
                    <div class="col-12 col-lg-6">
                        <header class="entry-header">
                            <h2 class="entry-title">Online Services and Systems</h2>
                        </header><!-- .entry-header -->
                        <div class="entry-content mt-5">
                            <p>
                            Websites, web application, and mobile application development can be done affordably with
                            he highest quality, especially for non-government organizations (NGOs), startups, and SMEs.
                            </p>
                        </div><!-- .entry-content -->
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row">
                    <div class="col-12 col-lg-6 service-info">
                        <p>
                            Desktop, Mobile and Progressive Web App                
                        </p>
                    </div>
                    <div class="col-12 col-lg-6 service-vid">
                        <video class="thumbnail" controls>
                            <source src="../../assets/images/services/4.mp4" type="video/mp4">
                        </video>  
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
        </div>

        <div class="portfolio-wrap service-3" id="services-trainings">
            <div class="container">
                <div class="row">    
                    <div class="col-12 col-lg-6">
                        <header class="entry-header">
                            <h2 class="entry-title">Bridge360 Academy Courses and Trainings</h2>
                        </header><!-- .entry-header -->
                        <div class="entry-content mt-5">
                            <p>
                            Bridge360 core team could give lectures to students, professionals and businesses to help
                            them understand the basics of Artificial Intelligence, 3D Design, and Solutions development
                            and aid them in the Digital Transformation.
                            </p>
                            <p>
                            SHORT COURSES Available:
                            </p>
                            <ul>
                                <li>	Requisites to Understanding AI Culture</li>
                                <ul>
                                    <li>	Redefining the Concept of Mind</li>
                                    <li>	Redefining the Concept of Space</li>
                                    <li>	Redefining the Concept of Life</li>
                                    <li>	Redefining the Concepts of Knowledge and Civilization</li>
                                </ul>
                                <li>	Bite-sized Python</li>
                                <li>	Bringing data to life: A Data Visualization Workshop</li>
                                <li>	Learning Machine Learning using Python</li>
                                <li>	Diving Deep into Deep Learning with Python</li>
                                <li>	Basics of 3D Designing</li>
                                <li>	Systems Thinking</li>
                                <li>	Design Thinking</li>
                            </ul>
                        </div><!-- .entry-content -->
                    </div><!-- .col -->
                    <div class="col-12 col-lg-6">
                        <img src="../../assets/images/services/5.png" alt="welcome">
                    </div>
                </div><!-- .row -->
                <div class="row">
                    <div class="col-12 col-lg-6 service-pic">
                        <img id="pic3" class="thumbnail" src="../../assets/images/services/6.jpg">
                    </div>
                    <div class="col-12 col-lg-6 service-info">
                        <p>
                            Short Courses and Trainings for Digital Paradigm Shift                
                        </p>
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
        </div>
        
        <div class="portfolio-wrap service-4" id="services-ai-and-3d">
            <div class="container">
                <div class="row">  
                    <div class="col-12 col-lg-6">
                        <img src="../../assets/images/services/7.png">
                    </div>  
                    <div class="col-12 col-lg-6 ai-service">
                        <header class="entry-header">
                            <h2 class="entry-title">AI and 3D Solutions Development</h2>
                        </header><!-- .entry-header -->
                        <div class="entry-content mt-5">
                            <p>
                            Our team developed an AI that could colorize black and white-colored images. It started as a low-resolution colorizer. 
                            Now, it can colorize higher resolution images within seconds. We could also develop other AI based on your needs. 
                            Contact us for more details. 
                            </p>
                            <a href="#">
                                <button class="btn btn-danger">Try our AI Tools</button>
                            </a>
                        </div><!-- .entry-content -->
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row">
                    <div class="col-12 col-lg-6 service-info">
                        <p>
                            Customized AI and 3D Design & Printing                
                        </p>
                    </div>
                    <div class="col-12 col-lg-6 service-vid">
                        <video class="thumbnail" controls>
                            <source src="../../assets/images/services/8.mp4" type="video/mp4">
                        </video>  
                    </div>
                </div><!-- .row -->
            </div><!-- .container -->
        </div>

    </div>

    <?php require "../partials/site-footer.php"; ?>

</body>
</html>