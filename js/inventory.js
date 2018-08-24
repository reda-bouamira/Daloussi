function load(){
	loadDoc();
	postCarsCount();
}


// function loadDoc() {
// 	  var xhttp = new XMLHttpRequest();
// 	  xhttp.onreadystatechange = function() {
// 	    if (this.readyState == 4 && this.status == 200) {
// 	    myFunction(this);
// 	    }
// 	  };
// 	  xhttp.open("GET", "xml/cars.xml", true);
// 	  xhttp.send();

// 	function myFunction(xml) {
// 	  var i;
// 	  var xmlDoc = xml.responseXML;
// 	  var cars = xmlDoc.getElementsByTagName("car");

// 	  var carsCount = cars.length;

// 	  var totalCarsCount = document.getElementById("my_total_cars_count");

// 	  totalCarsCount.innerHTML = "4";
// 	}
// }

function postCarsCount(){
	var carsCount = document.getElementsByClassName('my_car_container').length;

	var carsCountNode = document.getElementById('my_cars_count');
	carsCountNode.innerHTML = carsCount;
}


document.addEventListener("DOMContentLoaded", load, false);
// window.addEventListener("resize", load);