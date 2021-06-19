<?php

$conn=mysqli_connect('localhost','root','','beauty_boutique');
if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}
$username=$_POST['username'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql1="insert into contact_us(id,username,phoneno,email,message)
    values('','$username','$phoneno','$email','$message')";
    if(mysqli_query($conn,$sql1)){
        echo "Your message has been sent.";
    }
    else{
        echo "Your message couldn't be sent".mysqli_error($conn);
    }

mysqli_close($conn);
?>