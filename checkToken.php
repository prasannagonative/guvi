<?php
error_reporting(0);
include "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $raw = json_decode(file_get_contents('php://input'), true);
    $session_id_key = $raw['session_id'];
    if($session_id_key == "") {
    	$session_id_key = rand();
    }
	$result = $conn->query("SELECT * FROM users where token is not null and token='".$session_id_key."'");
	$data = array();
	if($result->num_rows > 0) {
		$response = array('status' => 'success');
		echo json_encode($response);
	} else {
		$response = array('status' => 'Invalid');
		echo json_encode($response);
	}
	$conn -> close();		
}