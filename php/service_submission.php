<?php 
	$my_service_name = "Name: " . filter_input(INPUT_POST, 'my_service_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$my_service_phone = "Phone: " . filter_input(INPUT_POST, 'my_service_phone', FILTER_SANITIZE_NUMBER_INT);
	$my_service_email = "Email:" . filter_input(INPUT_POST, 'my_service_email', FILTER_SANITIZE_EMAIL);
	$my_service_reason = "Service Needed: " . filter_input(INPUT_POST, 'my_service_reason', 

FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$my_service_date = "Service Date Requested: " . filter_input(INPUT_POST, 'my_service_date', 

FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$my_service_time = "Service Time Requested: " . filter_input(INPUT_POST, 'my_service_time', 

FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$my_service_car_year = "Year: " . filter_input(INPUT_POST, 'my_service_car_year', 

FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$my_service_make = "Make: " . filter_input(INPUT_POST, 'my_service_make', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$my_service_model = "Model: " . filter_input(INPUT_POST, 'my_service_model', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

	$email_from = "daloussiautoweb@gmail.com";
	$email_subject = "Car Service Booking";
	$email_body = "Service Request: \n
					$my_service_name \n
					$my_service_phone \n
					$my_service_email \n
					$my_service_reason \n
					$my_service_date \n
					$my_service_time \n
					$my_service_car_year \n
					$my_service_make \n
					$my_service_model \n
Please check the service and contact the customer as required!";
	$email_to = "redabouamira6@gmail.com";
	$headers = "From: $email_from \r\n";
	
	mail($email_to, $email_subject, $email_body, $headers);

	// header("Location: ../index.php");

	include 'submission.php';
?>
