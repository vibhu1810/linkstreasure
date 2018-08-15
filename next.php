<?php include "includes/header.php";?>

<style>
<!-----------tutorial name-------------------->

.tutorial-name{
	height:auto;
	width:100%;
	background-color:wheat;
}

</style>

<!-----------tutorial name-------------------->
<div class="tutorial-name">
<img src="new/apache-spark_logo.svg" style="height:100px; width:100px;margin:0% 5%;"></img>

</div>
    

<!-------top tutorial bar--------------->

 <!--------content------------------->
  <div class="content">
  <!--------------left block----------->
  <div class="block-left">
  
  </div>
  <!----------middle block-------------->
  <div class="block-middle">
  <div class="top-tutorial">
  <p>Top Tutorial Links</p>
  </div>
  
<div id="r">
    <?php
	
	 global $connection;
		 
$sql="SELECT * FROM submit_form  ORDER BY rank LIMIT 0,7";
 
 
$result=mysqli_query($connection,$sql);

if ($result)
  {
  
  while ($row=mysqli_fetch_assoc($result))
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
  else
	  echo "error";
  ?>
  
  </div>
 
  </div>



<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>



 <!---------------right-block---------------------------->
  <div class="block-right">
  <!---------------filter&checkbox------------------------------->
  <div style="font-size:20px; font-weight:500;color: #3c7dc0;">Filters</div>
  <div style="font-size:18px; font-weight:350;">Level</div>
  <label class="container ">Beginner
  <input type="checkbox"  name="level" value="beginner">
  <span class="checkmark"></span>
</label>
<label class="container">Intermediate
  <input type="checkbox" name="level" value="intermediate">
  <span class="checkmark"></span>
</label>
<label class="container">Expertise
  <input type="checkbox" name="level" value="expertise ">
  <span class="checkmark"></span>
</label>
<div style="font-size:18px; font-weight:350;">language</div>
  <label class="container">Hindi
  <input type="checkbox"  name="language" value="hindi">
  <span class="checkmark"></span>
</label>
<label class="container">English
  <input type="checkbox" name="language" value="english">
  <span class="checkmark"></span>
</label>
<label class="container">Others
  <input type="checkbox" name="language" value="others ">
  <span class="checkmark"></span>
</label>
<div style="font-size:18px; font-weight:350;">price</div>
  <label class="container">Free
  <input type="checkbox"  name="price" value="free">
  <span class="checkmark"></span>
</label>
<label class="container">Paid
  <input type="checkbox" name="price" value="paid">
  <span class="checkmark"></span>
</label>
<div style="font-size:18px; font-weight:350;">type</div>
  <label class="container">Video
  <input type="checkbox"  name="type" value="video">
  <span class="checkmark"></span>
</label>
<label class="container">Book
  <input type="checkbox" name="type"value="book">
  <span class="checkmark"></span>
</label>
<label class="container">Blog
  <input type="checkbox" name="type"value="blog">
  <span class="checkmark"></span>
</label>
  </div>
  </div>
   



<script type="text/javascript">
    $(document).ready(function() {
        $("#previous,#next,:checkbox").click(function(){
			var a= $(this).text();
			var y;
			 if (a=="previous"){
				 
				 y=7;
			 }
			
			
			 
			 var x;
			 if(a=="next")
			 {
			 x=7;
			 }
			var level = [];
            $.each($("input[name='level']:checked"), function(){            
                level.push($(this).val());
            });
			
            var language = [];
            $.each($("input[name='language']:checked"), function(){            
                language.push($(this).val());
            });
			
			var price = [];
            $.each($("input[name='price']:checked"), function(){            
                price.push($(this).val());
            });
			
            var type = [];
            $.each($("input[name='type']:checked"), function(){            
                type.push($(this).val());
            });
			 
			 $.post("filter1.php",
    {
        name: "Donald Duck",
        city: "Duckburg",
		level:level,
		language:language,
		price:price,
		type:type,
		previous:y,
		next:x
		
    },
      function(data,status){
        if(status=="success")
        {
			
          $("#r").html(data);
          }
         			  
        });
    
	 });

	  });
</script>
 
<h2>Previous and Next Buttons</h2>
	
<button id="previous">previous</button>

<button id="next">next</button>

 
<!-------------------------------footer----------------------------------------------> 
   <footer>
                    <div class="opt" style="color:purple; font-size:15px; ">
					<a>Home</a>
					<a>About Us</a>
					<a>Contact Us</a>
					<a>Help & FAQ</a>
					<a>Feedback</a>
					</div>
					<a href="https://www.facebook.com/mytutorial.links.5"> <img src ="new/facebook.png" alt="facebook logo" class="social-icon"> </a>
					<a href="https://www.facebook.com/mytutorial.links.5"> <img src="new/twitter.png" alt="twitter logo"class="social-icon"></a>
					<p>&copy;<?php echo date("Y");?> @mytutoriallinks.com</p>
				</footer> 	
</body>
</html>
