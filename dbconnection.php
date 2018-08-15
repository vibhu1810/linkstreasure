<?php ob_start();?>
<?php
$connection= mysqli_connect('localhost','root','','db3');
	if(!$connection)
	{
		die("database not connected");
    }
?>