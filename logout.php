<DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width.initial-scale=1.0">
	 
	 <link rel="stylesheet" type="text/css" href="style.css">
<title>Registration</title>
<style>
*{
	margin:0;
	padding:0;
	box-sizing: border-box;
}
.page-container{
           background: linear-gradient( #022140,#F78888);
            padding: 50px;
			
}
 h1{
            font-family: cursive;
			font-size: 50px;
			color: #F78888;

}
p{
          font-family: cursive;
		  font-size: 20px;
		  color: white;
		  padding: 15px;
}
hr {
  border: 1px solid black;
  margin-bottom: 25px;
}
label {
font-family: cursive;
 font-size: 20px;
 color: balck;
 }
 input[type=text],input[type=password] {
     
	 width: 100%;
	 padding: 3px;
     margin: 5px 0 5px 0;
	 display: inline-block;
	 background: pink;
 }
 .registrationbtn  { 
  background-color: #022140;
  font-size: 20px;
  color:white;
  padding: 5px 5px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
 }
</style>
</head>
<body>
<div class="page-container">
  <header class="header"> 
		   <h1> BLue EYes BE FIT & SHINE</h1>
		         <div class="log-reg">
				 <a href="contactus.php">Contact Us</a><br>
	             <a href="registration-login.php">Registration/<a href="registration-login.php">Logout</a></a>
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
		 </ul>
		 </div>
		 </nav>
<div class="registration">


<h1> Login or Register</h1>


<label for="username"><b>User Name</b></label>
<input type="text" name="username" id="username" required>
</br>

<label for="psw"><b> Password</b></label>
<input type="password" name="psw" id="psw" required>
</br>
<button type="submit" class="registrationbtn">Login</button>
<h1> Registration Form</h1>
<p>Please fill in this form to use our services</p>
<hr>

<form action="registration_connection.php" method="POST">

<label for="name"><b>Name</b></label>
<input type="text" name="fullname" id="fullname" required>
</br>

<label for="country"><b>Country</b></label>
<input type="text" name="country" id="country" required>
</br>

<label for="mobile"><b>Phone Number</b></label>
<input type="text" name="mobile" id="phonenumber"required>
</br>

<label for="email"><b>Email</b></label>
<input type="text" name="email" id="email" required>
</br>

<label for="username"><b>User Name</b></label>
<input type="text" name="username" id="username" required>
</br>

<label for="pass"><b> Password</b></label>
<input type="password" name="pass" id="pass" required class="input" data-type="password">
</br>
<label for="pass"><b> Repeat Password</b></label>
<input type="password" name="conf_password" id="pass" required class="input" data-type="password">
</br>
<label for="gender"><b> Gender : </b></label>
<input type = "radio" name ="gender" value="male"> Male 
<input type= "radio" name = "gender" value="female"> Female 
<input type= "radio" name = "gender" value="other"> Other
</br>

<button type="submit" class="registrationbtn">Register</button>
</br>

</form>
<hr>
<p>By creating an account you agree to our TERM & PRIVACY .</P>



<div >
<p>Already have an account?<a href="registration-login.php">Sign in</p>
</div>
 <div >
         <footer class="footer">
		 
		
		 <h3>Copyright &copy;2020|| Designed by..<a href="nsti">NSTI Bhubaneswar</a></h3></footer>
		 </div>
</div>


</form>
</div>
</body>
</html>
