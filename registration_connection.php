<?php

$conn=mysqli_connect('localhost','root','','beauty_boutique');
if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}
$fullname=$_POST['fullname'];
$country=$_POST['country'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$username=$_POST['username'];
$pass=$_POST['pass'];
$conf_password=$_POST['conf_password'];
$gender=$_POST['gender'];

$sql1="insert into registration_form(id,fullname,country,mobile,email,username,pass,conf_password,gender)
    values('','$fullname','$country','$mobile','$email','$username','$pass','$conf_password','$gender')";
    if(mysqli_query($conn,$sql1)){
        echo "Your message has been sent.";
    }
    else{
        echo "Your message couldn't be sent".mysqli_error($conn);
    }

mysqli_close($conn);
?>