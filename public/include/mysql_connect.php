<?php
    require "../../config/database.php";

    $conn = mysqli_connect( $mysqlHost, $mysqlUser, $mysqlPassword, $mysqlDb ) or die( `Failed to connect to the database. Try again later. ` );

    if ( mysqli_connect_errno() ) {
        printf( `Connect failed: %s\n`, mysqli_connect_error() );
        exit();
    }
?>