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
$user = $_POST['username'];
$password = $_POST['password'];



$sql = "INSERT INTO admindata (email, password)
VALUES ('$user' , '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('location:insert.php');


            }
    else
    {
        header("location:index.php");
    }

?> 
