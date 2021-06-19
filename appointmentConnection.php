<?php
$conn=mysqli_connect('localhost','root','','beauty_boutique');
if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}
$yrname=$_POST['yrname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$services=$_POST['services'];
$date=$_POST['date'];
$timeslot=$_POST['timeslot'];
$expert=$_POST['expert'];

$sql1="insert into book_appointment(id,yrname,phone,email,services,date,timeslot,expert)
    values('','$yrname','$phone','$email','$services','$date','$timeslot','$expert')";
    if(mysqli_query($conn,$sql1)){
        echo "Your appointment has been booked.";
    }
    else{
        echo "Your appointment couldn't be booked.".mysqli_error($conn);
    }

mysqli_close($conn);
?>