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
      </head>
  <body>
		<div id="nav-placeholder">

	</div>

	<script>
	$(function(){
	  $("#nav-placeholder").load("header.php");
	});
	</script>
	<section class="my-5">
      <div class="py-5">
        <h3 class="text-center">Services</h3>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="images/bmi.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Body Mass Index</h4>
                <p class="card-text">BMI is a measurement of a person's leanness or corpulence based on their height and weight, 
				and is intended to quantify tissue mass. 
				It is widely used as a general indicator of whether a person has a healthy body weight for their height.</p>
                <a href="bmi.php" class="btn btn-success" target="_self">Click to calculate</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="images/bmr.png" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Basal Metabolic Rate</h4>
                <p class="card-text">BMR is the amount of energy needed while resting in a temperate environment when the digestive system is inactive. 
				It is the equivalent of figuring out how much gas an idle car consumes while parked. the number of calories you'd burn if you stayed in bed all day</p>
                <a href="bmr.php" class="btn btn-success" target="_self">Click to calculate</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="images/diet.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Diet</h4>
                <p class="card-text">In nutrition, diet is the sum of food consumed by a person or other organism.
				The word diet often implies the use of specific intake of nutrition for health or weight-management reasons. 
				Each person holds some food preferences or some food taboos. </p>
                <a href="diet.php" class="btn btn-success" target="_self">Click For sample Diet</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
