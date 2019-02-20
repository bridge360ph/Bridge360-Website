<?php 
    if( session_start() ) {}
?>

<header class="site-header">

    <div class="top-header-bar">
        <div class="container">
            <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">

                <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                    <div class="header-bar-email">
                        <p>
                            EMAIL:
                            <a href="mailto:iambridge360@gmail.com?subject=Bridge360 Website&body=Enter e-mail body here">
                                <span class="badge bg-info text-light">
                                    <i class="fa fa-envelope"></i>
                                    iambridge360@gmail.com
                                </span>
                            </a>
                        </p>
                    </div><!-- .header-bar-email -->

                    <div class="header-bar-text">
                        <p>
                            PHONE:
                            <a href="tel: +025179314">
                                <span class="badge bg-info text-light">
                                    <i class="fa fa-phone"></i>
                                    +02 517 9314
                                </span>
                            </a>
                            <a href="tel: +639989925241">
                                <span class="badge bg-info text-light">
                                    <i class="fa fa-phone"></i>
                                    +63 998 9925241
                                </span>
                            </a>
                        </p>
                    </div><!-- .header-bar-text -->
                </div><!-- .col -->

                <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center"> 
                    <?php if( ! isset( $_SESSION["username"] ) ) { ?>                               
                        <button id="regBtn" class="btn btn-dark text-light mr-2" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">
                            Register
                        </button>
                    <?php } ?>

                    <?php if( ! isset( $_SESSION["username"] ) ) { ?>
                        <button id="inBtn" class="btn btn-dark text-light" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">
                            Log in
                        </button>
                    <?php } ?>

                    <?php if( isset( $_SESSION["username"] ) ) { ?>
                        <span class="badge bg-warning text-light mr-3">
                            <?php echo $_SESSION["username"]; ?>
                        </span>

                        <button id="logoutBtn" class="btn btn-dark text-light" onclick="logoutAccount();">
                            Log out
                        </button>
                    <?php } ?>
                </div><!-- .col -->
                
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .top-header-bar -->

    <div class="nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">

                    <nav class="site-navigation d-flex justify-content-end align-items-center">
                        <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-left" id="site-nav">
                            <a  href="./home.php" rel="home">
                                <img src="../../assets/images/bridge360logo.png" alt="logo" style="width:250px;height:150px;">
                            </a>
                            <li id="site-nav-home">
                                <a href="./home.php">Home</a>
                            </li>
                            <li id="site-nav-about">
                                <a href="./about.php">About Us</a>
                            </li>
                            <li id="site-nav-projects">
                                <a href="./projects.php">Projects</a>
                            </li>
                            <li id="site-nav-services">
                                <a href="./services.php">Services</a>
                            </li>
                            <li id="site-nav-blogs">
                                <a href="./blogs.php">Blogs</a>
                            </li>
                            <li id="site-nav-contact">
                                <a href="./contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </nav><!-- .site-navigation -->

                    <!-- <div>
                        <iframe src="https://duckduckgo.com/search.html?prefill=Search " style="overflow:hidden;margin:0;padding:0;width:408px;height:40px;margin-top: 10px;" frameborder="0"></iframe>
                    </div> -->

                    <div class="hamburger-menu d-lg-none" style="float: right;">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div><!-- .hamburger-menu -->
                    
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .nav-bar -->

</header><!-- .site-header -->