// $('.nav-link').on('click', function() {
// 	$('.active-link').removeClass('active-link');
// 	$(this).addClass('active-link');
// });


function load(){
	var browserWidth = getWidth();
	myServiceCarYear();

		if (browserWidth <= 500) {
			document.getElementById('all_types').src = "img/car_types/group_cars1.png"
			// document.getElementsByClassName("my_empty_col").remove();
		}
		else{
			// alert("The browser width is" + browserWidth);
		}
}

function smallWindow(){
	
}

// Gets the car years in service_home.php
function myServiceCarYear(){
	var carYear = document.getElementById("my_service_car_year");
	var currentDate = new Date();
	var currentYear = currentDate.getFullYear();

	for (var i = currentYear; i >= 1975; i--) {
		var yearOption = document.createElement("option");
		yearOption.setAttribute("value", i);
		var year = document.createTextNode(i);
		yearOption.appendChild(year);
		carYear.appendChild(yearOption);
	}

}

// Gets the width of the browser.
function getWidth(){
	var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

	return width;
}


document.addEventListener("DOMContentLoaded", load, false);
// window.addEventListener("resize", load);