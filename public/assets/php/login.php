<?php
    include "../../include/mysql_connect.php";
 
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkEmail = "SELECT Email FROM tbl_account WHERE Email = '$email'";
    $resEmail = mysqli_query($conn, $checkEmail);
    $emailCount = mysqli_num_rows($resEmail);

    if($emailCount = 0){
        echo "Invalid Acccount!";
    } else {
        $sql = "SELECT Username, Password FROM tbl_account WHERE Email = '$email'";
        $result = mysqli_query($conn, $sql);
        
            while($row=mysqli_fetch_assoc($result)){
                $hashedPass = $row['Password'];
                $username = $row['Username'];
            }
            if(password_verify($password, $hashedPass)){
                $res = "true";
                session_start();
                $_SESSION['user'] = $username;
            } else {
                $res = "false";
            }
        echo json_encode($res);
    }  
?>