<?php
$uname=$_POST['uname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$degree=$_POST['degree'];
$dept=$_POST['dept'];
$college=$_POST['college'];
$city=$_POST['city'];

//json file process
$jsdata=array("Name"=>$uname,"Email"=>$email,"mobile"=>$mobile,"degree"=>$degree,"dept"=>$dept,"college"=>$college,"city"=>$city);

$json_data = json_encode($jsdata,JSON_PRETTY_PRINT);
$myfile = fopen("newnameuq.json", "w") or die("Unable to open file!");
fwrite($myfile, $json_data);
fclose($myfile);
//echo readfile("newnameuq.json");

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
$sql = "INSERT INTO details ( uname,email,mobile,degree,dept,college,city)
VALUES ('$uname','$email','$mobile','$degree','$dept','$college','$city')";

if ($conn->query($sql) === TRUE) {
	// header("location:index2.php?success=<p>signup successfully</p>");
	 echo "<script>
	 alert('updated successfully');
	   window.location.href='update.html';
	   </script>";
 

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
