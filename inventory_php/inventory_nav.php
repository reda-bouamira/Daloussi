<?php 
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

  $car_transmissions = array("Automatic", "Manual");
  $car_fuels = array("Gasoline", "Diesel", "Hybrid");

  $car_colours = array();
  foreach ($cars_array[0] as $car) {
    array_push($car_colours, $car['colour']);
  }
  $car_colours = array_unique($car_colours);
  sort($car_colours);
?>

<!-- <div><?= print_r($cars_array[0][0]['year']); ?></div> -->
<!-- <div><?= var_dump($car_makes); ?></div> -->
<ul class="nav justify-content-center bg-dark">
  <li class="nav-item dropdown bg-dark btn-group my_inventory_search_options">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Year</a>
    <ul class="dropdown-menu my_search_year py-0 mt-0">
      <?php foreach ($car_years as $car_year): ?>
        <li class="py-1"><a href="#" class="small" data-value="<?php $car_year ?>" tabIndex="-1"><input type="checkbox"/>&nbsp;<?= $car_year; ?></a></li>
      <?php endforeach ?>
    </ul>
  </li>
  <li class="nav-item dropdown bg-dark btn-group my_inventory_search_options">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Make</a>
    <ul class="dropdown-menu py-0 mt-0">
      <?php foreach ($car_makes as $car_make): ?>
        <li class="py-1"><a href="#" class="small" data-value="<?= $car_make ?>" tabIndex="-1"><input type="checkbox"/>&nbsp;<?= $car_make; ?></a></li>
      <?php endforeach ?>
    </ul>
  </li>
  <!-- <li class="nav-item dropdown bg-dark btn-group my_inventory_search_options">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Model</a>
    <ul class="dropdown-menu py-0 mt-0">
      <li><a href="#" class="small" data-value="2018" tabIndex="-1"><input type="checkbox"/>&nbsp;C300</a></li>
      <li><a href="#" class="small" data-value="2017" tabIndex="-1"><input type="checkbox"/>&nbsp;525i</a></li>
      <li><a href="#" class="small" data-value="2016" tabIndex="-1"><input type="checkbox"/>&nbsp;A8</a></li>
      <li><a href="#" class="small" data-value="2015" tabIndex="-1"><input type="checkbox"/>&nbsp;Golf</a></li>
      <li><a href="#" class="small" data-value="2014" tabIndex="-1"><input type="checkbox"/>&nbsp;Raptor</a></li>
      <li><a href="#" class="small" data-value="2013" tabIndex="-1"><input type="checkbox"/>&nbsp;Outlander</a></li>
    </ul>
    </li> -->
  <li class="nav-item dropdown bg-dark btn-group my_inventory_search_options">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Transmission</a>
    <ul class="dropdown-menu py-0 mt-0">
      <?php foreach ($car_transmissions as $car_transmission): ?>
        <li class="py-1"><a href="#" class="small" data-value="2017" tabIndex="-1"><input type="checkbox"/>&nbsp;<?= $car_transmission; ?></a></li>
      <?php endforeach ?>
    </ul>
  </li>
  </li>
  <li class="nav-item dropdown bg-dark btn-group my_inventory_search_options">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Fuel</a>
    <ul class="dropdown-menu py-0 mt-0">
      <?php foreach ($car_fuels as $car_fuel): ?>
        <li><a href="#" class="small" data-value="<?= $car_fuel ?>" tabIndex="-1"><input type="checkbox"/>&nbsp;<?= $car_fuel; ?></a></li>
      <?php endforeach ?>
    </ul>
  </li>
  <li class="nav-item dropdown bg-dark btn-group my_inventory_search_options">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Color</a>
    <ul class="dropdown-menu py-0 mt-0">
      <?php foreach ($car_colours as $car_colour): ?>
        <li><a href="#" class="small" data-value="<?= $car_colour; ?>" tabIndex="-1"><input type="checkbox"/>&nbsp;<?= $car_colour; ?></a></li>
      <?php endforeach ?>
    </ul>
  </li>
  <!-- <li class="nav-item dropdown bg-dark btn-group my_inventory_search_options">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Type</a>
    <ul class="dropdown-menu py-0 mt-0">
      <li><a href="#" class="small" data-value="2018" tabIndex="-1"><input type="checkbox"/>&nbsp;2018</a></li>
      <li><a href="#" class="small" data-value="2017" tabIndex="-1"><input type="checkbox"/>&nbsp;2017</a></li>
      <li><a href="#" class="small" data-value="2016" tabIndex="-1"><input type="checkbox"/>&nbsp;2016</a></li>
      <li><a href="#" class="small" data-value="2015" tabIndex="-1"><input type="checkbox"/>&nbsp;2015</a></li>
      <li><a href="#" class="small" data-value="2014" tabIndex="-1"><input type="checkbox"/>&nbsp;2014</a></li>
      <li><a href="#" class="small" data-value="2013" tabIndex="-1"><input type="checkbox"/>&nbsp;2013</a></li>
    </ul>
  </li> -->
</ul>