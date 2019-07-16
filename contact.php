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

  <!-- =======================wow animation -->
 <!--  <link rel="stylesheet" href="css/animate.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

  <!-- ======================end wow animation -->

      <!-- animation -->
     
    <script src="js/wow.js"></script>
              <script>
              new WOW().init();
              </script>
    <link rel="stylesheet" href="css/animate.css">
       <!-- end -->


	<style>




/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  /*border-bottom: 1px solid black;*/
  border:none;
  margin-top: 6px;
  margin-bottom: 16px;
  border-bottom: 1px solid #ccc;
 /* resize: vertical;*/
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */


/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

.contact_banner{
			background: url(images/contact.jpg);
            background-position-x: 0%;
            background-position-y: 0%;
            background-size: auto;
            background-size: cover;
            background-position: center;
            height: auto;

}



	</style>

</head>
<body>

<!-- header -->
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
				<li class=""><a href="Feature.php">Features</a></li>
				<li class=""><a href="services.html">How To Install</a></li>
				<li class=""><a href="gallery.html">Demo</a></li>
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
				<div class="contact_banner">
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
<!-- //banner -->

<!-- contact form -->
<br><br>
<div class="container contact_banner1">
  <div style="text-align:center">
    <h2 style=" font-family: 'Fredericka the Great',cursive;">Contact Us</h2>
    <p style=" font-family: 'Fredericka the Great',cursive;">Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row" >

    <div class="column " >
      <img src="images/banner1.jpg" style="width:100%"  class="wow slideInLeft" data-wow-duration="2s"  ><br><br>
      <span style=" font-family: 'Fredericka the Great',cursive; ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
    </div>
    <div class="column">
      <form action="/action_page.php" class="wow slideInRight" data-wow-duration="2s">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Email</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>


        <br><br>
        <br><br>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
<br><br>





<!-- lll -->

  
<!-- lll -->
<!-- end contact form -->
<!-- footer -->

	<?php include 'footer.php';?>


<!-- end footer -->
</body>
</html>