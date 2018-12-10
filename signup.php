<?php
$uname=$_POST['name'];
$mailid=$_POST['email'];
$pwd=$_POST['pass'];

$servername="localhost";

$username="root";
$password="";
$dbname="guvi";
// $pwd=md5($pwd);


$conn = new mysqli($servername, $username, $password,$dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO login ( uname,pwd,email)
VALUES ('$uname', '$pwd','$mailid')";

if ($conn->query($sql) === TRUE) {
	// header("location:index2.php?success=<p>signup successfully</p>");
	 echo "<script>
	 alert('signup successfully');
	   window.location.href='index.php';
	   </script>";
 

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
