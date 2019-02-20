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


<body class="single-page blogs-page">

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
                        <h1>Blogs</h1>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header -->

        <div class="container">
            <div class="row">

                <div class="col-12">                    
                    <!-- start feedwind code -->
                    <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="102248/"></script>
                    <!-- end feedwind code -->
                </div>

            </div>
        </div>

    </div>

    <?php require "../partials/site-footer.php"; ?>

</body>
</html>