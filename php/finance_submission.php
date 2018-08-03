<?php
	$fname = "First Name: " . filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$sname = "Middle Name: " . filter_input(INPUT_POST, 'sname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$lname = "Last Name: " . filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$sin_num = "SIN Number: " . filter_input(INPUT_POST, 'sin_num', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$name_title = "Title: " . filter_input(INPUT_POST, 'name_title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$bdate = "Birthdate: " . filter_input(INPUT_POST, 'bdate', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$status = "Status: " . filter_input(INPUT_POST, 'status', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$dependants = "Dependants: " . filter_input(INPUT_POST, 'dependants', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$h_phone = "Home Phone: " . filter_input(INPUT_POST, 'h_phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_phone = "Cell Phone: " . filter_input(INPUT_POST, 'c_phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$personal_information= array($fname,$sname,$lname,$sin_num,$name_title,$bdate,$status,$dependants,$h_phone,$c_phone);


	$co_fname = "Co-Signer First Name: " . filter_input(INPUT_POST, 'co_fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_sname = "Co-Signer Middle Name: " . filter_input(INPUT_POST, 'co_sname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_lname = "Co-Signer Last Name: " . filter_input(INPUT_POST, 'co_lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_sin_num = "Co-Signer SIN Number: " . filter_input(INPUT_POST, 'co_sin_num', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_name_title = "Co-Signer Title: " . filter_input(INPUT_POST, 'co_name_title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_bdate = "Co-Signer Birthdate: " . filter_input(INPUT_POST, 'co_bdate', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_status = "Co-Signer Status: " . filter_input(INPUT_POST, 'co_status', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_dependants = "Co-Signer Dependants: " . filter_input(INPUT_POST, 'co_dependants', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_h_phone = "Co-Signer Home Phone: " . filter_input(INPUT_POST, 'co_h_phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_c_phone = "Co-Signer  Cell Phone: " . filter_input(INPUT_POST, 'co_c_phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_signer_information = array($co_fname,$co_sname,$co_lname,$co_sin_num,$co_name_title,$co_bdate,$co_status,$co_dependants,$co_h_phone,$co_c_phone);

	$c_app_num = "Current Appartment Number: " . filter_input(INPUT_POST, 'c_app_num', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_street_num = "Current Street nmuber: " . filter_input(INPUT_POST, 'c_street_num', FILTER_SANITIZE_FULL_SPECIAL_CHARS);	
	$c_street_name = "Current Street Name: " . filter_input(INPUT_POST, 'c_street_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_city = "Current City: " . filter_input(INPUT_POST, 'c_city', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_province = "Current  Province: " . filter_input(INPUT_POST, 'c_province', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_postal_code = "Current  Postal Code: " . filter_input(INPUT_POST, 'c_postal_code', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_address_since = "Have been in this address since: " . filter_input(INPUT_POST, 'c_address_since', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$current_address = array($c_app_num,$c_street_num,$c_street_name,$c_city,$c_province,$c_postal_code,$c_address_since);

	$p_app_num = "Previous Appartment Number: " . filter_input(INPUT_POST, 'p_app_num', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_street_num = "Previous Street Number: " . filter_input(INPUT_POST, 'p_street_num', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_street_name = "Previous Street Name: " . filter_input(INPUT_POST, 'p_street_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_city = "Previous  City: " . filter_input(INPUT_POST, 'p_city', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_province = "Previous  Province: " . filter_input(INPUT_POST, 'p_province', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_postal_code = "Previous  Postal Code: " . filter_input(INPUT_POST, 'p_postal_code', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_address_since = "Have been in this address since: " . filter_input(INPUT_POST, 'p_address_since', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$previous_address = array($p_app_num,$p_street_num,$p_street_name,$p_city,$p_province,$p_postal_code,$p_address_since);

	$c_employer = "Current Empoyer: " . filter_input(INPUT_POST, 'c_employer', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_occupation = "Current  Occupation: " . filter_input(INPUT_POST, 'c_occupation', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_emp_phone = "Current Employer Phone: " . filter_input(INPUT_POST, 'c_emp_phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_emp_address = "Current Employer Address: " . filter_input(INPUT_POST, 'c_emp_address', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_emp_city = "Current  Employer City: " . filter_input(INPUT_POST, 'c_emp_city', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_emp_province = "Current Employer Province: " . filter_input(INPUT_POST, 'c_emp_province', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_y_employed = "Years Employed: " . filter_input(INPUT_POST, 'c_y_employed', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_m_employed = "Months Employed: " . filter_input(INPUT_POST, 'c_m_employed', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_employer = "Previous Employer: " . filter_input(INPUT_POST, 'p_employer', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_occupation = "Previous Occupation: " . filter_input(INPUT_POST, 'p_occupation', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_emp_phone = "Previous Employer Phone: " . filter_input(INPUT_POST, 'p_emp_phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_emp_address = "Previous Employer Address: " . filter_input(INPUT_POST, 'p_emp_address', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_emp_city = "Previous Employer City: " . filter_input(INPUT_POST, 'p_emp_city', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_emp_province = "Previous Employer Province: " . filter_input(INPUT_POST, 'p_emp_province', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_y_employed = "Years Employed: " . filter_input(INPUT_POST, 'p_y_employed', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_m_employed = "Months Employed: " . filter_input(INPUT_POST, 'p_m_employed', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$employer_information = array($c_employer,$c_occupation,$c_emp_phone,$c_emp_address,$c_emp_city,$c_emp_province,$c_y_employed,$c_m_employed,$p_employer,$p_occupation,$p_emp_phone,$p_emp_address,$p_emp_city,$p_emp_province,$p_y_employed,$p_m_employed); 

	$gross_monthly_income = "Gross Monthly Income: " . filter_input(INPUT_POST, 'gross_monthly_income', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$other_monthly_income = "Other Monthly Income: " . filter_input(INPUT_POST, 'other_monthly_income', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$other_monthly_income_desc = "Other Monthly Income Description: " . filter_input(INPUT_POST, 'other_monthly_income_desc', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$total_monthly_income = "Total Monthly Income: " . filter_input(INPUT_POST, 'total_monthly_income', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$income_information = array($gross_monthly_income,$other_monthly_income,$other_monthly_income_desc,$total_monthly_income);

	$home_status = "Home Status: " . filter_input(INPUT_POST, 'home_status', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$landl_mort_holder = "Landlord/Mortgage Owner: " . filter_input(INPUT_POST, 'landl_mort_holder', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$monthly_payment = "Monthly Payment: " . filter_input(INPUT_POST, 'monthly_payment', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$market_value = "Market value: " . filter_input(INPUT_POST, 'market_value', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$mort_balance = "Mortgage Balance: " . filter_input(INPUT_POST, 'mort_balance', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$mort_amount = "Mortgage Amount: " . filter_input(INPUT_POST, 'mort_amount', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$mortgage_information = array($home_status,$landl_mort_holder,$monthly_payment,$market_value,$mort_balance,$mort_amount);

	$Personal_info = "Personal information:"
	foreach ($personal_information as $info) {
		$Personal_info .= "\n $info";
	}


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

