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
    <?php
    session_start();

    if(isset($_SESSION['User']))
    {
        echo ' Welcome ' . $_SESSION['User'].'<br/>';
    }
    else
    {
        header("location:index.php");
    }

?>


    <section class="my-5">
      <div class="py-5">
        <h3 class="text-center">Manage</h3>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="images/comment.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Comments</h4>
                <p class="card-text">Comments by Users</p>
                <a href="comments.php" class="btn btn-success" target="_blank">Click to see</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="images/broadcast.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Broadcast</h4>
                <p class="card-text">Broadcast message</p>
                <a href="broadcast.php" class="btn btn-success" target="_blank">Broadcast</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
              <img class="card-img-top" src="images/addadmin.jpg" alt="Card image" />
              <div class="card-body">
                <h4 class="card-title">Add Admin</h4>
                <p class="card-text">Add a user like you</p>
                <a href="insert.php" class="btn btn-success" target="_blank">Add admin</a>
              </div>
            </div>
          </div>
			
        </div>
      </div>
    </section>
    <section>
    
    
    <script type="text/javascript">
function AjaxFunction()
{
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
		  try
   			 		{
   				 httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    				}
  			catch (e)
    				{
    			try
      		{
      		httpxml=new ActiveXObject("Microsoft.XMLHTTP");
     		 }
    			catch (e)
      		{
      		alert("Your browser does not support AJAX!");
      		return false;
      		}
    		}
  }
function stateck() 
    {
    if(httpxml.readyState==4)
      {
document.getElementById("msg").innerHTML=httpxml.responseText;
document.getElementById("msg").style.background='#f1f1f1';
      }
    }
	var url="testtime.php";
url=url+"?sid="+Math.random();
httpxml.onreadystatechange=stateck;
httpxml.open("GET",url,true);
httpxml.send(null);
tt=timer_function();
  }

///////////////////////////
function timer_function(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('AjaxFunction();',refresh)
}

</script>

</head>
<body>

<div id="msg"></div>
<br>
<input type=button value='Get Server Time' onclick="timer_function();">

<center>
    
    
    
    
    
    
    
    
    </section>

    <footer>
      <p class="p-3 bg-dark text-white text-center">@DNX_FITNESS_SOLUTIONS</p>
    </footer>
    
  </body>
</html>

