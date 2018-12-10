<?php
session_start();
if(!isset($_SESSION['name']))
{
    
    echo "<script>
	 alert('You Need to Login First');
	   window.location.href='../index.php';
	   </script>";
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  	<div class="float-right mr-5">
  		<a href="update.html" class="ml-5 pl-5 pr-5 btn btn-outline-danger">Back</a>
  	</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guvi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo '<div class="container mt-5">';
	echo '<h1 class="font-weight-bold display-4 mt-5 text-red"> DETAILS</h1>';
echo '<table class="table table-dark table-striped">';

    	echo "<thead>";
    	echo "<tr>";
    	echo "<td>". "No" ."</td>";
    	echo "<td>". "Name"."</td>";
    	echo "<td>". "Email" ."</td>";
    	echo "<td>". "Mobile"."</td>";
    	echo "<td>". "Degree"."</td>";
    	echo "<td>". "Dept"."</td>";
    	echo "<td>". "College"."</td>";
    	echo "<td>"."City"."</td>";
    	echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
    
    	echo "<tr>";
    	echo "<td>". $row["no"]."</td>";
    	echo "<td>". $row["uname"]."</td>";
    	echo "<td>". $row["email"]."</td>";
    	echo "<td>". $row["mobile"]."</td>";
    	echo "<td>". $row["degree"]."</td>";
    	echo "<td>". $row["dept"]."</td>";
    	echo "<td>". $row["college"]."</td>";
    	echo "<td>". $row["city"]."</td>";
    	echo "</tr>";
    	}
    echo "</tbody>";
echo "</table>";
echo "</div>";
       
    
} else {
    echo "0 results";
}

$conn->close();
?> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
