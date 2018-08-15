<?php include "functions.php";?>
<?php include "dbconnection.php";?>

<?php
        $u=$_POST['username'];
		$p=$_POST['password'];
	     login($u,$p);
	
	?>
<a href="2.php">CLICK HERE</a>
