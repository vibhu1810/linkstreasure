
<?php include "includes/header.php";?>

<body class="topic-page">
<div class="header-block">
<h1>Vibhu Kushwaha</h1>
</div>
<div class="left-block">
<img src="<?php echo readimg();?>"></img>
  <p><?php echo $_SESSION['username']; ?></p>
    
<div class="social-icon">
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>	
<p style="font-size:90%;">Linked Since:15 April 2018</p>
</div>
<ul type="none" style="margin-top:20%;">
<li >Reputation<div class="num">1</div></li>
<li >Courses<div class="num">1</div></li>
<li >Reviews<div class="num">1,000</div></li>
</ul>
</div>
<div class="right-block">
<div class="biography" style="">
<div class="biohead">
Biography
</div>
<p style="margin:10px;font-size:1rem;">
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
ramramramramramramramramramramramramramramramramramramramramr amramramramramramramramramramramramramramramramram ram ram
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
ramramramramramramramramramramramramramramramramramramramramr amramramramramramramramramramramram
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife
bheem jkhiohwqiojh ,wdkjwok;coneqropweiopirpoc2i iop32icpoib0 opi5 hjkejv oife</p >


</div>
<button id="read-more" onclick="read(1)">Read More</button>
<button id="read-less" onclick="read(2)" style="">Read less</button>



<script>

	function read(a)
	{
	if(a==1)
	{
	document.getElementById('read-more').style.display ='none' ;
	document.getElementById('read-less').style.display = 'block';
]		
	}
	if(a==2)
	{
	document.getElementById('read-more').style.display ='block' ;
	document.getElementById('read-less').style.display = 'none';
	
	}
	</script>
	<script>
$(document).ready(function(){


    $("#read-more").click(function(){
       
        $(".biography").addClass("important");
    });
	
});
$(document).ready(function(){

    $("#read-less").click(function(){
       
        $(".biography").removeClass("important");
    });
	
});

</script>
<style>
.important {
	height:auto;	
}

</style>
<div class="content-block">
<div class="option">
<a onclick="display(1);">link 1</a>
<a onclick="display(2);">link 2</a>
<a onclick="display(3);">link 3</a>
</div>
<p id="one" style="display:block;">this is link one</p>
<p id="two" style="display:none;">this is link two</p>
<p id="three" style="display:none;">this is link three</p>
<script>
	
	function display(a)
	{
	if(a==1)
	{
	document.getElementById('one').style.display = 'block';
	document.getElementById('two').style.display = 'none';
	document.getElementById('three').style.display = 'none';
		
	}
	if(a==2)
	{
	document.getElementById('one').style.display = 'none';
	document.getElementById('two').style.display = 'block';
		document.getElementById('three').style.display = 'none';
	}
	if(a==3)
	{
	document.getElementById('one').style.display = 'none';
	document.getElementById('two').style.display = 'none';
		document.getElementById('three').style.display = 'block';
	}
	}	
	</script>
</div>
<div class="tag-block">
<p style="font-weight:bold">Tags</p>
<hr/>
<a href="#">item name 1</a>
<a href="#">item name 2</a>
</div>
<div class="share-block">
<p style="font-weight:bold">Share This Page</p>
<hr/>
<a href="#" class="fa fa-facebook"> Facebook</a>
<a href="#" class="fa fa-twitter"> Twitter</a>
</div>
</div>

</body>
</html>
