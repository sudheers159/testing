<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
.cont {
  position: relative;
  width: 100%;
}
.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

.cont:hover .overlay {
  height: 50%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.col-md-4{
  text-align:center;
}
</style>
</head>
<body>

<div >
    <div class="container">

        <div class="col-md-4">
            <h2>Slide in Overlay from the Bottom</h2>
            <p>Hover over the image to see the effect.</p>

            <div class="cont">
            <img src="images/banner1.jpg" alt="Avatar" class="image">
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>
            </div>
        </div>

                <div class="col-md-4">
            <h2>Slide in Overlay from the Bottom</h2>
            <p>Hover over the image to see the effect.</p>

            <div class="cont">
            <img src="images/banner1.jpg" alt="Avatar" class="image">
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>
            </div>
        </div>

                <div class="col-md-4">
            <h2>Slide in Overlay from the Bottom</h2>
            <p>Hover over the image to see the effect.</p>

            <div class="cont">
            <img src="images/banner1.jpg" alt="Avatar" class="image">
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>
            </div>
        </div>

      
    </div>       


<!-- +++++++++++++++++++++++++++++ -->

<div class="container" style="margin-top: 584px; background-color: #f6f6f6;">
      <h2 style="text-align: center;">Testimonial From Costomer</h2>  
      <br><br>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
          <div class="carousel-inner">
          <div class="item active">
        <div class="row">

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
    <!--Card-->
    <div class="card testimonial-card">
      <!--Background color-->
      <div class="card-up info-color"></div>
      <!--Avatar-->
      <div class="avatar mx-auto white">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle img-fluid">
      </div>
      <div class="card-body">
      <!--Name-->
        <h4 class="font-weight-bold mb-4">John Doe</h4>
        <hr>
        <!--Quotation-->
        <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet eos
          adipisci, consectetur adipisicing elit.</p>
      </div>
    </div>
    <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
    <!--Card-->
    <div class="card testimonial-card">
      <!--Background color-->
      <div class="card-up blue-gradient">
      </div>
      <!--Avatar-->
      <div class="avatar mx-auto white">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded-circle img-fluid">
      </div>
      <div class="card-body">
      <!--Name-->
      <h4 class="font-weight-bold mb-4">Anna Aston</h4>
      <hr>
      <!--Quotation-->
      <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Neque cupiditate assumenda in
        maiores repudiandae mollitia architecto.</p>
      </div>
    </div>
    <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6">
    <!--Card-->
    <div class="card testimonial-card">
      <!--Background color-->
      <div class="card-up indigo"></div>
      <!--Avatar-->
      <div class="avatar mx-auto white">
      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle img-fluid">
      </div>
      <div class="card-body">
      <!--Name-->
      <h4 class="font-weight-bold mb-4">Maria Kate</h4>
      <hr>
      <!--Quotation-->
      <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Delectus impedit saepe officiis
        ab aliquam repellat rem unde ducimus.</p>
      </div>
    </div>
    <!--Card-->
    </div>
    <!--Grid column-->

    </div>
          </div>

          <div class="item">
        <div class="row">

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
    <!--Card-->
    <div class="card testimonial-card">
      <!--Background color-->
      <div class="card-up info-color"></div>
      <!--Avatar-->
      <div class="avatar mx-auto white">
      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle img-fluid">
      </div>
      <div class="card-body">
      <!--Name-->
      <h4 class="font-weight-bold mb-4">John Doe</h4>
      <hr>
      <!--Quotation-->
      <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet eos
        adipisci, consectetur adipisicing elit.</p>
      </div>
    </div>
    <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
    <!--Card-->
    <div class="card testimonial-card">
      <!--Background color-->
      <div class="card-up blue-gradient">
      </div>
      <!--Avatar-->
      <div class="avatar mx-auto white">
      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded-circle img-fluid">
      </div>
      <div class="card-body">
      <!--Name-->
      <h4 class="font-weight-bold mb-4">Anna Aston</h4>
      <hr>
      <!--Quotation-->
      <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Neque cupiditate assumenda in
        maiores repudiandae mollitia architecto.</p>
      </div>
    </div>
    <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6">
    <!--Card-->
    <div class="card testimonial-card">
      <!--Background color-->
      <div class="card-up indigo"></div>
      <!--Avatar-->
      <div class="avatar mx-auto white">
      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle img-fluid">
      </div>
      <div class="card-body">
      <!--Name-->
      <h4 class="font-weight-bold mb-4">Maria Kate</h4>
      <hr>
      <!--Quotation-->
      <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Delectus impedit saepe officiis
        ab aliquam repellat rem unde ducimus.</p>
      </div>
    </div>
    <!--Card-->
    </div>
    <!--Grid column-->

    </div>
          </div>
        
          <div class="item">
        <div class="row">

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
    <!--Card-->
    <div class="card testimonial-card">
      <!--Background color-->
      <div class="card-up info-color"></div>
      <!--Avatar-->
      <div class="avatar mx-auto white">
      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle img-fluid">
      </div>
      <div class="card-body">
      <!--Name-->
      <h4 class="font-weight-bold mb-4">John Doe</h4>
      <hr>
      <!--Quotation-->
      <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet eos
        adipisci, consectetur adipisicing elit.</p>
      </div>
    </div>
    <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
    <!--Card-->
    <div class="card testimonial-card">
      <!--Background color-->
      <div class="card-up blue-gradient">
      </div>
      <!--Avatar-->
      <div class="avatar mx-auto white">
      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded-circle img-fluid">
      </div>
      <div class="card-body">
      <!--Name-->
      <h4 class="font-weight-bold mb-4">Anna Aston</h4>
      <hr>
      <!--Quotation-->
      <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Neque cupiditate assumenda in
        maiores repudiandae mollitia architecto.</p>
      </div>
    </div>
    <!--Card-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-6">
    <!--Card-->
    <div class="card testimonial-card">
      <!--Background color-->
      <div class="card-up indigo"></div>
      <!--Avatar-->
      <div class="avatar mx-auto white">
      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle img-fluid">
      </div>
      <div class="card-body">
      <!--Name-->
      <h4 class="font-weight-bold mb-4">Maria Kate</h4>
      <hr>
      <!--Quotation-->
      <p class="dark-grey-text mt-4"><i class="fas fa-quote-left pr-2"></i>Delectus impedit saepe officiis
        ab aliquam repellat rem unde ducimus.</p>
      </div>
    </div>
    <!--Card-->
    </div>
    <!--Grid column-->

    </div>
          </div>
        </div>
  </div>

</div>

<!-- end crusel -->

<div class="container">
      <u><h2 style="text-align: center;margin-top: 40px">Always know what's going on</h2></u>
  <div class="row">

    <div class="col-md-4">
        <figure class="snip0013">
          <img src="images/child.jpg" alt="sample32"/>
          <div>
            <a href="#"><span>Safe Your Children</span></a>
            
          </div>      
        </figure>
    </div>
    <div class="col-md-4">
        <figure class="snip0013">
          <img src="images/family.jpg" alt="sample33" style="height: 207px;" />
          <div>
            <a href="#"><span>Safe Our Family</span></a>
          </div>      
        </figure>
    </div>
    <div class="col-md-4">
        <figure class="snip0013">
          <img src="images/empl.jpg" alt="sample34"/>
          <div>
            <a href="#"><span>Monitoring Own Employee</span></a>
          </div>      
        </figure>
    </div>
  </div>

</div>


<!-- footer -->

<div class="container-fluid footer-image">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <!-- <img src="images/banner5.jpg"> -->
        <div class="text-center">
          <!-- <iframe width="420" height="300" style="margin-top: 10px;" 
            src="https://www.youtube.com/watch?v=q0LRHkWyNEA">
          </iframe> -->

          <iframe width="100%" height="auto"  style="margin-top: 10px;" src="https://www.youtube.com/embed/q0LRHkWyNEA?start=13" ></iframe>
          <!-- <iframe width="420" height="300" style="margin-top: 10px; src="https://www.youtube.com/embed/q0LRHkWyNEA" ></iframe> -->
          <br>
          <button type="button"class="btn btn-primary"style="margin-top: 10px;">Demo</button>


        </div>
      </div>

      <div class="col-md-6">
        <!-- <img src="images/banner5.jpg"> -->
        <div class="text-center">
            <!-- <iframe width="420" height="300" style="margin-top: 10px;"
            src="https://www.youtube.com/watch?v=q0LRHkWyNEA"> </iframe>-->
          <iframe width="100%" height="auto" style="margin-top: 10px;" src="https://www.youtube.com/embed/q0LRHkWyNEA?start=13" ></iframe>    
          
          <br>
          <button type="button"class="btn btn-primary"style="margin-top: 10px;">Install App</button>
        </div>
      </div>
    </div>
  </div> 
</div>

<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        hiii
      </div>

      <div class="col-md-4">
        hiii
      </div>

      <div class="col-md-4">
        hiii
      </div>
    </div>

  </div>
</footer>
<!-- +++++++++++++++++++++++++++++++++ -->
</div>
</body>
</html>
