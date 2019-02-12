<?php
    // Init response obj
    $response = array(
        "error" => false,
        "data" => array(
            "message" => ""
        )
    );
    
    if( 
        isset( $_POST["firstName"] ) &&
        isset( $_POST["lastName"] ) &&
        isset( $_POST["email"] ) &&
        isset( $_POST["phoneNumber"] ) &&
        isset( $_POST["username"] ) &&
        isset( $_POST["password"] )
    ) {
        $fullName = trim( $_POST["firstName"] ) . " " . trim( $_POST["lastName"] );
        $email = trim( $_POST["email"] );
        $phoneNumber = trim( $_POST["phoneNumber"] );
        $username = trim( $_POST["username"] );
        $password = trim( $_POST["password"] );

        // VALIDATIONS
        include "../../include/validate.php";

        $isValidFullName = isAlpha( $fullName );
        $isValidEmail = isEmail( $email );
        $isValidPhoneNumber = isNumeric( $phoneNumber );
        $isValidUsername = isAlphaNumeric( $username );
        $isValidPassword = isAlphaNumeric( $password );

        if(
            ! $isValidFullName ||
            ! $isValidEmail ||
            ! $isValidPhoneNumber ||
            ! $isValidUsername ||
            ! $isValidPassword
        ) {
            $response["error"] = true;
            $response["data"]["message"] = array();

            if( ! $isValidFullName )
                array_push( $response["data"]["message"], "Name must contain letters only. " );
            if( ! $isValidEmail )
                array_push( $response["data"]["message"], "Email must be a valid email. " );
            if( ! $isValidPhoneNumber )
                array_push( $response["data"]["message"], "Phone Number must contain numbers only. " );
            if( ! $isValidUsername )
                array_push( $response["data"]["message"], "Username must contain letters and numbers only (No whitespaces). " );
            if( ! $isValidPassword )
                array_push( $response["data"]["message"], "Password must contain letters and numbers only (No whitespaces). " );
        } else {            
            // Connect to db
            include "../../include/mysql_connect.php";
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO tbl_account ( fullName, phoneNumber, username, password, email )
                    VALUES ('$fullName', '$phoneNumber', '$username', '$hashedPassword', '$email')";
            if( mysqli_query( $conn, $sql ) ) {
                $response["data"]["message"] = "Account is successfully registered. "; 
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['fullName'] = $fullName;
                $_SESSION['phoneNumber'] = $phoneNumber;
                $_SESSION['email'] = $email;
            } else {
                $response["error"] = true;
                $response["data"]["message"] = "Error: " . mysqli_error( $conn ) . ".";
            }
    
            // Close db
            mysqli_close( $conn );
        }        
    } else {
        $response["error"] = true;
        $response["data"]["message"] = "All fields are required. ";
    }

    echo json_encode( $response );
?>