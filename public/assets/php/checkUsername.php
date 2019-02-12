<?php
    include "../../include/mysql_connect.php";
    
    if( isset( $_POST["username"] ) ) {
        $username = $_POST['username'];
        $checkUsername = "SELECT username FROM tbl_account WHERE username = '$username'";
        $checkUserRes = mysqli_query($conn, $checkUsername);
        $usernameCount = mysqli_num_rows($checkUserRes);
        $response = false;
    
        if($usernameCount == 0){
            $response = true;
        } else {
            $response = false;
        }
        
        echo json_encode($response);
    } else {
        echo false;
    }

?>