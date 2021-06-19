<?php
session_start();
$username= $_POST['username'];
$pass=$_POST['pass'];
//connection database
$conn = mysqli_connect("localhost","root","","beauty_boutique");
if(!$conn)
{
        die("connection failed".mysqli_connection_error());
}

$username_check = "select * from registration_form where username = '$username' || pass = '$pass'";
$result = mysqli_query($conn, $username_check);
$onlyusernamecheck = mysqli_num_rows($result);

//It is for login username and password
$user_check = "select * from registration_form where username = '$username' && pass = '$pass' ";
$result = mysqli_query($conn, $username_check);
$num = mysqli_num_rows($result);

if($num==1)
{
        $_SESSION['username'] = $username;
        header('location : index.php');
}

else if($onlyusernamecheck==1)
{
    echo "<div> Invalid Username or Password! <br><a href='registration-login.php'> Please Try Again!!! </a></div>";
}

else if($num==0)
{
    echo "<div> You are not registered <br><a href='registration-login.php'> Please Register!!! </a></div>";
}
else
{
    header('location: registration-login.php');
}
?>