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
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <title>DNX FITNESS ADMIN</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="test.css" />
    <script src="scripts/googleap1.js"></script>
    <script src="scripts/boot.js"></script>
    <script src="scripts/cloud.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>    

  </head>
  <body >
	<div id="nav-placeholder">

	</div>

	<script>
	$(function(){
	  $("#nav-placeholder").load("header.php");
	});
	</script>
	
	
	
	<section class="my-5">
      <div class="py-5">
        <h3 class="text-center">Broadcast</h3>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
           <h2>MESSAGES</h2>
           	<div id="previous">

	</div>

	<script>
	$(function(){
	  $("#previous").load("oldbroadcast.php");
	});
	</script>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <h2>NEW BROADCAST</h2>
            <form action="broadcastprocess.php" method="post">
          <div class="form-group">
          
          <textarea class="form-control" name= "broadcast"></textarea> 
		<br>
          
          <button type="submit" class="btn btn-success" name= "submit"   id="submit"/>Submit</button>

          </div>
        </form>
      </div>
    </section>
    <footer>
      <p class="p-3 bg-dark text-white text-center">@DNX_FITNESS_SOLUTIONS</p>
    </footer>
    
  </body>
</html>

            

