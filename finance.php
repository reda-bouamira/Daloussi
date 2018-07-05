<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php include 'php/head.php' ?>
    </head>
    <body class="p-0">
        <header>
            <?php include 'php/header.php' ?>
        </header>
        <div class="my-content container-fluid p-0 my_finance">
            <div class="row justify-content-center my_header_title">
                <h2>Finance</h2>
            </div>
            <div class="row justify-content-center">
                <form class="needs-validation jumbotron col-9 pt-3">
                    <center><h3 class="pb-4">Application Form</h3></center>
                    <div class="my_personal_info">
                        <h5>Personal Information</h5>
                        <div class="ml-2">
                            <div class="form-row">
                                <div class="form-group col-lg-7">
                                    <label for="fname">First Name*</label>
                                    <input type="text" class="form-control" id="fname" required>
                                </div>
                                <div class="form-group col-lg-5">
                                    <label for="sname">Middle Name</label>
                                    <input type="text" class="form-control" id="sname">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <label for="lname">Last Name*</label>
                                    <input type="text" class="form-control" id="lname" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <label for="sin_num">SIN*</label>
                                    <input type="number" class="form-control" id="sin_num" required>
                                </div>
                                <div class="form-group col-lg-2">
                                    <label for="name_title">Title*</label>
                                    <select id="name_title" class="form-control">
                                        <option selected>Mr</option>
                                        <option>Miss</option>
                                        <option>Mrs</option>
                                        <option>Ms</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="bdate">Date of Birth*</label>
                                    <input type="date" class="form-control" id="bdate" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-2">
                                    <label for="status">Marital Status*</label>
                                    <select id="status" class="form-control">
                                        <option selected>Single</option>
                                        <option>Common Law</option>
                                        <option>Separated</option>
                                        <option>Married</option>
                                        <option>Divorced</option>
                                        <option>Widowed</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-2">
                                    <label for="dependants">No. Of Dependents*</label>
                                    <input type="number" class="form-control" id="dependants" required>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="h_phone">Home Phone</label>
                                    <input type="tel" class="form-control" id="h_phone" required>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="c_phone">Cell Phone*</label>
                                    <input type="tel" class="form-control" id="c_phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="my_current_address mt-4">
                            <h5>Current Address</h5>
                            <div class="form-row">
                                <div class="form-group col-lg-2">
                                    <label for="c_app_num">Apartment Number</label>
                                    <input type="number" class="form-control" id="c_app_num" required>
                                </div>
                                <div class="form-group col-lg-2">
                                    <label for="c_street_num">Street Number*</label>
                                    <input type="number" class="form-control" id="c_street_num" required>
                                </div>
                                <div class="form-group col-lg-8">
                                    <label for="c_street_name">Street Name*</label>
                                    <input type="text" class="form-control" id="c_street_name" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <label for="c_city">City*</label>
                                    <input type="text" class="form-control" id="c_city" required>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="c_province">Province*</label>
                                    <select id="c_province" class="form-control">
                                        <option>Alberta</option>
                                        <option>British Columbia</option>
                                        <option selected>Manitoba</option>
                                        <option>New Brunswick</option>
                                        <option>Newfoundland and Labrador</option>
                                        <option>Nova Scotia</option>
                                        <option>Ontario</option>
                                        <option>Prince Edward Island</option>
                                        <option>Quebec</option>
                                        <option>Saskatchewan</option>
                                        <option>Yukon</option>
                                        <option>Nunavut</option>
                                        <option>Northwest Territories</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-2">
                                    <label for="c_postal_code">Postal Code*</label>
                                    <input type="text" class="form-control" id="c_postal_code" required>
                                </div>
                                <div class="form-group col-lg-3">    
                                    <label for="c_address_since">Since*</label>
                                    <input type="date" class="form-control" id="c_address_since" required>
                                </div>
                            </div>
                        </div>
                        <div class="my_previous_address mt-4">
                            <h5>Previous Address (if less than 2 years)</h5>
                            <div class="form-row">
                                <div class="form-group col-lg-2">
                                    <label for="p_app_num">Apartment Number</label>
                                    <input type="number" class="form-control" id="p_app_num" required>
                                </div>
                                <div class="form-group col-lg-2">
                                    <label for="p_street_num">Street Number*</label>
                                    <input type="number" class="form-control" id="p_street_num" required>
                                </div>
                                <div class="form-group col-lg-8">
                                    <label for="p_street_name">Street Name*</label>
                                    <input type="text" class="form-control" id="p_street_name" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <label for="p_city">City*</label>
                                    <input type="text" class="form-control" id="p_city" required>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="p_province">Province*</label>
                                    <select id="p_province" class="form-control">
                                        <option>Alberta</option>
                                        <option>British Columbia</option>
                                        <option selected>Manitoba</option>
                                        <option>New Brunswick</option>
                                        <option>Newfoundland and Labrador</option>
                                        <option>Nova Scotia</option>
                                        <option>Ontario</option>
                                        <option>Prince Edward Island</option>
                                        <option>Quebec</option>
                                        <option>Saskatchewan</option>
                                        <option>Yukon</option>
                                        <option>Nunavut</option>
                                        <option>Northwest Territories</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-2">
                                    <label for="p_postal_code">Postal Code*</label>
                                    <input type="text" class="form-control" id="p_postal_code" required>
                                </div>
                                <div class="form-group col-lg-3">    
                                    <label for="p_address_since">Since*</label>
                                    <input type="date" class="form-control" id="p_address_since" required>
                                </div>
                            </div>
                        </div>
                        <div class="my_current_employment mt-4">
                            <h5>Current Employment</h5>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <label for="c_employer">Employer*</label>
                                    <input type="text" class="form-control" id="c_employer" required>
                                </div>  
                                <div class="form-group col-lg-4">
                                    <label for="c_occupation">Occupation*</label>
                                    <input type="text" class="form-control" id="c_occupation" required>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="c_emp_phone">Phone*</label>
                                    <input type="tel" class="form-control" id="c_emp_phone" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <label for="c_emp_address">Address*</label>
                                    <input type="text" class="form-control" id="c_emp_address" required>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="c_emp_city">City*</label>
                                    <input type="text" class="form-control" id="c_emp_city" required>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="c_emp_province">Province*</label>
                                    <select id="c_emp_province" class="form-control">
                                        <option>Alberta</option>
                                        <option>British Columbia</option>
                                        <option selected>Manitoba</option>
                                        <option>New Brunswick</option>
                                        <option>Newfoundland and Labrador</option>
                                        <option>Nova Scotia</option>
                                        <option>Ontario</option>
                                        <option>Prince Edward Island</option>
                                        <option>Quebec</option>
                                        <option>Saskatchewan</option>
                                        <option>Yukon</option>
                                        <option>Nunavut</option>
                                        <option>Northwest Territories</option>
                                    </select>
                                </div>                               
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-7">
                                    <label for="c_y_employed">Years Employed*</label>
                                    <input id="c_y_employed" type="number" class="form-control" min="1900" max="2018" step="1" value="2018">
                                </div>
                                <div class="form-group col-lg-5">
                                    <label for="c_m_employed">Months Employed*</label>
                                    <input id="c_m_employed" type="number" class="form-control" min="0" max="11" step="1" value="0">
                                </div>
                            </div>
                        </div>
                        <div class="my_previous_employment mt-4">
                            <h5>Previous Employment (if less than 2 years at current)</h5>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <label for="p_employer">Employer*</label>
                                    <input type="text" class="form-control" id="p_employer" required>
                                </div>  
                                <div class="form-group col-lg-4">
                                    <label for="p_occupation">Occupation*</label>
                                    <input type="text" class="form-control" id="p_occupation" required>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="p_emp_phone">Phone*</label>
                                    <input type="tel" class="form-control" id="p_emp_phone" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <label for="p_emp_address">Address*</label>
                                    <input type="text" class="form-control" id="p_emp_address" required>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="p_emp_city">City*</label>
                                    <input type="text" class="form-control" id="p_emp_city" required>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="p_emp_province">Province*</label>
                                    <select id="p_emp_province" class="form-control">
                                        <option>Alberta</option>
                                        <option>British Columbia</option>
                                        <option selected>Manitoba</option>
                                        <option>New Brunswick</option>
                                        <option>Newfoundland and Labrador</option>
                                        <option>Nova Scotia</option>
                                        <option>Ontario</option>
                                        <option>Prince Edward Island</option>
                                        <option>Quebec</option>
                                        <option>Saskatchewan</option>
                                        <option>Yukon</option>
                                        <option>Nunavut</option>
                                        <option>Northwest Territories</option>
                                    </select>
                                </div>                               
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-7">
                                    <label for="c_y_employed">Years Employed*</label>
                                    <input id="c_y_employed" type="number" class="form-control" min="1900" max="2018" step="1" value="2018">
                                </div>
                                <div class="form-group col-lg-5">
                                    <label for="c_m_employed">Months Employed*</label>
                                    <input id="c_m_employed" type="number" class="form-control" min="0" max="11" step="1" value="0">
                                </div>
                            </div>
                        </div>
                        <div class="my_financial_details mt-4">
                            <div class="form-row">
                                <div class="form-group">
                                    <label></label>
                                </div>
                                <div class="form-group">
                                    
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    
                                </div>
                                <div class="form-group">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer>
            <?php include 'php/footer.php'; ?>
        </footer>
    	<?php include 'php/scripts.php' ?>
    </body>
</html>