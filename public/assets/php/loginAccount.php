<?php
    // Init response obj
    $response = array(
        "error" => false,
        "data" => array(
            "message" => ""
        )
    );

    if( 
        isset( $_POST["email"] ) &&
        isset( $_POST["password"] )
    ) {
        $email = trim( $_POST["email"] );
        $password = trim( $_POST["password"] );
        
        // Connect to db
        include "../../include/mysql_connect.php";

        $sql = "SELECT * FROM tbl_account WHERE email='$email'";
        if( $result = mysqli_query( $conn, $sql ) ) {
            if( $row = mysqli_fetch_assoc( $result ) ) {
                if( ! password_verify( $password, $row["password"] ) ) {
                    $response["error"] = true;
                    $response["data"]["message"] = "Password is incorrect. ";
                } else {
                    $username = $row["username"];
                    $fullName = $row["fullName"];
                    $phoneNumber = $row["phoneNumber"];

                    $response["data"]["message"] = "Account is successfully logged in. ";             
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['fullName'] = $fullName;
                    $_SESSION['phoneNumber'] = $phoneNumber;
                    $_SESSION['email'] = $email;
                }
            } else {
                $response["error"] = true;
                $response["data"]["message"] = "Account does not exist. ";
            }

        } else {
            $response["error"] = true;
            $response["data"]["message"] = "Error: " . mysqli_error( $conn ) . ".";
        }

        // Close db
        mysqli_close( $conn );
    } else {
        $response["error"] = true;
        $response["data"]["message"] = "All fields are required. ";
    }

    echo json_encode( $response );
?>