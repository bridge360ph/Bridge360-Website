<?php
$username="";
$email="";
$errors=array();

$db=mysqli_connect('localhost','root','','bridge_webapp');


if(isset($_POST['register'])){
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirm=$_POST['confirm'];
    $email=$_POST['email'];

    if(empty($name))
    {
    array_push($errors,"Name is Required");

    }
    if(empty($username))
    {
    array_push($errors,"Username is Required");

    }
    if(empty($password))
    {
    array_push($errors,"Password is Required");

    }
    if(empty($email))
    {
    array_push($errors,"Email is Required");

    }

    if($password!=$confirm)
    {
        array_push($errors,"Password do not match");


    }

    if(count($errors)==0){
        $password=md5($password);
        $sql="Insert into accounts(Name,Username,Password,Email) Values('$name','$username','$password','$email')";
        mysqli_query($db,$sql); 

    }
    
}

if(isset($_POST['login'])){
    $usernamelog=$_POST['usernamelog'];
    $passwordlog=$_POST['passwordlog'];

    if(empty($usernamelog)){
        array_push($errors,"Please fill your username");
    }

    if(empty($passwordlog)){
        array_push($errors,"Please fill your password");
    }

    if(count($errors)==0){
        $passwordlog=md5($passwordlog);
        $query="Select * from accounts where Username='$usernamelog' and Password='$passwordlog'";
        $result=mysqli_query($db,$query);
        if (mysqli_num_rows($result)==1){
        
        }
    }else{
        array_push($errors,"Wrong Username/Password");
    }
}