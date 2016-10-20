<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "minor1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

<?php
$uname=$_POST['username'];
$email=$_POST['email'];
$passwrd=$_POST['password'];
$passwrdcnf=$_POST['password_confirm'];
if($passwrd!=$passwrdcnf){
echo "please confirm the password";
}

/*echo $uname.'<br />';
echo $email.'<br />';
echo $passwrd.'<br />';
echo $passwrdcnf.'<br />';
*/

$sql = "INSERT INTO login (username,password,email)
VALUES ('$uname', '$passwrd', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>