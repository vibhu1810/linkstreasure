<?php include"dbconnection.php" ?>
<?php

//<!.........for level.......>
    global $connection;
	$sum1=' ';
	
if(isset($_POST['level']))
{
$p=$_POST['level'];
    $l=count($p);
$sum1="'$p[0]'";
for($i=1;$i<$l;$i++){
	$P=$p[$i];
$sum1.=","."'$P'";
}
$sume1="level IN ($sum1)";

}
else $sume1="TRUE";
?>



<?php


//<!.........for Language.......>
    global $connection;
	$sum2=' ';
	
if(isset($_POST['language']))
{
$p=$_POST['language'];
    $l=count($p);
$sum2="'$p[0]'";
for($i=1;$i<$l;$i++){
	$P=$p[$i];
$sum2.=","."'$P'";
}
$sume2="language IN ($sum2)";

}
else $sume2="TRUE";
?>


<?php

//<!.........for price.......>
    global $connection;
	$sum3=' ';
	
if(isset($_POST['price']))
{
$p=$_POST['price'];

    $l=count($p);
$sum3="'$p[0]'";
for($i=1;$i<$l;$i++){
	$P=$p[$i];
$sum3.=","."'$P'";
}
$sume3="price IN ($sum3)";

}
else $sume3="TRUE";

?>



<?php

//<!.........for type.......>
    global $connection;
	$sum4=' ';
	
if(isset($_POST['type']))
{
$p=$_POST['type'];
    $l=count($p);
$sum4="'$p[0]'";
for($i=1;$i<$l;$i++){
	$P=$p[$i];
$sum4.=","."'$P'";
}
$sume4="type IN ($sum4)";

}
else $sume4="TRUE";
?>


<?php include "price.php" ?>




<?php
 
$sql="SELECT * FROM submit_form  WHERE " ;
$sql.=$sume1." AND ";
$sql.=$sume2." AND ";
$sql.=$sume3." AND ";
$sql.=$sume4." ORDER BY rank LIMIT "."$pr".","."$ne" ;


$result1=mysqli_query($connection,$sql);

if ($result1)
  {
    while ($row=mysqli_fetch_assoc($result1))
    {
		$s=$row['siteurl'];
		$l=$row["lang"];
		$p=$row["price"];
		$t=$row["type"];
		$r=$row["rank"];
		$lv=$row["level"];
		$ln=$row["language"];
   
	
  
  
  echo '<div class="main-block-items">
  <div>
    <a href="https://hackr.io/tutorial/android-app-development-by-stanford">
     <img style="height:auto; width:10%;float:left;" src="new/apache-spark_logo.svg"></img>
    </a>
 </div>
  <div class="right">
    <div class="title">
            <a href="'.$s.'"class="tutorial-title" title="Android App Development by Stanford">'.$s.'</a>
      
    </div>
    <div class="footer">
      <div class="footer-actions">
	  <div>
	  <a href="#"><img src="like.png" alt="LIKE"></img></a>
	  </div>
	   <div>
	  <a href="#"><img src="unlike.png" alt="UNLIKE"></img></a>
	  </div>
        <div class="save">
          <a href="https://hackr.io/tutorial/android-app-development-by-stanford?modal=save" class="btn"><i class="fa fa-bookmark"></i>&nbsp;Save</a>
        </div>
        <div class="comments">
          <a href="https://hackr.io/tutorial/android-app-development-by-stanford" class="btn"><i class="fa fa-comment"></i>&nbsp;Comments 
                    </a>
        </div>
      </div>
      <div class="btm-footer">
        <div class="author">
          <span class="txt">Submitted by</span>
                      <a href="https://hackr.io/shobhit-jain">bheem</a>
                  </div>
       
      </div>
    </div>
  </div>
   <div class="left" >
      <div class="count">'.$r.'</div>
  
                      <span class="label1 label-xs label-success">'.$p.'</span>
                      <span class="label1 label-xs label-danger"><i class="fa fa-play-circle"></i>'.$t.'</span>
                 
  </div>
 
<button class="collapsible"></button>
<div class="content1">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

</div>';
  }}
	else echo"error";
 ?>
 


 