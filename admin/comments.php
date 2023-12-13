    <?php
    session_start();

    if(isset($_SESSION['User']))
    {
            }
    else
    {
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
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

<?php
$servername = "localhost";
$username = "phpmyadmin";
$password = "Admin@123";
$dbname = "fitness";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = 'SELECT id, user, email, mobile, comments FROM userdata';
$result = $conn->query($sql);

   if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " <br> username: " . $row["user"]. "<br>email : " . $row["email"]. "<br> mobile: " . $row["mobile"]. " <br> comment: " . $row["comments"]. "<br>--------------------------------<br>";
  }
} else {
  echo "0 results";
}





?> 


    <footer>
      <p class="p-3 bg-dark text-white text-center">@DNX_FITNESS_SOLUTIONS</p>
    </footer>
    
  </body>
</html>
