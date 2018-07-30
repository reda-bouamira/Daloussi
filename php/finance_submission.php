<?php
	$fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$sname = filter_input(INPUT_POST, 'sname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$sin_num = filter_input(INPUT_POST, 'sin_num', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$name_title = filter_input(INPUT_POST, 'name_title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$bdate = filter_input(INPUT_POST, 'bdate', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$dependants = filter_input(INPUT_POST, 'dependants', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$h_phone = filter_input(INPUT_POST, 'h_phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_phone = filter_input(INPUT_POST, 'c_phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

	$co_fname = filter_input(INPUT_POST, 'co_fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_sname = filter_input(INPUT_POST, 'co_sname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_lname = filter_input(INPUT_POST, 'co_lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_sin_num = filter_input(INPUT_POST, 'co_sin_num', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_name_title = filter_input(INPUT_POST, 'co_name_title', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_bdate = filter_input(INPUT_POST, 'co_bdate', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_status = filter_input(INPUT_POST, 'co_status', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_dependants = filter_input(INPUT_POST, 'co_dependants', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_h_phone = filter_input(INPUT_POST, 'co_h_phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$co_c_phone = filter_input(INPUT_POST, 'co_c_phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

	$c_app_num = filter_input(INPUT_POST, 'c_app_num', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_street_num = filter_input(INPUT_POST, 'c_street_num', FILTER_SANITIZE_FULL_SPECIAL_CHARS);	
	$c_street_name = filter_input(INPUT_POST, 'c_street_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_city = filter_input(INPUT_POST, 'c_city', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_province = filter_input(INPUT_POST, 'c_province', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_postal_code = filter_input(INPUT_POST, 'c_postal_code', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_address_since = filter_input(INPUT_POST, 'c_address_since', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

	$p_app_num = filter_input(INPUT_POST, 'p_app_num', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_street_num = filter_input(INPUT_POST, 'p_street_num', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_street_name = filter_input(INPUT_POST, 'p_street_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_city = filter_input(INPUT_POST, 'p_city', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_province = filter_input(INPUT_POST, 'p_province', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_postal_code = filter_input(INPUT_POST, 'p_postal_code', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_address_since = filter_input(INPUT_POST, 'p_address_since', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

	$c_employer = filter_input(INPUT_POST, 'c_employer', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_occupation = filter_input(INPUT_POST, 'c_occupation', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_emp_phone = filter_input(INPUT_POST, 'c_emp_phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_emp_address = filter_input(INPUT_POST, 'c_emp_address', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_emp_city = filter_input(INPUT_POST, 'c_emp_city', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_emp_province = filter_input(INPUT_POST, 'c_emp_province', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_y_employed = filter_input(INPUT_POST, 'c_y_employed', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$c_m_employed = filter_input(INPUT_POST, 'c_m_employed', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_employer = filter_input(INPUT_POST, 'p_employer', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_occupation = filter_input(INPUT_POST, 'p_occupation', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_emp_phone = filter_input(INPUT_POST, 'p_emp_phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_emp_address = filter_input(INPUT_POST, 'p_emp_address', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_emp_city = filter_input(INPUT_POST, 'p_emp_city', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_emp_province = filter_input(INPUT_POST, 'p_emp_province', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_y_employed = filter_input(INPUT_POST, 'p_y_employed', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$p_m_employed = filter_input(INPUT_POST, 'p_m_employed', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

	$gross_monthly_income = filter_input(INPUT_POST, 'gross_monthly_income', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$other_monthly_income = filter_input(INPUT_POST, 'other_monthly_income', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$other_monthly_income_desc = filter_input(INPUT_POST, 'other_monthly_income_desc', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$total_monthly_income = filter_input(INPUT_POST, 'total_monthly_income', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

	$home_status = filter_input(INPUT_POST, 'home_status', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$landl_mort_holder = filter_input(INPUT_POST, 'landl_mort_holder', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$monthly_payment = filter_input(INPUT_POST, 'monthly_payment', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$market_value = filter_input(INPUT_POST, 'market_value', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$mort_balance = filter_input(INPUT_POST, 'mort_balance', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$mort_amount = filter_input(INPUT_POST, 'mort_amount', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>