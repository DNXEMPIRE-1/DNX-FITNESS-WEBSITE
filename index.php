<!DOCTYPE html>
<html>
  <head>
    <title>DNX FITNESS SOLUTIONS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="test.css" />

    <script src="scripts/googleap1.js"></script>
    <script src="scripts/boot.js"></script>
    <script src="scripts/cloud.js"></script>
    <script src="scripts/nav.js"></script>
    <script src="scripts/timeajax.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>    
  </head>
  <body>
	
	<div id="nav-placeholder">

	</div>

	<script>
	$(function(){
	  $("#nav-placeholder").load("header.php");
	});
	</script>
    <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators"></ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/carosoul1.jpg" alt="car3" width="1100" height="500" />
        <div class="carousel-caption">
          <h3>Eat Fit</h3>
          <p>Respect your body. It’s the only one you get.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/carosoul2.jpg" alt="car1" width="1100" height="500" />
        <div class="carousel-caption">
          <h3>Enjoy Fit</h3>
          <p>What hurts today makes you stronger tomorrow.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/carosoul3.jpg" alt="car2" width="1100" height="500" />
        <div class="carousel-caption">
          <h3>Live FIT</h3>
          <p>Well done is better than well said</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev"></a> 
    <a class="carousel-control-next" href="#demo" data-slide="next"></a></div>
    <section class="my-5">
      <div class="py-5">
        <h3 class="text-center">About Us</h3>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <video width="100%" height="100%" controls="0">
            <source src="videos/gridvideo1.mp4" type="video/mp4" />Your browser does not support the video tag.</video>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <h2>Vision</h2>
            <p>Pioneer a sea change in the mindset of popular exercise culture to where the primary objective of exercise is to
            build and maintain muscular strength.</p>
            <h2>Mission</h2>
            <p>Maximize our clients’ strength, without compromising their health or risking injury. The InForm Fitness team will
            provide a no-nonsense, sustainable regimen of strength training enabling our clients to overcome barriers to health and
            fitness, and fulfill their physical potential throughout their lifetime..</p>
            <a href="about.php" class="btn btn-success">Click Here For More Information</a>
          </div>
        </div>
      </div>
    </section>
    <section class="my-5">
      <div class="py-5">
        <h3 class="text-center">Shopping</h3>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="images/product1.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Product 1</h4>
                <p class="card-text">great for fitness.</p>
                <a href="https://rb.gy/gqis5z" class="btn btn-success" target="_blank">Click to buy</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="images/product2.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Product 2</h4>
                <p class="card-text">great for fitness.</p>
                <a href="https://rb.gy/fspzeu" class="btn btn-success" target="_blank">Click to buy</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="images/product3.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Product 3</h4>
                <p class="card-text">great for fitness.</p>
                <a href="https://rb.gy/psc59n" class="btn btn-success" target="_blank">Click to buy</a>
              </div>
            </div>
          </div>
			<a href="shopping.php" class="btn btn-success">Click Here For More Products</a>
        </div>
      </div>
    </section>
    <section class="my-5">
      <div class="py-5">
        <h3 class="text-center">Contact Us</h3>
      </div>
      <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
          <div class="form-group">
          <label>Name</label> 
          <input type="text" name="username" autocomplete="off" class="form-control" /> 
          <label>Email</label> 
          <input type="text" name="email" autocomplete="off" class="form-control" /> 
          <label>Phone Number</label> 
          <input type="text" name="mobile" autocomplete="off" class="form-control" /> 
          <label>Concern</label> 
          <textarea class="form-control" name= "comment"></textarea> 
          <button type="submit" class="btn btn-success">Submit</button></div>
        </form>
      </div>

    </section>
    <footer>
      <p class="p-3 bg-dark text-white text-center"> @DNX_FITNESS_SOLUTIONS</p>
      
    </footer>
    
  </body>
</html>
