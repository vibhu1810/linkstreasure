
<?php include "dbconnection.php";?>
<?php 
$pr;
$ne;
if(isset($_POST['previous']))
{	
if($pr>0)
{
$pr-=$_POST['previous'];
$ne-=$_POST['previous'];
}
}
 else {
$pr=0;
$ne=7;
}
if(isset($_POST['next']))
{
global $connection;
$sqlt="SELECT * FROM submit_form  WHERE " ;
$sqlt.=$sume1." AND ";
$sqlt.=$sume2." AND ";
$sqlt.=$sume3." AND ";
$sqlt.=$sume4 ;
$result=mysqli_query($connection,$sqlt);
if ($result)
{   
$trow=mysqli_num_rows($result);
}

if($trow>=$ne)
{
	$pr+=$_POST['next'];
	$ne+=$_POST['next'];	
}
}
else 
{
$pr=0;
$ne=7;
}

?>