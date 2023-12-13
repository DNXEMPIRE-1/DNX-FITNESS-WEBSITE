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
$user = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];
$sql = "INSERT INTO userdata (user, email, mobile, comments)
VALUES ('$user' , '$email' , '$mobile' , '$comment')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('location:index.php');
?> 
