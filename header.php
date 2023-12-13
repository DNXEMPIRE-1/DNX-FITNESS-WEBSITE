<!--
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
          <li class="nav-item">
            <a class="nav-link" href="creatorsajax.php">Creators</a>
          </li>
        </ul>
      </div>
    </nav>
    
    -->
<div class="topnav" 
id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="services.php">Services</a>
  <a href="about.php">About</a>
  
<a href="locality.php">Locality</a>
  <a href="shopping.php">Shopping</a>
    <a href="creatorsajax.php">Creators</a>
  
  <a href="javascript:void(0);" 
  class="icon" onclick="myFunction()">
    <i 
  class="fa fa-bars"></i>
  </a>
</div> 

<script>
  /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
  </script>
  <style>
  /* 
  Add a black background color to the top navigation */
.topnav {
  background-color: #333;

    overflow: hidden;
}

/* 
Style the links inside the navigation bar */
.topnav a {
  
  float: left;
  display: block;
  
  color: #f2f2f2;
  text-align: center;
  
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */

  .topnav a:hover {
  background-color: #ddd;
  
  color: black;
}

/* Add an active class to highlight the current page 
  */
.topnav a.active {
  background-color: #4CAF50;
  
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */

  .topnav .icon {
  display: none;
} 

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
  </style>
