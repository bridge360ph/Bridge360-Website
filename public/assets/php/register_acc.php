<?php
    include "../../include/mysql_connect.php";

    $firstName = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['number']);
    $userName = mysqli_real_escape_string($conn,  $_POST['username']);
    $passwordCheck = mysqli_real_escape_string($conn, $_POST['password_2']);

    $hashedPassword = password_hash($passwordCheck, PASSWORD_DEFAULT);
    $name = $firstName." ".$lastName;

    $sql = "INSERT INTO tbl_account (Name, phoneNumber, Username, Password, Email)
            VALUES ('$name', '$phoneNumber', '$userName', '$hashedPassword', '$email')";
    $result = mysqli_query($conn, $sql);
?>