<?php
  $get_values = "?";
  if (isset($_GET['sort'])) {
    $sort_option = filter_input(INPUT_GET, 'sort', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      if ($sort_option != "") {
        $get_values = "?sort=" . $sort_option . "&";
      }
  }


  $cars_xml = simplexml_load_file('xml/cars.xml');
  $json_decode_cars = json_decode(  json_encode($cars_xml), true);
  $cars_array = array_values($json_decode_cars);

  $car_years = array();
  foreach ($cars_array[0] as $car) {
    array_push($car_years, $car['year']);
  }
  $car_years = array_unique($car_years);
  rsort($car_years);

  $car_makes = array();
  foreach ($cars_array[0] as $car) {
    array_push($car_makes, $car['make']);
  }
  $car_makes = array_unique($car_makes);
  sort($car_makes);

  // $car_types = array();
  // foreach ($cars_array[0] as $car) {
  //   array_push($car_types, $car['type']);
  // }
  // $car_types = array_unique($car_types);
  // sort($car_types);

  $car_transmissions = array("Automatic", "Manual");
  $car_fuels = array("Gasoline", "Diesel");

  $car_colours = array();
  foreach ($cars_array[0] as $car) {
    array_push($car_colours, $car['colour']);
  }
  $car_colours = array_unique($car_colours);
  sort($car_colours);
?>

<ul class="nav justify-content-center bg-dark">
  <div class="mx-2 py-1">
        <a href="inventory.php"><button class="btn bg-dark text-light" type="button">All Cars</button></a>
  </div>
  <div class="dropdown mx-2 py-1">
        <button class="btn bg-dark text-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Year</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php foreach ($car_years as $car_year): ?>
                <a class="dropdown-item" href="<?= $get_values . "year=" . $car_year ?>"><?= $car_year; ?></a>
            <?php endforeach ?>
        </div>
    </div>
    <div class="dropdown mx-2 py-1">
        <button class="btn bg-dark text-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Make</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php foreach ($car_makes as $car_make): ?>
                <a class="dropdown-item" href="<?= $get_values . "make=" . $car_make ?>"><?= $car_make; ?></a>
            <?php endforeach ?>
        </div>
    </div>
    <div class="dropdown mx-2 py-1">
        <button class="btn bg-dark text-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transmission</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php foreach ($car_transmissions as $car_transmission): ?>
                <a class="dropdown-item" href="<?= $get_values . "transmission=" . $car_transmission ?>"><?= $car_transmission; ?></a>
            <?php endforeach ?>
        </div>
    </div>
    <div class="dropdown mx-2 py-1">
        <button class="btn bg-dark text-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fuel</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php foreach ($car_fuels as $car_fuel): ?>
                <a class="dropdown-item" href="<?= $get_values . "fuel=" . $car_fuel ?>"><?= $car_fuel; ?></a>
            <?php endforeach ?>
        </div>
    </div>
  <div class="dropdown mx-2 py-1">
        <button class="btn bg-dark text-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Color</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php foreach ($car_colours as $car_colour): ?>
                <a class="dropdown-item" href="<?= $get_values . "colour=" . $car_colour ?>"><?= $car_colour; ?></a>
            <?php endforeach ?>
        </div>
    </div>
</ul>