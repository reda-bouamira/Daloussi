<?php 
	$cars_xml = simplexml_load_file('xml/cars.xml');

?>

<div class="container">
	<?php foreach ($cars_xml as $car): ?>
	<div class="row border justify-content-center">
		<div class="col-sm-5 pl-0">
			<img class="img-fluid border" src="xml/car_pics/<?= $car->pics ?>/main.jpg">
		</div>
		<div class="col-sm-7 pl-5">
			<div class="row pt-3">
				<div class="pl-0 col-sm-9">
					<h3><?= $car->year ?> <?= $car->make ?> <?= $car->model ?> <?= $car->trim ?></h3>
				</div>
				<div class="col-lg-3">
					<a href="#link" class="btn btn-info" role="button">View Details</a>
				</div>
			</div>
			<div class="row my_info_text_header pt-3">Price:&nbsp;<span class="text-primary">$<?= number_format((float)$car->price, 2) ?></span></div>
			<div class="row text-secondary my_comment">Plus GST, PST & Dealership Fees</div>
			<div class="row my_info_text_header py-3">Kilometers: <?= number_format((float)$car->km) ?> km</div>
			<div class="row pt-3">
				<div class="col-sm">
					<table class="table table-striped my_car_info_table">
						<tbody>
	    					<tr>
	      						<td class="text-secondary">Body Type:</td>
	      						<td><?= $car->bodytype ?></td>
	    					</tr>
	    					<tr>
	      						<td class="text-secondary">Engine:</td>
	      						<td><?= $car->engine ?></td>
	    					</tr>
	    					<tr>
	      						<td class="text-secondary">Exterior Colour:</td>
	      						<td><?= $car->colour ?></td>
	    					</tr>
	  					</tbody>
					</table>
				</div>
				<div class="col-sm">
					<table class="table table-striped my_car_info_table">
						<tbody>
	    					<tr>
	      						<td class="text-secondary">Transmission:</td>
	      						<td><?= $car->transmission ?></td>
	    					</tr>
	    					<tr>
	      						<td class="text-secondary">Fuel:</td>
	      						<td><?= $car->fuel ?></td>
	    					</tr>
	    					<tr>
	      						<td class="text-secondary">Drivetrain:</td>
	      						<td><?= $car->drivetrain ?></td>
	    					</tr>
	  					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
</div>