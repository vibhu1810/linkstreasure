<?php ob_start();?>
<?php include "functions.php";?>
<?php include "dbconnection.php";?>
<?php 
 
  if (!isset($_SESSION['authorized'])) {
  	$_SESSION['msg'] = "You must log in first";
  	
  }
  if (isset($_GET['logout'])) {
  	session_destroy(); 
  	unset($_SESSION['authorized']);
  	
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<title>mytutoriallinks.com | MyTutorialLinks.com</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- search Load icon library -->
		<link href="https://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400,400i,700,700i,800" rel="stylesheet">
		<!----------profile css link------------>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
		    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
			 <link rel="stylesheet" href="css/profile_style.css" >
        <link rel="stylesheet" href="css/style.css">
		   <!----------profile css link------------>
		        <link rel="stylesheet" href="css/header_style.css">
				<link rel="stylesheet" href="css/main_content.css">
				<link rel="stylesheet" href="css/next_style.css">
				<link rel="stylesheet" href="css/public_profile_style.css">
				<link rel="stylesheet" href="css/request_course_style.css">
				<link rel="stylesheet" href="css/responsie_style.css">
		
		
        
		<script async src="https://cdn.ampproject.org/v0.js"></script>
		 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				


		
	<style>
	
</style>

<meta name="viweport" content="width = device-width ,intial-scale=1.0">
</head>
<body class="topic-page">
<!-------------header----------------------->
  <div class="top-container">
  <h1>Links Treasure</h1>
  <p>Happy to link you.</p>
</div> 		
 <!------navigation bar----------->

<div class="header1 header2" id="myHeader">
<a class="home-btn" href="index.php"><i class="fa fa-home"></i><a>
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
    <a href="request_couurse.html">Request New Course</a>
    <a href="#">Request Course Update</a>
  </div>
</div>
   <!---------search box--------------------------->
  <form class="example" action="/action_page.php" style="width:50%; margin:10px 2px;float:left;">
  <input type="text" placeholder="Search.." name="search2">
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
</script>


 <?php  if (isset($_SESSION['authorized'])) : ?>
<div class="profile-dropdown">
 <?php  if (isset($_SESSION['status'])) : ?>
  <img class="profile-dropbtn"src="<?php echo readimg();?>" alt="<?php echo $_SESSION['username']; ?>"> 
  <?php endif ?>
  <?php if (!isset($_SESSION['status'])) : ?>
  <div class="name-photo" style=" ">
 <p > <?php $f=$_SESSION['first_name'];$l=$_SESSION['last_name'];$s=$f.$l;echo strtoupper($s) ; ?><p>
  </div>
  <?php endif ?>
  <div class="profile-dropdown-content">
       
		
		
	 <h3 style="margin:0%; ">Welcome <strong><?php echo $_SESSION['first_name']; ?></strong></h3>
        <a href="profile.php">My Profile</a>
        <a href="#">Friend Requests</a>
        <a href="#">Account Settings</a>
        <a href="#">Support</a>
        <a href="index.php?logout='1'">Log Out</a>
          <?php endif ?>
		  <?php  if (!isset($_SESSION['authorized'])) : ?>
		  
		  
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
<?php endif ?>
		  
  </div>
</div>
</div>