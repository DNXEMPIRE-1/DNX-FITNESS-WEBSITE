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
$sql = "select * from creators";
$results= $conn->query($sql);
$data = array();
while ($row = mysqli_fetch_assoc($results))
{
	$data = $row;
}

echo json_encode($data);


?> 
