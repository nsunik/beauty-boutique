<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width.initial-scale=1.0">
	 
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <title>blueeyesbefit&shine</title>
	 <style>
	 *{
	margin:0;
	padding:0;
	box-sizing: border-box;
}

.page-container {
        background: linear-gradient( #022140,#F78888);
		 padding: 50px;
 }
	 h2{
	 font-family: cursive;
	 font-size: 50px;
	 color:#F78888;
	
	 }
	 label{
	    font-family: cursive;
		font-size: 20px;
		color: white;
	 }
	 input{
	 width: 50%;
	 padding: 6px;
	 margin-top: 6px;
	 margin-bottom: 5px;
	 background: pink;
	 
	 }
	 
	input[type=submit]{
	    width: 50%;
		 padding: 6px;
		  margin-top: 8px;
		   margin-bottom: 16px;
		   background: pink;
		   color: white;
		   font-size: 20px;
		   font-family: cursive;
	 }
	 .timing{
	   float:right;
	 }
	.timing h2{
	  font-size: 35px;
	  font-family: cursive;
	  color: #F78888;
	  text-align: center;
	  padding-right: 10px;
	 }
	  p{ 
  font-family: cursive;
	  font-size: 20px;
	  color:white;
	   padding: 5px;
	 
	  }
	 
	 
	 </style>
	 
</head>
<body>
    <div class="page-container">
     
	       
	        <header class="header"> 
		   <h1> BLue EYes BE FIT & SHINE</h1>
		         <div class="log-reg">
				 <a href="contactus.php">Contact Us</a><br>
	             <a href="registration-login.php">Registration/<a href="registration-login.php">Login</a></a>
				</div>
				</header>
		  
		<nav class="main-nav">
         <div class="menu">
		 <ul>
		 <li><a href="index.php"> Home</a> </li>
		 <li><a href="services.php"> Services </a></li>
		 <li><a href="bridal.php"> Bridal</a> </li>
		  <li><a href="skincare.php"> Skin Care</a> </li>
		   <li><a href="haircare.php"> Hair care</a> </li>
		    <li><a href="nailcare.php"> Nail Care</a> </li>
			<li><a href="virtualcare.php"> Virtual Care</a> </li>
		 
		 <li><a href="tattoo&henna.php"> Tattoo & Henna</a> </li>
		 <li><a href="piercing.php"> Piercing</a> </li>
		 <li><a href="bookanappointment.php"> Book An Appointment</a> </li>
		 <li><a href="product.php"> Product</a> </li>
		 <li><a href="gallery.php"> Gallery</a> </li>
		 <li><a href="About Us.php"> About Us</a> </li>
		 </ul>
		 </div>
		 </nav>
		 <div class="bookappointment">
		 <h2> Book An Appointment</h2>
		 <div   class="timing">
		 <p><h2>Opening Hours:</h2>
<p>Monday: 10:00AM-10:00PM<br>
Tuesday: 9:00AM-7:00PM<br>
Wednesday: 9:00AM-7:00PMm<br>
Thursday:9:00AM-7:00PM<br>
Friday: 9:00AM-10:00PM<br>
Saturday: 19:00AM-7:00PM<br>
Sunday: Closed<p></p>
		 </div>
		 <div class="appointmet-details">
		 
		 <form action="appointmentConnection.php" method="POST">

		 <label for ="yrname"><b>Your Name</b></label><br>
		 <input type="text" name="yrname" id="yrname" required>
		 <br>
		 <label for ="phone"><b>Phone No</b></label><br>
		 <input type="text" name="phone" id="phone" required>
		 <br>
		 <label for="email"><b>Your Email</b></label><br>
		 <input type="text" name="email" id="email" required>
		 <br>
		 <label for="services"><b>Services For</b></label><br>
		 <input type="text" name="services" id="services" required>
		 <br>
		 <label for="date"><b>Date</b></label><br>
		 <input type="date" name="date" id="date" required>
		 <br>
		 <label for="time"><b>Time Slot</b></label><br>
		 <input type="time" name="timeslot" id="timeslot" required>
		 <br>
		 <label for="expert"><b>Expert/Dr</b></label><br>
		 <input type="text" name="expert" id="expert" required>
		 <br>
		 <input type="submit" value="Submit">
		 </div>
		 </form>

		 </div>
		  <div >
         <footer class="footer">
		 
		
		 <h3>Copyright &copy;2020|| Designed by..<a href="nsti">NSTI Bhubaneswar</a></h3></footer>
		 </div>
		
		
		 </div>