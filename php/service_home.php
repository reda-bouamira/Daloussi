<div class="container-fluid my_service_home mt-0 mt-0">
	<div class="row pl-5">
		<h3 class="text-white">Schedule Service:</h3>
	</div>
	<form>
		<div class="form-row justify-content-md-center">
			<div class="form-group col-md-2 form-group-lg">
				<h6 class="p-0 m-0">Contact Info:</h6>
	      		<label for="my_service_name">Name:</label>
	      		<input type="text" class="form-control" id="my_service_name" placeholder="Full Name">
	      		<label for="my_service_phone">Phone:</label>
	      		<input type="tel" class="form-control" id="my_service_phone" placeholder="Phone Number">
	      		<label for="my_service_email">Email</label>
	      		<input type="email" class="form-control" id="my_service_email" placeholder="Email">
	    	</div>
	    	<div class="form-group col-md-2">
	    		<h6 class="p-0 m-0">Appointment Info:</h6>
				<div id="datetimepicker4" class="input-append">
					<label for="my_service_date">Service Date:</label>
					<input class="form-control form-control-lg" data-format="yyyy-MM-dd" type="text"></input>
					<span class="add-on">
							<i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
					</span>	
				</div>
				<label for="my_service_time">Service Time:</label>
				<select id="my_service_time" class="form-control">
					<option>Morning</option>
					<option>Mid-day</option>
					<option>Afternoon</option>
					<option>Evening</option>
				</select>
	    	</div>
	    	<div class="form-group col-md-2 ml-5">
	    		<h6 class="p-0 m-0">Vehicle Info:</h6>
	    		<label for="my_service_car_year">Year:</label>
				<select id="my_service_car_year" class="form-control">
				</select>
				<label for="my_service_make">Make:</label>
	      		<input type="text" class="form-control" id="my_service_make">
	      		<label for="my_service_model">Model:</label>
	      		<input type="text" class="form-control" id="my_service_model">
	    	</div>
    	</div>
	</form>
</div>