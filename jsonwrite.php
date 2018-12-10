<?php
$uname=$_POST['uname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$degree=$_POST['degree'];
$dept=$_POST['dept'];
$college=$_POST['college'];
$city=$_POST['city'];

$jsdata=array("Name"=>$uname,"Email"=>$email,"mobile"=>$mobile,"degree"=>$degree,"dept"=>$dept,"college"=>$college,"city"=>$city);

$json_data = json_encode($jsdata,JSON_PRETTY_PRINT);
//$php_array_data=json_decode($json_data,JSON_PRETTY_PRINT);

// echo $json_data;
// echo'<pre>';
// print_r($php_array_data);

$myfile = fopen("newnameuq.json", "w") or die("Unable to open file!");
fwrite($myfile, $json_data);
fclose($myfile);
echo readfile("newnameuq.json");

?>