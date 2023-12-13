<head>
	<title>Calorie Calculator</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="style.css" />

    <link href="https://fonts.googleapis.com/css2?family=Krona+One&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="valid.css" />
    <script src="scripts/googleap1.js"></script>
    <script src="scripts/boot.js"></script>
    <script src="scripts/cloud.js"></script>
        <script src="scripts/nav.js"></script>
	<link rel="stylesheet" type="text/css" href="bmr.css">
</head>
<body>
	<div id="nav-placeholder">

	</div>

	<script>
	$(function(){
	  $("#nav-placeholder").load("header.php");
	});
	</script>
	<h1>Calorie Calculator</h1>
	<div>
		Gender <i class="fa fa-venus-mars" aria-hidden="true"></i>:
		<select name="gender">
			<option value="0" name="male">Male</option>
			<option value="1" name="female">Female</option>
		</select>
	</div>

	<div class="form-group row">
	  <div class="measurements col-xs-2 center_div">
	      <label>Age <i class="fa fa-hourglass-start" aria-hidden="true"></i></label><input type="text" name="age" class="form-control">
	      <label>Height <i class="fa fa-male" aria-hidden="true"></i></label><input type = "text" name="height" class="form-control">
	      <label>Weight <i class="fa fa-anchor" aria-hidden="true"></i></label><input type="text" name="weight" class="form-control">
	  </div>
	</div>




	<h2>How much do you exercise?</h2>
	<div class="bottom">
		Intensity <i class="fa fa-line-chart" aria-hidden="true"></i>:
		<select name="level">
			<option value="0">Light</option>
			<option value="1">Moderate</option>
			<option value="2">High</option>
			<option value="3">Extremely</option>
		</select>
	</div>


	<div class="measurements">
		<button type="button" class="divider btn" id="calculate">Calculate BMI</button>
		<button type="button" class="divider btn" id="reset">Reset</button>
	</div>



	<div>
		<span id="daily"></span>
	</div>

	<script type="text/javascript" src="bmr.js"></script>



<footer>
      <p class="p-3 bg-dark text-white text-center">@DNX_FITNESS_SOLUTIONS</p>
    </footer>


</body>
</html>
