<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php include 'php/head.php' ?>
    </head>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5b61b3a0df040c3e9e0c2ca8/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <body class="p-0">
        <header>
            <?php include 'php/header.php' ?>
        </header>
        <div class="my-content container-fluid p-0 my_finance">
            <div class="row justify-content-center my_header_title">
                <h2>Finance</h2>
            </div>
            <div class="row justify-content-center">
                <form class="needs-validation jumbotron col-9 pt-3" id="finance_form">
                    <center><h3 class="pb-4">Application Form</h3></center>
                    <div class="my_personal_info">
                        <h5>Personal Information</h5>
                        <div class="ml-2">
                            <div class="form-row">
                                <div class="form-group col-lg-7">
                                    <label for="fname">First Name*</label>
                                    <input type="text" class="form-control" id="fname" name="fname" required>
                                </div>
                                <div class="form-group col-lg-5">
                                    <label for="sname">Middle Name</label>
                                    <input type="text" class="form-control" name="sname" id="sname">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <label for="lname">Last Name*</label>
                                    <input type="text" class="form-control" name="lname" id="lname" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <label for="sin_num">SIN*</label>
                                    <input type="number" class="form-control" name="sin_num" id="sin_num" required>
                                </div>
                                <div class="form-group col-lg-2">
                                    <label for="name_title">Title*</label>
                                    <select id="name_title" name="name_title" class="form-control">
                                        <option selected>Mr</option>
                                        <option>Miss</option>
                                        <option>Mrs</option>
                                        <option>Ms</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="bdate">Date of Birth*</label>
                                    <input type="date" class="form-control" name="bdate" id="bdate" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-2">
                                    <label for="status">Marital Status*</label>
                                    <select id="status" name="status" class="form-control">
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
                                    <input type="number"  name="dependants" class="form-control" id="dependants">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="h_phone">Home Phone</label>
                                    <input type="tel" class="form-control" name="h_phone" id="h_phone" placeholder="(XXX) XXX-XXXX" maxlength="14">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="c_phone">Cell Phone*</label>
                                    <input type="tel" class="form-control" id="c_phone" name="c_phone" placeholder="(XXX) XXX-XXXX" maxlength="14" required>
                                </div>
                            </div>
                        </div>
                        <div class="ml-2">
                            <div class="form-row">
                                <div class="form-group col-lg-7">
                                    <label for="co_fname">First Name(Co-Signer)</label>
                                    <input type="text" class="form-control" id="co_fname" name="co_fname">
                                </div>
                                <div class="form-group col-lg-5">
                                    <label for="co_sname">Middle Name(Co-Signer)</label>
                                    <input type="text" class="form-control" name="co_sname" id="co_sname">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <label for="co_lname">Last Name(Co-Signer)</label>
                                    <input type="text" class="form-control" name="co_lname" id="co_lname" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <label for="co_sin_num">SIN(Co-Signer)</label>
                                    <input type="number" class="form-control" name="co_sin_num" id="co_sin_num">
                                </div>
                                <div class="form-group col-lg-2">
                                    <label for="co_name_title">Title(Co-Signer)</label>
                                    <select id="co_name_title" name="co_name_title" class="form-control">
                                        <option selected>Mr</option>
                                        <option>Miss</option>
                                        <option>Mrs</option>
                                        <option>Ms</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="co_bdate">Date of Birth(Co-Signer)</label>
                                    <input type="date" class="form-control" name="co_bdate" id="co_bdate">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-2">
                                    <label for="co_status">Marital Status(Co-Signer)</label>
                                    <select id="co_status" name="co_status" class="form-control">
                                        <option selected>Single</option>
                                        <option>Common Law</option>
                                        <option>Separated</option>
                                        <option>Married</option>
                                        <option>Divorced</option>
                                        <option>Widowed</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="co_dependants">No. Of Dependents(Co-Signer)</label>
                                    <input type="number" class="form-control" name="co_dependants" id="co_dependants">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="co_h_phone">Home Phone(Co-Signer)</label>
                                    <input type="tel" class="form-control" id="co_h_phone" name="co_h_phone" placeholder="(XXX) XXX-XXXX" maxlength="14">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="co_c_phone">Cell Phone(Co-Signer)</label>
                                    <input type="tel" class="form-control" name="co_c_phone" id="co_c_phone" placeholder="(XXX) XXX-XXXX" maxlength="14">
                                </div>
                            </div>
                        </div>
                        <div class="my_current_address mt-4">
                            <h5>Current Address</h5>
                            <div class="form-row">
                                <div class="form-group col-lg-2">
                                    <label for="c_app_num">Apartment Number</label>
                                    <input type="number" class="form-control" name="c_app_num" id="c_app_num">
                                </div>
                                <div class="form-group col-lg-2">
                                    <label for="c_street_num">Street Number*</label>
                                    <input type="number" class="form-control" name="c_street_num" id="c_street_num" required>
                                </div>
                                <div class="form-group col-lg-8">
                                    <label for="c_street_name">Street Name*</label>
                                    <input type="text" class="form-control" name="c_street_name" id="c_street_name" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <label for="c_city">City*</label>
                                    <input type="text" class="form-control" name="c_city" id="c_city" required>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="c_province">Province*</label>
                                    <select id="c_province" name="c_province" class="form-control">
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
                                    <input type="text" class="form-control" name="c_postal_code" id="c_postal_code" required>
                                </div>
                                <div class="form-group col-lg-3">    
                                    <label for="c_address_since">Since*</label>
                                    <input type="date" class="form-control" name="c_address_since" id="c_address_since" required>
                                </div>
                            </div>
                        </div>
                        <div class="my_previous_address mt-4">
                            <h5>Previous Address (if less than 2 years)</h5>
                            <div class="form-row">
                                <div class="form-group col-lg-2">
                                    <label for="p_app_num">Apartment Number</label>
                                    <input type="number" class="form-control" name="p_app_num" id="p_app_num">
                                </div>
                                <div class="form-group col-lg-2">
                                    <label for="p_street_num">Street Number*</label>
                                    <input type="number" class="form-control" name="p_street_num" id="p_street_num" >
                                </div>
                                <div class="form-group col-lg-8">
                                    <label for="p_street_name">Street Name*</label>
                                    <input type="text" class="form-control" name="p_street_name" id="p_street_name" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <label for="p_city">City*</label>
                                    <input type="text" class="form-control" name="p_city" id="p_city" >
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="p_province">Province*</label>
                                    <select id="p_province" name="p_province" class="form-control">
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
                                    <input type="text" class="form-control" name="p_postal_code" id="p_postal_code" >
                                </div>
                                <div class="form-group col-lg-3">    
                                    <label for="p_address_since">Since*</label>
                                    <input type="date" class="form-control" name="p_address_since" id="p_address_since" >
                                </div>
                            </div>
                        </div>
                        <div class="my_current_employment mt-4">
                            <h5>Current Employment</h5>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <label for="c_employer">Employer*</label>
                                    <input type="text" class="form-control" name="c_employer" id="c_employer" required>
                                </div>  
                                <div class="form-group col-lg-4">
                                    <label for="c_occupation">Occupation*</label>
                                    <input type="text" class="form-control" name="c_occupation" id="c_occupation" required>
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="c_emp_phone">Phone*</label>
                                    <input type="tel" class="form-control" name="c_emp_phone" id="c_emp_phone" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <label for="c_emp_address">Address*</label>
                                    <input type="text" class="form-control" name="c_emp_address" id="c_emp_address" required>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="c_emp_city">City*</label>
                                    <input type="text" class="form-control" name="c_emp_city" id="c_emp_city" required>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="c_emp_province">Province*</label>
                                    <select name="c_emp_province" id="c_emp_province" class="form-control">
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
                                    <input name="c_y_employed" id="c_y_employed" type="number" class="form-control" min="0" max="100" step="1" value="0" required>
                                </div>
                                <div class="form-group col-lg-5">
                                    <label for="c_m_employed">Months Employed*</label>
                                    <input name="c_m_employed" id="c_m_employed" type="number" class="form-control" min="0" max="11" step="1" value="0" required>
                                </div>
                            </div>
                        </div>
                        <div class="my_previous_employment mt-4">
                            <h5>Previous Employment (if less than 2 years at current)</h5>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <label for="p_employer">Employer*</label>
                                    <input type="text" class="form-control" name="p_employer" id="p_employer">
                                </div>  
                                <div class="form-group col-lg-4">
                                    <label for="p_occupation">Occupation*</label>
                                    <input type="text" class="form-control" name="p_occupation" id="p_occupation">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="p_emp_phone">Phone*</label>
                                    <input type="tel" class="form-control" name="p_emp_phone" id="p_emp_phone">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <label for="p_emp_address">Address*</label>
                                    <input type="text" class="form-control" name="p_emp_address" id="p_emp_address">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="p_emp_city">City*</label>
                                    <input type="text" class="form-control" name="p_emp_city" id="p_emp_city">
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="p_emp_province">Province*</label>
                                    <select id="p_emp_province" name="p_emp_province" class="form-control">
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
                                    <label for="p_y_employed">Years Employed*</label>
                                    <input id="p_y_employed" name="p_y_employed" type="number" class="form-control" min="0" max="100" step="1" value="0">
                                </div>
                                <div class="form-group col-lg-5">
                                    <label for="p_m_employed">Months Employed*</label>
                                    <input name="p_m_employed" id="p_m_employed" type="number" class="form-control" min="0" max="11" step="1" value="0">
                                </div>
                            </div>
                        </div>
                        <div class="my_financial_details mt-4">
                            <h5>Financial Details</h5>
                            <div class="form-row">
                                <div class="form-group col-lg-3">
                                    <label for="gross_monthly_income">Gross Monthly Income*</label>
                                    <input name="gross_monthly_income" id="gross_monthly_income" type="number" class="form-control" min="0" step="10" required>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="other_monthly_income">Other Monthly Income*</label>
                                    <input name="other_monthly_income" id="other_monthly_income" type="number" class="form-control" min="0">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="other_monthly_income_desc">Description of Other</label>
                                    <input name="other_monthly_income_desc" id="other_monthly_income_desc" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-8">
                                    <label for="total_monthly_income">Total Monthly Income*</label>
                                    <input name="total_monthly_income" id="total_monthly_income" type="number" class="form-control" min="0" required>
                                </div>
                            </div>
                        </div>
                        <div class="my_financial_obligations mt-4">
                            <h5>Financial Obligations</h5>
                            <div class="form-row">
                                <div class="form-group col-lg-2">
                                    <label for="home_status">Home Status*</label>
                                    <select name="home_status" id="home_status" class="form-control">
                                        <option selected>Renting</option>
                                        <option>Owning</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="landl_mort_holder">Landlord/Mortgage Holder</label>
                                    <input name="landl_mort_holder" id="landl_mort_holder" type="text" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="monthly_payment">Monthly Payment*</label>
                                    <input name="monthly_payment" id="monthly_payment" type="number" class="form-control" min="0" step="10" required>
                                </div>
                                <div class="form-group col-lg-3">
                                    <label for="market_value">Market value</label>
                                    <input name="market_value" id="market_value" type="number" class="form-control" min="0" step="1000">
                                </div>
                                <div class="form-group col-lg-5">
                                    <label for="mort_balance">Mortgage Balance</label>
                                    <input name="mort_balance" id="mort_balance" type="number" class="form-control" min="0" step="1000">
                                </div>
                                <div class="form-group col-lg-5">
                                    <label for="mort_amount">Original Mortgage Amount</label>
                                    <input name="mort_amount" id="mort_amount" type="number" class="form-control" min="0" step="1000">
                                </div>
                            </div>
                        </div>
                        <div class="my_yes_no_aggreements">
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <div class="text-danger">Have you claimed bankruptcy in the last 7 years?*</div>
                                </div>
                                <div class="form-group col-lg-2">
                                    <label class="radio-inline pr-2">
                                        <input class="mr-1" type="radio" name="bankruptcy" value="yes">Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input class="mr-1" type="radio" name="bankruptcy" value="no" checked>No
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <div class="text-danger">Are you currently past due on payments?*</div>
                                </div>    
                                <div class="form-group col-lg-2">
                                    <label class="radio-inline pr-2">
                                        <input class="mr-1" type="radio" name="past_due_payments" value="yes">Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input class="mr-1" type="radio" name="past_due_payments" value="no" checked>No
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-4">
                                    <div class="text-danger">Do you have any collection outstanding?*</div>
                                </div>    
                                <div class="form-group col-lg-2">
                                    <label class="radio-inline pr-2">
                                        <input class="mr-1" type="radio" name="collection" value="yes">Yes
                                    </label>
                                    <label class="radio-inline">
                                        <input class="mr-1" type="radio" name="collection" value="no" checked>No
                                    </label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="text-dark">By accepting below means that all the information I have provided is to the best of my knowledge truthful. I hereby authorize EPIC Dealer Solutions Ltd. and credit lenders to obtain and exchange and release my credit report, personal information, and make any necessary inquiries regarding our loan application for the purpose of interested lenders providing funds on our behalf for our conditional vehicle purchase. I authorize those lending institutions who approve this loan application and are willing to provide funds on our behalf to forward a copy of the final loan agreement and all other relevant documents to EPIC Dealer Solutions or to the automobile dealership listed on page one of this application. </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="checkbox-inline"><input class="mr-2" type="checkbox" value="accept_aggreement" required>I accept*</label>
                                </div>
                            </div>
                        </div>
                        <div class="my_submit">
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div>Please double check your information before proceeding. Once you submit the form, we will respond to your request as soon as possible.</div>
                                </div>
                            </div>
                            <div class="form-row justify-content-end">
                                <div class="form-group col-lg-2">
                                    <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
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
        <script type="text/javascript" src="js/finance.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
<script>
    </body>
</html>