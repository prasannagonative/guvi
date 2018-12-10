<?php
session_start();
$uname=$_POST['user'];
$pwd=$_POST['pass'];

$servername="localhost";

$username="root";
$password="";
$dbname="guvi";




$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql= "SELECT * FROM login WHERE uname = '$uname' AND pwd = '$pwd' ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){

$_SESSION['name']=$username;
header('Location: update/store.php');
}else{
 echo "<script>
	 alert('check username and password');
	   window.location.href='index.php';
	   </script>";
}

?>
