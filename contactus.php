<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width.initial-scale=1.0">
	 
	 <link rel="stylesheet" type="text/css" href="style.css">
     <title>Contact us</title>
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

   h1{ 
      font-family: cursive;
	  font-size: 50px;
	  color:#F78888;   
   }
   h2{ 
   font-family: cursive;
	  font-size: 35px;
	  color:#F78888;
	  }
  p{ 
  font-family: cursive;
	  font-size: 20px;
	  color:white;
	  }
label {
font-family: cursive;
 font-size: 20px;
 color: white;
 }
 
 input[type=text],textarea{
         width: 50%;
		 padding: 6px;
		  margin-top: 8px;
		   margin-bottom: 16px;
		   background: pink;
		   
		}
		
input[type=submit] {
  background-color:#022140;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
  
}

.details  {
          float: right;
		  width: 40%;
		   margin-top: 8px;
		   padding: 20px;
		   width: 30%;
}
	 </style>
	
	 
</head>
<body>


<div  class= "page-container">
 <header class="header"> 
		   <h1> BLue EYes BE FIT & SHINE</h1>
		         <div class="log-reg">
				 <a href="contactus.php">Contact Us</a><br>
	             <a href="registration-login.php">Registration/<a href="registration-login.php">Login</a></a>
				</div>
				</header>
		  
		<nav class="main-nav">
         <div class="menu">
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
		 </ul>
		 </div>
		 </nav>
<div  style="text-align:center">
<h1>Contact Us</h1>
</div>
   <div class= "details" >
    <h2>You can Contact</h2>
  
   <p>By Call = 0987654321<br>
     By email = blueeyes@gmail.com<br>
	 By AI chat = Hey kitty (Artificial Intelligence chat)<br>
	 Address : 5th floor, NSIC Building, Mancheswar, Bhubaneswar, Odisha, 751010
	 
    </p>
  </div>
  

  <div class= "dropmsg" >
  <h2>Drop A Message</h2>

  <form action="contact_usConnection.php" method="POST">
  <label for="name"><b>Name</b></label><br>
  <input type="text" name="username" id="username" placeholder="Your Name">
  <br>
  <label for="text"><b>Phone No</b></label><br>
  <input type="text" name="phoneno" id="phoneno" placeholder=" Your Phone No" >
  <br>
  <label for="email"><b>Email</b></label><br>
  <input type="text" name="email" id="email"  placeholder="Your EMail">
  <br>
  <label for="message"><b>Message</b></label>
  <br>
        <textarea id="subject" name="message" placeholder="Write something.." style="height:170px"></textarea>
       <br>
	   <input type="submit" value="Submit">
	   <br>
	   <br>
	  <hr>
</form>
  </div>
   <div >
         <footer class="footer">
		 
		
		 <h3>Copyright &copy;2020|| Designed by..<a href="nsti">NSTI Bhubaneswar</a></h3></footer>
		 </div>
 
  </div>
 
</body>
</html>