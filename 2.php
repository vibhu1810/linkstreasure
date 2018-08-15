<?php ob_start();?>
<?php include "functions.php";?>
<?php include "dbconnection.php";?>
<?php 
if (isset($_SESSION['authorized'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.php');
  }
  ?>
<!DOCTYPE html>
<html>
	<head> 
		<meta charset="utf-8">
		<title>mytutoriallinks.com | MyTutorialLinks.com</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link href="https://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400,400i,700,700i,800" rel="stylesheet">
		<!-- search Load icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="includes/style.css">
				<link rel="stylesheet" href="css/main_content.css">
		<style >
 <!----------------------login-------------------------->
.login {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
.login input[type=text], .login input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
.login button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

 .login button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.login .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.login .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

.login img.avatar {
    width: 40%;
    border-radius: 50%;
}

.login .container {
    padding: 16px;
}

.login span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.login .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.login .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.login .close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.login .close:hover,
.login .close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.login .animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
   from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
   .login  span.psw {
       display: block;
       float: none;
    }
    .login .cancelbtn {
       width: 100%;
    }
}
<!---------------------------------signup-------------------------->
.signup {font-family: Arial, Helvetica, sans-serif;}
.signup * {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
.signup input[type=text]:focus, .signup input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
.signup button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity:1;
}

.signup button:hover {
	    opacity: 0.8;

}

/* Extra styles for the cancel button */
.signup .cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.signup .cancelbtn,.signup .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.signup .container {
    padding: 16px;
}

/* The Modal (background) */
.signup .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.signup .modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
.signup hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.signup .close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.signup .close:hover,
.signup .close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.signup .clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
   .signup .cancelbtn, .signup .signupbtn {
       width: 100%;
    }
}
	
	
	
</style>
		<meta name="viweport" content="width = device-width ,intial-scale=1.0">
	</head>
	<body>
			<header>
			<!-------------header----------------------->
  <div class="top-container">
  <h1>Scroll Down</h1>
  <p>Scroll down to see the sticky effect.</p>
</div> 		
 <!------navigation bar----------->

<div class="header" id="myHeader">
<a class="home-btn"><i class="fa fa-home"></i></a>
<div class="ctgry-dropdown">
  <button class="ctgry-dropbtn"><i class="fa fa-th"></i></button>
  <div class="ctgry-dropdown-content" >
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
	<a href="#">Link 4</a>
    <a href="#">Link 5</a>
    <a href="#">Link 6</a>
  </div>
</div>
<!------------------request course---------------->
<div class="rqc-dropdown">
  <button class="rqc-dropbtn">Request Course <i class="fa fa-caret-down"></i></button>
  <div class="rqc-dropdown-content" >
    <a href="#">Request New Course</a>
    <a href="#">Request Course Update</a>
  </div>
</div>
   <!---------search box--------------------------->
  <form class="example" action="/action_page.php" style="width:50%; margin:10px 2px;float:left;">
  <input type="text" placeholder="Search.." name="search2" style="margin-top:0px;">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop

function myFunction() {
  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
<!--------------------submit------------------------->
<button id="submit_btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Submit</button>
<div id="id01" class="submit_modal">
  
  <form class="submit_modal-content animate" method="post" action >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="submit_close" title="Close Modal">&times;</span>
      <img src="capture.png" alt="Avatar" class="submit_avatar"></img>
    </div>

    <div class="submit-container">
	<center><h1>Submit Course/Tutorial</h1></center>
	<center>Paste the course/tutorial link below:</center>
	
	<input type="text" name="siteurl" placeholder="URL OF THE TUTORIAL" />
	<h3  style="background-color:gray;">Tell us more about this course/tutorial (optional)*</h3>
	 
    <label for="lang"><b>Programming language/<br/>Framework/Library:</b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<select  style="width:25%; height:25px; border-radius:8px;placeholder:Eg.python,Angular;"name="lang">
	<option value=" "></option>
    <option value="Python">Python</option>
    <option value="C++">C++</option>
    <option value="Angular">Angular</option>
    <option value="C#">C#</option>
    </select></br></br></br>

      <label for="psw"><b>Tag:</b></label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	  <input type="radio" name="price" value="free">Free
      <input type="radio" name="price" value="paid">Paid
	  <input type="radio" name="type" value="video">Video
      <input type="radio" name="type" value="book">Book
	  </br></br></br>
	  
	   <label for="psw"><b>This course is for:</b></label>
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	   <input type="radio" name="level" value="beginner"> Beginner
       <input type="radio" name="level" value="advanced">Advanced  
       <input type="radio" name="level" value="expertise"> Expertise
	   </br></br></br>
	   
	    <label for="psw"><b>Language:</b></label>
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		&nbsp;&nbsp;&nbsp;&nbsp; 
	    <input type="radio" name="language" value="hindi">Hindi
        <input type="radio" name="language" value="english ">English 
		<input type="radio" name="language" value="chiness">chiness 
   
        
      <button id="submit_btn"type="submit" name ="submit">SUBMIT TUTORIAL</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="submit-container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="submit_cancelbtn">Cancel</button>
    <span class="signin" style="float:right;"> <a href="#">SIGN IN</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
			 <!----------------------login-------------------------->
			
<div class="login">

<button onclick="document.getElementById('id02').style.display='block'" style="float:right; width:auto; padding: 16px; font-size:16px;margin: 6px 2px;border: none;
    cursor: pointer;">Login</button>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
			<!-----------------sign up-------------->
<div class="signup" >

<button onclick="document.getElementById('id03').style.display='block'" style="float:right; width:auto; padding: 16px; font-size:16px;margin: 6px 2px;border: none;
    cursor: pointer;">Sign Up</button>

<div id="id03" class="modal">
  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content"  action="signup.php" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
       <label for="email"><b>First Name</b></label>
      <input type="text" placeholder="First Name" name="first_name" required>

       <label for="email"><b>Last Name</b></label>
      <input type="text" placeholder="Last Name" name="last_name" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" name="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
			


				
								
               </header>

               





                 <footer>
					<a href="https://www.facebook.com/mytutorial.links.5"> <img src ="img/facebook.png" alt="facebook logo" class="social-icon"> </a>
					<a href="https://www.facebook.com/mytutorial.links.5"> <img src="img/twitter.png" alt="twitter logo"class="social-icon"></a>
					<p>&copy;<?php echo date("Y");?> @mytutoriallinks.com</p>
				</footer> 		
		    </div>
	</body>
</html>