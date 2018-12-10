<?php
include "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $raw = json_decode(file_get_contents('php://input'), true);
    $email = $raw['email'];
    $password = filter_var($raw['password'], FILTER_SANITIZE_STRING);
    $name = filter_var($raw['name'], FILTER_SANITIZE_STRING);
    $mobile = filter_var($raw['mobile'], FILTER_SANITIZE_STRING);
    $address = filter_var($raw['address'], FILTER_SANITIZE_STRING);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    	if(($password != "" && $password != " ") && ($name != "" && $name != " ") && ($mobile != "" && $mobile != " ") && ($address != "" && $address != " ")) {
    		$sql = "INSERT INTO users (email, password, name, mobile, address)
			VALUES ('$email', '$password', '$name', '$mobile', '$address')";
			if ($conn->query($sql) === TRUE) {
				$array_data = array(
					'email' => $email,
					'password' => $password,
					'name' => $name,
					'mobile' => $mobile,
					'address' => $address
				);

				$myfile = fopen("".$email.".json", "w") or die("Unable to open file!");
				$txt = json_encode($array_data, JSON_PRETTY_PRINT);
				fwrite($myfile, $txt);
				fclose($myfile);

				$response = array('status' => 'success', 'msg' => 'Registered Successfully, Wait we are redirecting you!');
				echo json_encode($response);
			} else {
			    $response = array('status' => "Error: " . $sql ."<br>".$conn->error);
			    echo json_encode($response);
			}
    	} else {
    		$response = array('status' => 'Kindly input all the data');
			echo json_encode($response);
    	}
	} else {
	    $response = array('status' => 'Email Id is Invalid');
		echo json_encode($response);
	}
	
	$conn -> close();		
}