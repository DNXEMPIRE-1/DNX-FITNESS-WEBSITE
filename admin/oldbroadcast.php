 <?php
 session_start();

    if(isset($_SESSION['User']))
    {

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
$sql = 'SELECT id, broadcaster, message FROM broadcast';
$result = $conn->query($sql);

   if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " <br> broadcaster: " . $row["broadcaster"]. "<br>Message : " . $row["message"]. "<br>--------------------------------<br>";
  }
} else {
  echo "0 results";
}




            }
    else
    {
        header("location:index.php");
    }

?> 
