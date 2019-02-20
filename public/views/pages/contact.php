<?php
    // FUNCTIONS
    require "../../include/getRecentBlogs.php";
?>



<!DOCTYPE html>
<html lang="en">


<head>
    <title>Bridge360</title>    
    <?php require "../partials/head.php"; ?>
</head>


<body class="single-page contact-page">

    <div class="supreme-container">    

        <?php require "../partials/site-header.php"; ?>

    </div>

    <!-- MODAL -->
    <?php require "../partials/login-register-modal.php"; ?>

    <div class="supreme-container">

        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Contact</h1>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header -->

        <div class="contact-page-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="entry-content">
                            <h2 class="entry-title">Get In touch with us</h2>
                            <p>
                                Contact us to know more about our projects and services we offer.
                                <br/>We care for our customers and value your questions and respond to<br/>
                                them as quiickly as possible.                             
                            </p>
                            <h2 class="entry-title">Have questions?</h2>
                            <ul id="have-list" class="contact-info">
                                <li>Talk to us to find out more about our AI Colorizer and other <br/>Customized AI and 3D solutions. </li>
                                <li>Ask us about the courses and trainings we offer.</li>
                                <li>Become a pro in AI: From the courses we offer, we can help you <br/>understand how AI works and how to build it.</li>
                                <li>See our web apps and other software in action and see how it can help you.</li>
                                <li>Get updated with our latest social projects.</li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                    <div class="col-12 col-lg-4">
                        <div class="entry-content">
                            <ul class="contact-info p-0">
                                <li>
                                    <h2 class="entry-title">Direct Contact</h2>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i><a href="tel: +025179314"><span>+02 517 9314</span></a>&nbsp;&nbsp;&nbsp;<a href="tel: +639989925241"><span>+639 989 925241</span></a>
                                </li>
                                <li>
                                    <a href="mailto:iambridge360@gmail.com?subject=Bridge360 Website&amp;body=Enter e-mail body here"><i class="fa fa-envelope"></i><span>iambridge360@gmail.com</span></a>
                                </li>
                                <li>
                                    <h2 class="entry-title">Corporate Office</h2>
                                </li>
                                <li>
                                    <a href="#" onclick="showMap();">
                                        <i class="fa fa-map-marker"></i><span>Unit 25D Zeta Bldg., 191 Salcedo St.<br/> Legazpi Village, Makati City 1229</span>
                                    </a>
                                </li>
                                <li>
                                    <h2 class="entry-title">Check Us on</h2>
                                </li>
                                <li>
                                    <a href="https://web.facebook.com/Bridge360PH/" target="_blank"><i class="fa fa-facebook"></i><span>facebook</span></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/bridge360PH" target="_blank"><i class="fa fa-twitter"></i><span>twitter</span>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/14495318/admin/" target="_blank"><i class="fa fa-linkedin"></i><span>LinkedIn</span></a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="entry-content">
                            <h2 class="entry-title">Message Us</h2>
                            <form id="msg-form" class="contact-form" name="frmContact">
                                <textarea rows="15" cols="6" placeholder="Your Message" name="message"></textarea>
                                <button type="submit" class="btn btn-primary" onclick="contactUsEmail();">Contact Us</button>
                                <a href="" id="contact-link"></a>
                            </form><!-- .contact-form -->
                        </div>
                    </div><!-- .col -->
                </div>
            </div><!-- .container -->
        </div>

    </div>

    <?php require "../partials/site-footer.php"; ?>

</body>
</html>