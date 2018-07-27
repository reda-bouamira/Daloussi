<?php 
	$my_service_name = filter_input(INPUT_POST, 'my_service_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$my_service_phone = filter_input(INPUT_POST, 'my_service_phone', FILTER_SANITIZE_NUMBER_INT);
	$my_service_email = filter_input(INPUT_POST, 'my_service_email', FILTER_SANITIZE_EMAIL);
	$my_service_reason = filter_input(INPUT_POST, 'my_service_reason', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$my_service_date = filter_input(INPUT_POST, 'my_service_date', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$my_service_time = filter_input(INPUT_POST, 'my_service_time', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$my_service_car_year = filter_input(INPUT_POST, 'my_service_car_year', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$my_service_make = filter_input(INPUT_POST, 'my_service_make', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$my_service_model = filter_input(INPUT_POST, 'my_service_model', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

	echo $my_service_model;

	$email_from = "reda-bouamira@outlook.fr";
	$email_subject = "Car Service Booking";
	$email_body = "Here is the email";
	$email_to = "reda-bouamira@outlook.com";
	$headers = "From: $email_from \r\n";

	mail($email_to, $email_subject, $email_body, $headers);
?>

