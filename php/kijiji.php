<?php 
	// for each url post to and insert to the database 
	require('db_connect.php');

	if ($_POST && !empty($_POST['attributes']) && !empty($_POST['images']) && !empty($_POST['description']) && !empty($_POST['title']) && !empty($_POST['main_image']) && !empty($_POST['url'])) {
		$transmissions = ['manual', 'automatic'];

		$attributes = json_decode($_POST['attributes']);
		$images = json_decode($_POST['images']);
		$description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_STRING);
		$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
		$main_image = filter_input(INPUT_POST, "main_image", FILTER_SANITIZE_URL);
		$url = filter_input(INPUT_POST, "url", FILTER_SANITIZE_URL);

		var_dump($main_image);

		$year = $attributes->caryear;
		$make = $attributes->carmake;
		$model = $attributes->carmodel;
		$trim = $attributes->cartrim;
		$price = $attributes->price;
		$km = $attributes->carmileageinkms;
		$bodytype = $attributes->carbodytype;
		$engine = "n/a";
		$colour = $attributes->carcolor;
		$transmission = $transmissions[$attributes->cartransmission - 1];
		$fuel = $attributes->carfueltype;
		$drivetrain = $attributes->drivetrain;

		// $query = "INSERT INTO cars (url, title, year, make, model, trim, price, km, bodytype, engine, colour, transmission, fuel, drivetrain, description, main_image, images) VALUES (:url,:title,:year,:make,:model,:trim,:price,:km,:bodytype,:engine,:colour,:transmission,:fuel,:drivetrain,:description,:main_image,:images)";
		$query = "INSERT INTO cars (url, title, year, make, model, trim, price, km, bodytype, engine, colour, transmission, fuel, drivetrain, description, main_image, images) VALUES (:url,:title,:year,:make,:model,:trim,:price,:km,:bodytype,:engine,:colour,:transmission,:fuel,:drivetrain,:description,:main_image,:images)";
		$statement = $db->prepare($query);
        
        //  Bind values to the parameters
        $statement->bindvalue(':url', $url);
		$statement->bindvalue(':title', $title);
		$statement->bindvalue(':year', $year);
		$statement->bindvalue(':make', $make);
		$statement->bindvalue(':model', $model);
		$statement->bindvalue(':trim', $trim);
		$statement->bindvalue(':price', $price);
		$statement->bindvalue(':km', $km);
		$statement->bindvalue(':bodytype', $bodytype);
		$statement->bindvalue(':engine', $engine);
		$statement->bindvalue(':colour', $colour);
		$statement->bindvalue(':transmission', $transmission);
		$statement->bindvalue(':fuel', $fuel);
		$statement->bindvalue(':drivetrain', $drivetrain);
		$statement->bindvalue(':description', $description);
		$statement->bindvalue(':main_image', $main_image);
		
		$all_images = " ";

		foreach ($images as $image) {
			$all_images .= $image . ",";
		}

		$statement->bindvalue(':images', $all_images);

        //  Execute the INSERT.
        //  execute() will check for possible SQL injection and remove if necessary
        if($statement->execute()){
        	echo "Success";
		}
		else {
			echo "no success";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
	<script src="../js/kijiji-scraper/bundle.js"></script>
</head>
<body>
</body>
</html>