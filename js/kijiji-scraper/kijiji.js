var kijiji = require("kijiji-scraper");

window.getAd = function(url){
	let ad = kijiji.Ad.Get (url).then(function(ad) {
	// Use the ad object
		console.log(ad.attributes);
		console.log(ad.images);

		document.cookie = "ad=" + ad.attributes;

		var adAttributes = JSON.stringify(ad.attributes);
		var adImages = ad.images;

		localStorage['ad_attributes'] = adAttributes;

		localStorage['ad_images'] = adImages;
	}).catch(console.error);

	return ad;
}

/*var getAd = function(){
	let ad = kijiji.Ad.Get ("https://www.kijiji.ca/v-cars-trucks/winnipeg/2010-mazda-mazdaspeed3-one-owner-nav-bluetooth-htd-seats/1361254109?enableSearchNavigationFlag=true").then(function(ad) {
	// Use the ad object
		console.log(ad.attributes);
		console.log(ad.images);

		document.cookie = "ad=" + ad.attributes;

		var adAttributes = JSON.stringify(ad.attributes);
		var adImages = ad.images;

		localStorage['ad_attributes'] = adAttributes;

		localStorage['ad_images'] = adImages;
	}).catch(console.error);

	return ad;
}

exports.getAd = getAd;*/

/*
// Scrape using returned promise
	let ad = kijiji.Ad.Get ("https://www.kijiji.ca/v-cars-trucks/winnipeg/2010-mazda-mazdaspeed3-one-owner-nav-bluetooth-htd-seats/1361254109?enableSearchNavigationFlag=true").then(function(ad) {
	// Use the ad object
		console.log(ad.attributes);
		console.log(ad.images);

		document.cookie = "ad=" + ad.attributes;

		var adAttributes = JSON.stringify(ad.attributes);
		var adImages = ad.images;

		localStorage['ad_attributes'] = adAttributes;

		localStorage['ad_images'] = adImages;
		
		// var xhttp = new XMLHttpRequest();
		// xhttp.onreadystatechange = function() {
		// 	if (xhttp.readyState == 4 && xhttp.status == 200) {
		// 		myFunction(this);
		// 	}
		// };
		// xhttp.open("GET", "xml/cars.xml", true);
		// xhttp.send();

		// function myFunction(xml) {
		// 	var x, y, i, car, txt, xmlDoc;
		// 	xmlDoc = xml.responseXML;
		// 	car = xmlDoc.createElement("car");

		// 	year = xmlDoc.createElement("year");
		// 	make = xmlDoc.createElement("make");
		// 	model = xmlDoc.createElement("model");
		// 	trim = xmlDoc.createElement("trim");
		// 	price = xmlDoc.createElement("price");
		// 	km = xmlDoc.createElement("km");
		// 	bodytype = xmlDoc.createElement("bodytype");
		// 	engine = xmlDoc.createElement("engine");
		// 	colour = xmlDoc.createElement("colour");
		// 	transmission = xmlDoc.createElement("transmission");
		// 	fuel = xmlDoc.createElement("fuel");
		// 	drivetrain = xmlDoc.createElement("drivetrain");
		// 	pics = xmlDoc.createElement("pics");
		// 	description = xmlDoc.createElement("description");

		// 	var transmissions = ['manual', 'automatic'];

		// 	year.textContent = ad.attributes.caryear;
		// 	make.textContent = ad.attributes.carmake;
		// 	model.textContent = ad.attributes.carmodel;
		// 	trim.textContent = ad.attributes.cartrim;
		// 	price.textContent = ad.attributes.price;
		// 	km.textContent = ad.attributes.carmileageinkms;
		// 	bodytype.textContent = ad.attributes.carbodytype;
		// 	engine.textContent = "n/a";
		// 	colour.textContent = ad.attributes.carcolor;
		// 	transmission.textContent = transmissions[ad.attributes.cartransmission - 1];
		// 	fuel.textContent = ad.attributes.carfueltype;
		// 	drivetrain.textContent = ad.attributes.drivetrain;
		// 	pics.textContent = ad.attributes.caryear;
		// 	description.textContent = ad.description;


		// 	car.appendChild(year);
		// 	car.appendChild(make);
		// 	car.appendChild(model);
		// 	car.appendChild(trim);
		// 	car.appendChild(price);
		// 	car.appendChild(km);
		// 	car.appendChild(bodytype);
		// 	car.appendChild(engine);
		// 	car.appendChild(colour);
		// 	car.appendChild(transmission);
		// 	car.appendChild(fuel);
		// 	car.appendChild(drivetrain);
		// 	car.appendChild(pics);
		// 	car.appendChild(description);

		// 	x = xmlDoc.getElementsByTagName("cars")[0];
		// 	x.appendChild(car);
		// 	console.log(xmlDoc.getElementsByTagName("car")[4]);
		// 	console.log(ad.attributes.caryear);
		// 	window.location.replace('inventory_php/car_container.php');
		// }	

	}).catch(console.error);
	 
	// Scrape using optional callback paramater
	// kijiji.Ad.Get("https://www.kijiji.ca/v-cars-trucks/winnipeg/2013-hyundai-elantra-coupe-gls-only-034-000kms/1353372624?enableSearchNavigationFlag=true", function(err, ad) {
	//     if (!err) {
	//         // Use the ad object
	//         console.log(ad.title);
	//     }
	// });

// 	var xhttp = new XMLHttpRequest();
// 	xhttp.onreadystatechange = function() {
// 	    if (xhttp.readyState == 4 && xhttp.status == 200) {
// 	        myFunction(xhttp);
// 	    }
// 	};
// 	xhttp.open("GET", "xml/cars.xml", true);
// 	xhttp.send();

// 	function myFunction(xml) {
//     var x, y, i, car, txt, xmlDoc;
//     xmlDoc = xml.responseXML;
// 	car = xmlDoc.createElement("car");

// 	year = xmlDoc.createElement("year");
// 	make = xmlDoc.createElement("make");
// 	model = xmlDoc.createElement("model");
// 	trim = xmlDoc.createElement("trim");
// 	price = xmlDoc.createElement("price");
// 	km = xmlDoc.createElement("km");
// 	bodytype = xmlDoc.createElement("bodytype");
// 	engine = xmlDoc.createElement("engine");
// 	colour = xmlDoc.createElement("colour");
// 	transmission = xmlDoc.createElement("transmission");
// 	fuel = xmlDoc.createElement("fuel");
// 	drivetrain = xmlDoc.createElement("drivetrain");
// 	pics = xmlDoc.createElement("pics");
// 	description = xmlDoc.createElement("description");



// 	car.appendChild(year);
// 	car.appendChild(make);
// 	car.appendChild(model);
// 	car.appendChild(trim);
// 	car.appendChild(price);
// 	car.appendChild(km);
// 	car.appendChild(bodytype);
// 	car.appendChild(engine);
// 	car.appendChild(colour);
// 	car.appendChild(transmission);
// 	car.appendChild(fuel);
// 	car.appendChild(drivetrain);
// 	car.appendChild(pics);
// 	car.appendChild(description);

//     x = xmlDoc.getElementsByTagName("cars")[0];
//     x.appendChild(car);
// }*/