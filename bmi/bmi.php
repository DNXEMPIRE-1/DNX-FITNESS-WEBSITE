<!DOCTYPE html>
        <html>
           <head>
        <title>BMI Calculator</title>
		<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="bootcss.css" />
    <script src="scripts/googleap1.js"></script>
    <script src="scripts/boot.js"></script>
    <script src="scripts/cloud.js"></script>
             
        <script type="text/javascript">
          
            function computeBMI() {
                var height = Number(document.getElementById("height").value);
                var heightunits = document.getElementById("heightunits").value;
                var weight = Number(document.getElementById("weight").value);
                var weightunits = document.getElementById("weightunits").value;
        
        
                if (heightunits == "inches") height /= 39.3700787;
                if (weightunits == "lb") weight /= 2.20462;
        
        
                var BMI = Math.round(weight / Math.pow(height, 2) * 10000);
        
                document.getElementById("output").innerText = Math.round(BMI * 100) / 100;
        
                var output = Math.round(BMI * 100) / 100
                if (output < 18.5)
                    document.getElementById("comment").innerText = "Underweight";
                else if (output >= 18.5 && output <= 25)
                    document.getElementById("comment").innerText = "Normal";
                else if (output >= 25 && output <= 30)
                    document.getElementById("comment").innerText = "Obese";
                else if (output > 30)
                    document.getElementById("comment").innerText = "Overweight";
            }
        </script>
         </head>
         <body>
		 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">DNX FITNESS SOLUTIONS</a>
	  <button class= "navbar-toggler" type= "button" data-toggle= "collapse" data-target= "#navbarSupportedContent"
	  aria-expanded= "false" aria-label = "Toggle Navigation">
	  <span class= "navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home 
            <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="locality.php">Locality</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shopping.php">Shopping</a>
          </li>
        </ul>
      </div>
    </nav>
        <h1>Body Mass Index Calculator</h1>
        <p>Enter your height: <input type="text" id="height"/>
            <select type="multiple" id="heightunits">
                <option value="metres" selected="selected">metres</option>
                <option value="inches">inches</option>
            </select>
             </p>
        <p>Enter your weight: <input type="text" id="weight"/>
            <select type="multiple" id="weightunits">
                <option value="kg" selected="selected">kilograms</option>
                <option value="lb">pounds</option>
            </select>
        </p>
        <input type="submit" value="computeBMI" onclick="computeBMI();">
        <h1>Your BMI is: <span id="output">?</span></h1>
        
        <h2>This means you are: <span id="comment"> ?</span> </h2> 
             <footer>
      <p class="p-3 bg-dark text-white text-center">@DNX_FITNESS_SOLUTIONS</p>
    </footer>
		 </body>
        
        </html>