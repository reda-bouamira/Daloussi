<?php 
	// $cars_xml = simplexml_load_file('xml/cars.xml');

	// $json = json_encode($cars_xml);

	// $cars = json_decode($json,TRUE);

	require('php/select_cars.php');

	print_r($cars);

	$selected_cars = array();

	if (isset($_GET['sort'])) {
        $sort_option = filter_input(INPUT_GET, 'sort', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if ($sort_option == 'lyear') {
			usort($cars['car'], function($a, $b) {
			    return $a['year'] <=> $b['year'];
			});
		} elseif ($sort_option == 'hyear') {
			usort($cars['car'], function($a, $b) {
			    return $b['year'] <=> $a['year'];
			});
		} elseif ($sort_option == 'hprice') {
			usort($cars['car'], function($a, $b) {
			    return $b['price'] <=> $a['price'];
			});
		} elseif ($sort_option == 'lprice') {
			usort($cars['car'], function($a, $b) {
			    return $a['price'] <=> $b['price'];
			});
		}
    }

    if (isset($_GET['bodytype'])) {
    	$bodytype = filter_input(INPUT_GET, 'bodytype', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    	foreach ($cars as $car) {
    		foreach ($car as $car_spec) {
    			if (strtolower($car_spec['bodytype']) == strtolower($bodytype)) {
    			$selected_cars[] = $car_spec;
    			}
    		}
    	}
	} elseif (isset($_GET['year'])) {
    	$year = filter_input(INPUT_GET, 'year', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    	foreach ($cars as $car) {
    		foreach ($car as $car_spec) {
    			if ($car_spec['year'] == $year) {
    			$selected_cars[] = $car_spec;
    			}
    		}
    	}
    } elseif (isset($_GET['make'])) {
    	$make = filter_input(INPUT_GET, 'make', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    	foreach ($cars as $car) {
    		foreach ($car as $car_spec) {
    			if ($car_spec['make'] == $make) {
    			$selected_cars[] = $car_spec;
    			}
    		}
    	}
    } elseif (isset($_GET['transmission'])) {
    	$transmission = filter_input(INPUT_GET, 'transmission', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    	foreach ($cars as $car) {
    		foreach ($car as $car_spec) {
    			if ($car_spec['transmission'] == $transmission) {
    			$selected_cars[] = $car_spec;
    			}
    		}
    	}
    } elseif (isset($_GET['fuel'])) {
    	$fuel = filter_input(INPUT_GET, 'fuel', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    	foreach ($cars as $car) {
    		foreach ($car as $car_spec) {
    			if ($car_spec['fuel'] == $fuel) {
    			$selected_cars[] = $car_spec;
    			}
    		}
    	}
    } elseif (isset($_GET['colour'])) {
    	$colour = filter_input(INPUT_GET, 'colour', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    	foreach ($cars as $car) {
    		foreach ($car as $car_spec) {
    			if ($car_spec['colour'] == $colour) {
    			$selected_cars[] = $car_spec;
    			}
    		}
    	}
    } else{
    	$selected_cars = $cars['car'];
    }

    $cars_count = count($cars);
?>

<div class="container">
	<?php foreach ($selected_cars as $car): ?>
		<div class="row border justify-content-center my_car_container">
			<div class="col-sm-5 pl-0">
				<img class="img-fluid border" src="xml/car_pics/<?= $car['pics'] ?>/main.jpg">
			</div>
			<div class="col-sm-7 pl-5">
				<div class="row pt-3">
					<div class="pl-0 col-sm-9">
						<h3><?= $car['year'] ?> <?= $car['make'] ?> <?= $car['model'] ?> <?= $car['trim'] ?></h3>
					</div>
					<div class="col-lg-3">
						<a href="car_page.php?car=<?= $car['pics'] ?>" class="btn btn-info" role="button">View Details</a>
					</div>
				</div>
				<div class="row my_info_text_header pt-3">Price:&nbsp;<span class="text-primary">$<?= number_format((float)$car['price'], 2) ?></span></div>
				<div class="row text-secondary my_comment">Plus GST, PST & Dealership Fees</div>
				<div class="row my_info_text_header py-3">Kilometers: <?= number_format((float)$car['km']) ?> km</div>
				<div class="row pt-3">
					<div class="col-sm">
						<table class="table table-striped my_car_info_table">
							<tbody>
		    					<tr>
		      						<td class="text-secondary">Body Type:</td>
		      						<td><?= $car['bodytype'] ?></td>
		    					</tr>
		    					<tr>
		      						<td class="text-secondary">Engine:</td>
		      						<td><?= $car['engine'] ?></td>
		    					</tr>
		    					<tr>
		      						<td class="text-secondary">Exterior Colour:</td>
		      						<td><?= $car['colour'] ?></td>
		    					</tr>
		  					</tbody>
						</table>
					</div>
					<div class="col-sm">
						<table class="table table-striped my_car_info_table">
							<tbody>
		    					<tr>
		      						<td class="text-secondary">Transmission:</td>
		      						<td><?= $car['transmission'] ?></td>
		    					</tr>
		    					<tr>
		      						<td class="text-secondary">Fuel:</td>
		      						<td><?= $car['fuel'] ?></td>
		    					</tr>
		    					<tr>
		      						<td class="text-secondary">Drivetrain:</td>
		      						<td><?= $car['drivetrain'] ?></td>
		    					</tr>
		  					</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
	<?php 	$_SESSION['cars_count'] = $cars_count; ?>
</div>