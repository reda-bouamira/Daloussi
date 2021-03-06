<?php  
	$today = date("Y-m-d");

	$d = strtotime("+1 Year");
	$next_year = date("Y-m-d", $d);
?>


<div class="container-fluid my_service_home mt-0 pb-4" id="my_service_home_container">
	<div class="row justify-content-md-center py-5" id="my_service_home_row">
		<div class="col-lg-5 my_about_service">
			<h2 class="text-white py-2">Schedule Service:</h2>
			<p>If you’re looking for dealership that you can trust for maintenance, service or original parts for your vehicle, come to Daloussi Auto. Not only will you find competent technicians and cutting-edge facilities, but you will also get a level of customer service that ensures you’ll always leave our dealership with a smile.
			</p>
			<p>At Daloussi Auto, our technicians receive continuous training to ensure the quality of their work. Whether you need a simple oil change, routine maintenance or a more comprehensive repair, you can trust the service department.</p>
			<p>For more information on the parts and services offered at Daloussi Auto, contact us today or make an appointment using our online contact form.</p>
			</p>
		</div>
		<div class="col-lg-5 px-0 justify-content-md-center">
			<form class="px-0" action="php/service_submission.php" method="post">
				<div class="form-row justify-content-md-center my_service_home_form_input">
					<div class="form-group col-lg-9 form-group-lg mx-2 pt-2">
						<h6 class="p-0 m-0">Contact Info:</h6>
			      		<label for="my_service_name">Name:</label>
			      		<input type="text" class="form-control" id="my_service_name" placeholder="Full Name" required name="my_service_name">
			      		<label for="my_service_phone">Phone:</label>
			      		<input type="tel" class="form-control" id="my_service_phone" placeholder="xxx-xxx-xxxx" minlength="10" maxlength="12" required name="my_service_phone">
			      		<label for="my_service_email">Email:</label>
			      		<input type="email" class="form-control" id="my_service_email" placeholder="john-smith@example.com" required name="my_service_email">
			    	</div>
			    </div>
			    <div class="form-row justify-content-md-center my_service_home_form_input">
			    	<div class="form-group col-lg-9 mx-2">
			    		<h6 class="p-0 m-0">Appointment Info:</h6>
			    		<label for="my_service_reason">Service Reason:</label>
			      		<input type="text" class="form-control" id="my_service_reason" placeholder="Oil change & tire alignment..." required name="my_service_reason">
                        <label for="my_service_date">Service Date</label>
                        <input type="date" class="form-control py-3" id="my_service_date" min="<?= $today ?>" max="<?= $next_year ?>" required name="my_service_date">
						<label for="my_service_time">Service Time:</label>
						<select id="my_service_time" class="form-control" name="my_service_time">
							<option>Morning</option>
							<option>Mid-day</option>
							<option>Afternoon</option>
							<option>Evening</option>
						</select>
			    	</div>
			    </div>
			    <div class="form-row justify-content-md-center my_service_home_form_input">
			    	<div class="form-group col-lg-9 mx-2">
			    		<h6 class="p-0 m-0">Vehicle Info:</h6>
			    		<label for="my_service_car_year">Year:</label>
						<select id="my_service_car_year" class="form-control" name="my_service_car_year">
						</select>
						<label for="my_service_make">Make:</label>
			      		<input type="text" class="form-control" id="my_service_make" required name="my_service_make">
			      		<label for="my_service_model">Model:</label>
			      		<input type="text" class="form-control pb-2" id="my_service_model" required name="my_service_model">
			    	</div>
		    	</div>
		    	<div class="form-row justify-content-md-center my_service_home_form_input">
			    	<div class="form-group col-lg-9 mx-2">
		    			<button type="submit" class="btn btn-outline-light float-right">Submit</button>
	    			</div>
    			</div>
			</form>
		</div>
	</div>
</div>