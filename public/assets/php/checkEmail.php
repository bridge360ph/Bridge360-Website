<?php
    include "../../include/mysql_connect.php";

    $email = $_POST['email'];
    $checkEmail = "SELECT Email FROM tbl_account WHERE Email = '$email'";
    $resEmail = mysqli_query($conn, $checkEmail);
    $emailCount = mysqli_num_rows($resEmail);
    $response;

    if($emailCount == 0){
        $response = "true";
    } else {
        $response = "false";
    }

    echo json_encode($response);
?>