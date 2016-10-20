

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "minor1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$email=$_POST['signin_email'];
$pass=$_POST['signin_password'];
$sql = "SELECT user_name FROM signup where email = '$email' and password = '$pass' ";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
	echo 'success';
	}
else {
	echo '0 results';
}
$conn->close();
?>

