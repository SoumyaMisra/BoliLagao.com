

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
$sql = "SELECT username FROM signup where email = '$email' and password = '$pass' ";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
	session_start();
	$_SESSION["us"]=$result;
	header('Location: http://localhost/bootstarp/js/onlinestore.html#');
} 
else {
	<html>
	<body>
		imap_alerts(""Invlid"")
	</body>
	</html>
}
$conn->close();
?>

