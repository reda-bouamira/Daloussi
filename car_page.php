<?php 
	$cars_xml = simplexml_load_file('xml/cars.xml');
	$json = json_encode($cars_xml);
	$cars = json_decode($json,TRUE);


	$car = array();

	if (isset($_GET['car'])) {
		$car_value = filter_input(INPUT_GET, 'car', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

		foreach ($cars['car'] as $selected_car) {
			if (strtolower($selected_car['pics']) == strtolower($car_value)) {
				$car = $selected_car;
			}
		}
	}

    $directory = "xml/car_pics/$car_value";
    $pics = glob($directory . "/*.jpg");
    $images = array();


    for ($i=0; $i < count($pics); $i++) { 
        if (strpos($pics[$i], "main") !== false){
            $images[0] = $pics[$i];
            unset($pics[$i]);

            $index = 0;

            for ($j=1; $j < count($pics) ; $j++) { 
                $images[$j] = $pics[$index];
                $index++;
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'php/head.php' ?>
        <link rel="stylesheet" type="text/css" href="css/car_page.css">
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
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 pt-3">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 px-0" id="slider">
                                <div id="myCarousel" class="carousel slide">
                                    <!-- main slider carousel items -->
                                    <!-- https://www.codeply.com/go/uNHpBatgj7/bootstrap-4-carousel-with-thumbnail-navigation -->
                                    <div class="carousel-inner">
                                        <div class="active item carousel-item" data-slide-number="0">
                                            <img src="<?= $images[0] ?>" class="img-fluid">
                                        </div>
                                        <?php for ($i=1; $i < count($images); $i++): ?>
                                                <div class="item carousel-item" data-slide-number="<?= $i ?>">
                                                <img src="<?= $images[$i] ?>" class="img-fluid">
                                            </div>
                                        <?php endfor ?>

                                        <!-- <a class="carousel-control left pt-3" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                        <a class="carousel-control right pt-3" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right"></i></a> -->

                                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <!-- main slider carousel nav controls -->


                                    <ul class="carousel-indicators list-inline py-3">
                                        <li class="list-inline-item active">
                                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                                    <img src="<?= $images[0] ?>" class="img-fluid">
                                                </a>
                                            </li>
                                        <?php for ($i=1; $i < count($images); $i++): ?>
                                            <li class="list-inline-item">
                                                <a id="carousel-selector-<?= $i ?>" class="selected" data-slide-to="<?=$i ?>" data-target="#myCarousel">
                                                    <img src="<?= $images[$i] ?>" class="img-fluid">
                                                </a>
                                            </li>
                                        <?php endfor ?>
                                    </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 bg-light border rounded px-2 pt-2">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <h2><?= $car['year'] ?> <?= $car['make'] ?> <?= $car['model'] ?> <?= $car['trim'] ?></h2>
                                </div>
                                <div class="col-lg-3 pt-1">
                                    <A HREF="javascript:javascript:history.go(-1)"><button type="button" class="btn btn-info">Back to Inventory</button></A>
                                </div>
                            </div>
                            <div class="row justify-content-center my_car_container">
                                <div class="col-lg-12 px-5">
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
                                    <div class="row my-3 py-2 border-top">
                                        <div class="my_info_text_header pt-3">Description:</div><div class="pl-1 pt-2 text-secondary">&ensp; &ensp;<?= $car['description'] ?></div>
                                    </div>
                                    <div class="row justify-content-end py-4">
                                        <div class="">   
                                            <a href="tel:2045834617" class="py-1"><button type="button" class="btn btn-success"> Call Us Now!</button></a>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <?php include 'php/footer.php'; ?>
        </footer>
        <?php include 'php/scripts.php' ?>
    </body>
</html>