<?php  
 $connect = mysqli_connect("localhost", "phpmyadmin", "Admin@123", "fitness");   
 $query = "SELECT * FROM tbl_creators";  
 $result = mysqli_query($connect, $query);  
 ?>  


<!DOCTYPE html>
<html>
  <head>
    <title>DNX FITNESS SOLUTIONS</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="test.css" />



    <script src="scripts/nav.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
  <body>
	
	<div id="nav-placeholder">

	</div>

	<script>
	$(function(){
	  $("#nav-placeholder").load("header.php");
	});
	</script>
	
	<br /><br />  
           <div class="container-fluid" >  
                <h3 align="center">Creators MySQL Data using Ajax </h3>  
                <br />  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="70%">Employee Name</th>  
                               <th width="30%">View</th>  
                          </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["name"]; ?></td>  
                               <td><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn  btn-success view_data" /></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div> 
            <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>   
      </body>  
 </html>  

 <script>  
 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{employee_id:employee_id},  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>


    <footer>
      <p class="p-3 bg-dark text-white text-center">@DNX_FITNESS_SOLUTIONS</p>
    </footer>
    

    
  </body>
</html>
