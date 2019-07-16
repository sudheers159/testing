<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style1.css" type="text/css" rel="stylesheet" media="all">

	<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn span:hover {
  background-color: RoyalBlue;
  color:white;
}

.banner-contact {
    background: url(images/feature.jpg) no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -moz-background-size: cover;
    height: 87vh;
}
</style>

</head>
<body>

<header>
	<div class="container">
		<!-- nav -->
		<nav class="py-md-4 py-3 d-lg-flex">
			<div id="logo">
				<h1> <a href="index.html" style="text-shadow: 2px 2px gray;">Spy App</a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-lg-3 ml-auto">
				<li class="active"><a href="index.php">Home</a></li>
				<li class=""><a href="about.html">Features</a></li>
				<li class=""><a href="services.html">How To Install</a></li>
		<!-- 		<li class=""><a href="gallery.html">Demo</a></li> -->
				<li class=""><a href="contact.php">Contact Us</a></li>
				<li class=""><span><span class="fa fa-phone"></span> +12 34 3456 7890</span></li>
			</ul>
		</nav>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<section class="banner_w3lspvt" id="home">
	<div class="csslider infinity" id="slider1">
		<input type="radio" name="slides" checked="checked" id="slides_1" />
		
		<ul>
			<li>
				<div class="banner-contact">
					<div class="overlay">
						<div class="container">
							<div class="w3layouts-banner-info">
								<h3 class="text-wh"> Contact Us  <span>Everthing</span></h3>
								<h4 class="text-wh"> See Everything</h4>
								<a href="about.html" class="button-style mt-4">Read More</a>
								</div>
						</div>
					</div>
				</div>
			</li>
			
				
			
		</ul>
		
	</div>
</section>

<!-- end section -->

<!-- <div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 id="thh">Feature This App Click Here</h1>
			<p id="myDIV" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		
	</div>
	
</div>

<script>
$(document).ready(function(){
  $("#thh").click(function(){
    $("#myDIV").toggle("slow");
  });
});
</script>

<button>Toggle between hiding and showing the paragraphs</button>

<p>This is a paragraph with little content.</p>
<p>This is another small paragraph.</p> -->


<div class="container">
	<div class="col-md-12" style="margin-top: 20px;">
		<button class="btn"><i class="fa fa-bars" style="font-size: 26px;"></i><span  id="best" style="font-family: 'Fredericka the Great',cursive; margin-left:10px; font-size: 26px;">The best way to monitor your phone or tablet.</span></button>
		<hr>

		<p id="div1" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</div>


<div class="container">
	<div class="row">
		<div class="col-md-6"><img src="images/tracking.png" alt="tracking"></div>
		<div class="col-md-6" style="text-align: center;"><p id="best1" class="btn" style="text-align: center">Location Click Here</p>
			<p id="div2" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>

<hr>
	<!-- second -->
	<div class="row" style="margin-top: 30px;">
		
		<div class="col-md-6" style="text-align: center;"><p id="best2" class="btn" >SMS Click Here</p>
			<p id="div3" style="display: none; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="col-md-6"><img src="images/sms.png" style="width: 74%;" alt="sms"></div>
	</div>

<hr>
	<div class="row" style="margin-top: 30px;">
		<div class="col-md-6"><img src="images/view.png" alt="remote"></div>
		<div class="col-md-6" style="text-align: center;"><p id="best3" class="btn" style="text-align: center">Remote Control Click Here</p>
			<p id="div4" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>

<hr>
	<div class="row" style="margin-top: 30px;">
		
		<div class="col-md-6" style="text-align: center;"><p id="best4" class="btn" >Live Viewing Click Here</p>
			<p id="div5" style="display: none; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="col-md-6"><img src="images/live.png" style="width: 74%;" alt="sms"></div>
	</div>
	<!-- end second -->




</div>

<script>
$(document).ready(function(){
  $("#best").click(function(){
    $("#div1").toggle("slow");
  });
});

$(document).ready(function(){
  $("#best1").click(function(){
    $("#div2").toggle("slow");
  });
});

$(document).ready(function(){
  $("#best2").click(function(){
    $("#div3").toggle("slow");
  });
});

$(document).ready(function(){
  $("#best3").click(function(){
    $("#div4").toggle("slow");
  });
});
$(document).ready(function(){
  $("#best4").click(function(){
    $("#div5").toggle("slow");
  });
});
</script>

<!-- footer -->

	<?php include 'footer.php';?>



<!-- end footer -->
</body>
</html>
