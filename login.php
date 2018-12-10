<?php
include "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $raw = json_decode(file_get_contents('php://input'), true);
    $email = $raw['email'];
    $password = $raw['password'];
	$result = $conn->query("SELECT * FROM users where email='".$email."'");
	$data = array();
	if($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$password_from_db = $row["password"];
		if($password == $password_from_db) {
			$token = md5(rand());
			$sql = "UPDATE users SET token='".$token."' WHERE email='".$email."'";
			$conn->query($sql);
			$response = array('status' => 'success', 'msg' => 'Logged In Successfully, we are redirecting you!', 'session_id_key' => $token);
			echo json_encode($response);
		} else {
			$response = array('status' => 'Password is not Matching');
			echo json_encode($response);
		}
	} else {
		$response = array('status' => 'Email Id is not in our database');
		echo json_encode($response);
	}
	$conn -> close();		
}