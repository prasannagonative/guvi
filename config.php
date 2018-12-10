<?php
$conn = new mysqli("localhost", "root", '', "guvi");
if ($conn->connect_error) {
	die("Database connection established Failed..");
}

