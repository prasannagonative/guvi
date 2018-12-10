<?php
$uname=$_POST['uname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$degree=$_POST['degree'];
$dept=$_POST['dept'];
$college=$_POST['college'];
$city=$_POST['city'];

$myObj->name = $uname;
$myObj->email = $email;
$myObj->mobile = $mobile;
$myObj->degree = $degree;
$myObj->dept = $dept;
$myObj->college = $college;
$myObj->city = $city;

$myJSON = json_encode($myObj);

echo $myJSON;
?>