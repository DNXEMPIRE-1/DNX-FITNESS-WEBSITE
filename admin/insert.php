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
	
	<section class="my-5">
      <div class="py-5">
        <h3 class="text-center">Add Admin</h3>
      </div>
      <div class="w-50 m-auto">
        <form action="admindata.php" method="post">
          <div class="form-group">
          <label>Username</label> 
          <input type="text" name="username" id= "username" autocomplete="off" class="form-control" /> 
          
          
          <label>Password</label> 
          <input type="password" name="password" id="password" onkeyup='check();' autocomplete="off" class="form-control" /> 
          
          
          
          <label>Confirm password</label> 
          <input type="password" name="confirm_password" id="confirm_password" onkeyup='check();' autocomplete="off" class="form-control" />  
            <span id='message'></span>
          
          <button type="submit" class="btn btn-success" name= "submit"   id="submit"/>Submit</button>
          <script>
          var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value     ) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching password';
        document.getElementById("submit").disabled = false;
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'recheck';
    document.getElementById("submit").disabled = true;
  }
}
          </script>

          </div>
        </form>
      </div>
    </section>
    <footer>
      <p class="p-3 bg-dark text-white text-center">@DNX_FITNESS_SOLUTIONS</p>
    </footer>
    
  </body>
</html>
