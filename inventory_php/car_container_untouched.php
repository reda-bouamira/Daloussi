<?php 
	$cars_xml = simplexml_load_file('xml/cars.xml');
?>

<div class="container">
	<?php for ($i=0; $i < 10; $i++): ?>
	<div class="row border justify-content-center">
		<div class="col-sm-5 pl-0">
			<img class="img-fluid border" src="img/alpha.jpg">
		</div>
		<div class="col-sm-7 pl-5">
			<div class="row pt-3">
				<div class="pl-0 col-sm-9">
					<h3>2016 Alpha Romeo Giulietta</h3>
				</div>
				<div class="col-lg-3">
					<a href="#link" class="btn btn-info" role="button">View Details</a>
				</div>
			</div>
			<div class="row my_info_text_header pt-3">Price:&nbsp;<span class="text-primary">$25,900</span></div>
			<div class="row text-secondary my_comment">Plus GST, PST & Dealership Fees</div>
			<div class="row my_info_text_header py-3">Kilometers: 50,000 km</div>
			<div class="row pt-3">
				<div class="col-sm">
					<table class="table table-striped my_car_info_table">
						<tbody>
	    					<tr>
	      						<td class="text-secondary">Body Type:</td>
	      						<td>Hatchback</td>
	    					</tr>
	    					<tr>
	      						<td class="text-secondary">Engine:</td>
	      						<td>2.0L 4cyl</td>
	    					</tr>
	    					<tr>
	      						<td class="text-secondary">Exterior Colour:</td>
	      						<td>Silver</td>
	    					</tr>
	  					</tbody>
					</table>
				</div>
				<div class="col-sm">
					<table class="table table-striped my_car_info_table">
						<tbody>
	    					<tr>
	      						<td class="text-secondary">Transmission:</td>
	      						<td>Manual</td>
	    					</tr>
	    					<tr>
	      						<td class="text-secondary">Fuel:</td>
	      						<td>Gasoline</td>
	    					</tr>
	    					<tr>
	      						<td class="text-secondary">Drivetrain:</td>
	      						<td>Front-wheel drive (FWD)</td>
	    					</tr>
	  					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php endfor; ?>
</div>