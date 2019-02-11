<?php

    function getRecentBlogs() {
        require "../../include/mysql_connect.php";

        $sql = "SELECT * FROM tbl_blog WHERE isApproved=true AND isDeleted=false ORDER BY timestamp DESC LIMIT 3";
        $strResult = "";
        if ( $result = mysqli_query( $conn, $sql ) ) {

            // $strResult .= "<ul>";
            while( $row = mysqli_fetch_assoc( $result ) ) {
                $strResult .=
                    "<li>" .
                        "<h3><a href='#'>{$row['title']}</a></h3>" .
                        "<div class='posted-date'>{$row['timestamp']}</div>" .
                    "</li>";
            }
            // $strResult .= "</ul>";
            
            mysqli_free_result( $result );
        }
        mysqli_close( $conn );
        
        echo $strResult;
    }

?>