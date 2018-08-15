<?php ob_start();?>
<?php  session_start();?>
<?php include"dbconnection.php";?> 
<?php
// function to escape data and strip tags
function safestrip($string){
	  global $connection; 
       $string = strip_tags($string);
       $string = mysqli_real_escape_string($connection,$string);
       return $string;
}
function create()
{      global $connection; 
     if(isset($_POST['submit']))
	  {
		  
		$fn=$_POST['first_name'];
		$fl=$_POST['last_name'];
		$u=$_POST['username'];
		$p=$_POST['password'];
		$pr=$_POST['psw-repeat'];
		  
		$fn=safestrip($fn);
		$fl=safestrip($ln);
		$u=safestrip($u);
		$p=safestrip($p);
		$pr=safestrip($pr);
		if($p===$pr)
		{
			
			// first check the database to make sure 
					  // a user does not already exist with the same username and/or email
					  $user_check_query = "SELECT * FROM user WHERE username='$u' LIMIT 1";
					  $resulta = mysqli_query($connection,$user_check_query);
					  $user = mysqli_fetch_assoc($resulta);
					   if ($user) 
					  {
						  // if user exists
						if ($user['username'] === $u) 
						{
							echo "<h1>Username already exists</h1>";
						}
					  }
  
					else {	
								$query="INSERT INTO	user(first_name,last_name,username,password) ";
								$query.="VALUES('$fn','$ln','$u','$p')";
								$result=mysqli_query($connection,$query);
								if(!$result)
								{
									die('Query faild'.mysqli_error());
								}
								else
								{
									$_SESSION['username']=$u;
									$_SESSION['first_name']=$fn;
									$_SESSION['last_name']=$ln;
								  //set session
								  $_SESSION['authorized'] = true;

								  
								  // reload the page
								 $_SESSION['success'] = 'Login Successful';
								 header('Location:index.php');
								 exit;
								
							   }
		}
		}
		else echo "<h1>password mismatch</h1>";
	  }
		
}




//function to show any messages
function messages() {
	   $message = '';
	   if($_SESSION['success'] != '') {
		   $message = '<span class="success" id="message">'.$_SESSION['success'].'</span>';
		   $_SESSION['success'] = '';
	   }
	   if($_SESSION['error'] != '') {
		   $message = '<span class="error" id="message">'.$_SESSION['error'].'</span>';
		   $_SESSION['error'] = '';
	   }
	   return $message;
}

// log user in function
function login($username, $password){
	global $connection;

 //call safestrip function
 $user = safestrip($username);
 $pass = safestrip($password);

 //convert password to md5
 //$pass = md5($pass);

  // check if the user id and password combination exist in database
  $sql="SELECT * FROM user WHERE username = '$user' AND password = '$pass'";
  $result= mysqli_query($connection,$sql);

  //if match is equal to 1 there is a match
  if (mysqli_num_rows($result) == 1) {
	  	              $row=mysqli_fetch_assoc($result);
	                     $_SESSION['username']=$user;
						 $_SESSION['first_name']=$row['first_name'];
						  $_SESSION['last_name']=$row['last_name'];
                          //set session
                          $_SESSION['authorized'] = true;

                          // reload the page
                         $_SESSION['success'] = 'Login Successful';
                         header('Location:index.php');
                         exit;


   } else {
               // login failed save error to a session
               $_SESSION['error'] = 'Sorry, wrong username or password';
  }

  }
  
  
  function delet()
{
	if(isset($_POST['submit']))
{
	global $connection;
	$u=$_POST['username'];
	$p=$_POST['password'];
	$id=$_POST['id'];
	$query="DELETE FROM user WHERE id ='$id'";
	$result=mysqli_query($connection,$query);
	if(!$result)
	{
		die("query faild".mysqli_error($connection));
    }
	else
		echo"record deleted";
}
}
	
	function update()
{
	if(isset($_POST['submit']))
{
	global $connection;
	$u=$_POST['username'];
	$p=$_POST['password'];
	$id=$_POST['id'];
    $u= mysqli_real_escape_string($connection,$u );
	$p= mysqli_real_escape_string($connection,$p );
	$query="UPDATE user SET username ='$u',password='$p' WHERE id ='$id'";
	$result=mysqli_query($connection,$query);
	if(!$result)
	{
		die("query faild".mysqli_error($connection));
    }
	else
		echo"record updated";
}
}


function read()
{    global $connection;
	$connection= mysqli_connect('localhost','root','','loginapp');
	if($connection)
	{
		echo "yes its working <br>";
	}
	else 
	{
		die("database connected");
    }
	
	$query="SELECT * FROM user";
	$result=mysqli_query($connection,$query);
	if(!$result) 
	{
		die('Query faild'.mysqli_error());
	}
	  while($row = mysqli_fetch_assoc($result)){
				print_r($row);
	  }		
}
function fetch()
{
         global $connection;
           $query="SELECT * FROM user";
	   $result=mysqli_query($connection,$query);
	  if(!$result) 
		{
			die('Query faild'.mysqli_error());
		}
		while($row=mysqli_fetch_assoc($result))
		{
		$id=$row['id'];
		echo " <option value='$id'>$id</option>";
		}
}

function uploadimg()
{ 
	global $connection;
	if(isset($_FILES['file']))
	{   
// check if the user id and password combination exist in database
       $user =$_SESSION['username'];
  $sql="SELECT * FROM user WHERE username = '$user'";
  $result= mysqli_query($connection,$sql);
  	  if(!$result) 
		{
			die('Query faild'.mysqli_error());
		}
		while($row=mysqli_fetch_assoc($result))
		{
		$id=$row['id'];
		
		}
  
		$file=$_FILES['file'];
		//print_r($file);
		$filename=$_FILES['file']['name'];
		$fileTempName=$_FILES['file']['tmp_name'];
		$fileSize=$_FILES['file']['size'];
		$fileError=$_FILES['file']['error'];
		$fileType=$_FILES['file']['type'];
		
		$fileExt=explode('.' ,$filename);
		$actualExt=strtolower(end($fileExt));
		$allowed= array('jpg','png','jpeg','pdf');
		if(in_array($actualExt,$allowed))
		{
			if($fileError===0)
			{
				if($fileSize<1000000&&$fileSize>1000)
				{
					$fileNameNew="profiles".$id.".".$actualExt;
					$filedestantion="upload/".$fileNameNew;
					move_uploaded_file($fileTempName,$filedestantion);
			
					$sqlimg ="SELECT * FROM profileimg WHERE userid= '$id'";
					$resultimg=mysqli_query($connection, $sqlimg);
					if(!(mysqli_num_rows($resultimg)>0)){
					$query="INSERT INTO	profileimg (userid,imagepath,status) VALUES('$id','$filedestantion',1) ";

								$result=mysqli_query($connection,$query);
								if(!$result)
								{
									die('Query faild'.mysqli_error());
								}
					}
					else{
					$sql="UPDATE profileimg SET status=1 AND imagepath= '$filedestantion' WHERE userid='$id'";
					$result = mysqli_query($connection, $sql);
						if(!$result) 
						{
							die('Query faild'.mysqli_error());
						}
						else header('location:profile.php');
					}
				}
				else echo "File Size is not in range ";
			}
			else echo "THere is a error in uploading your file";
			
		}
		else echo "your cannot upload files of these extension";
	}else echo "your";

}

function readimg()
{
	 global $connection;
    $user =$_SESSION['username'];
  $sql="SELECT * FROM user WHERE username = '$user'";
$result=mysqli_query($connection, $sql);
if(mysqli_num_rows($result)>0)
{
	if($row= mysqli_fetch_assoc($result))
	{
		$id=$row['id'];
		$sqlimg ="SELECT * FROM profileimg WHERE userid= '$id'";
		$resultimg=mysqli_query($connection, $sqlimg);
		while($rowimg=mysqli_fetch_assoc($resultimg))
		if(isset($rowimg['status']))
		{     $_SESSION['status']= $rowimg['status'];
			return $rowimg['imagepath']."?".mt_rand();
		}
		else {
	
		
		 
		
		
			
		}
		

	}
}
else echo "no user presnt";
}
?>