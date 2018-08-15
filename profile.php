
	  <?php include "includes/header.php";?>
	  <style>

.dropdown {
    position: relative;
    
	border :solid;
}

.dropdown-content {
    display: inblock;
    margin-top:0%;
    background-color: #f1f1f1;
    min-width:20%;
}

.dropdown-content a {
    color: black;
    padding: 10px 8px;
    text-decoration: none;
    display: block;
	border-bottom:solid 1px lightgray;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
.block{
float:left;
padding:2%;
height:auto;
width:12%;
border-spacing:0%;
border:solid 1px lightgray;
margin: 1% 1% 2% 3.5%;
box-shadow:3px 5px 8px;
}
.block p{
	font-weight:bold;
	margin:6% 12%;
}





.upload {
  padding: 10px 18px;
  font-size: 20px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 7px #999;
  margin:20% 0% 0% 20%;
}

.upload:hover {background-color: #3e8e41}

.upload:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}


</style>




 

  
  <div class="block" style="">
  <img src="<?php echo readimg();?>"></img>
  <p><?php echo $_SESSION['username']; ?></p>
    <div class="dropdown-content">
        <a onclick="display(1);">Profile</a>
        <a  onclick="display(2);">Profile Photo</a>
        <a href="pubblic_profile.php">My Pubblic Profile</a>
	</div>
	</div>
	<script>
	
	function display(a)
	{
	if(a==1)
	{
	document.getElementById('imguplod').style.display = 'none';
		document.getElementById('sc-edprofile').style.display = 'block';
	}
	if(a==2)
	{
	document.getElementById('imguplod').style.display = 'block';
		document.getElementById('sc-edprofile').style.display = 'none';
	}
	}	
	</script>
	<div id="sc-edprofile" >
  <h1>Edit Profile</h1>
  <div class="sc-container">
    <input type="text" value="<?php echo $_SESSION['username']; ?>" placeholder="First Name" />
    <input type="text" placeholder="Last Name" />
    <textarea placeholder="Bio" /></textarea>
    <select>
      <option value="">Male</option>
      <option value="">Female</option>
    </select>
	<input type="text" placeholder="Facebook Profile URL" />
    <input type="text" placeholder="Twitter Profile URL" />
    <input type="text" placeholder="Google+ Profile URL" />
    <input type="text" placeholder="LinkedIn Profile URL" />
    <input type="submit" value="Save" />
  </div>
  </div>
  <div id="imguplod" style="display:none;">
<div  class="img-container">
    <h1>Edit Profile Photo 
        <small>with preview</small>
    </h1>
	
    <p style="text-align:center;margin-top:20px;">Select image to upload:</p>
    
    <div class="avatar-upload">
	 <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url(<?php echo readimg();?>);">
				
    

            </div>
        </div>	
        <div class="avatar-edit">
		   <form action="upload.php" method="post" enctype="multipart/form-data" id="myForm">
            <input type='file'  name="file" id="imageUpload"/ >
              <label for="imageUpload"></label>
			  
               </form>
			   
			   </div>
                
		
		
    
<button class="upload" onclick="submitform();">Upload <i class="fa fa-upload"></i></button>
</div>


<script>
function submitform()
{
document.getElementById("myForm").submit();
}
</script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

<script  src="js/index.js"></script>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

</body>

</html>