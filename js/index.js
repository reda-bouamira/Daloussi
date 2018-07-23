// $('.nav-link').on('click', function() {
// 	$('.active-link').removeClass('active-link');
// 	$(this).addClass('active-link');
// });


function load(){
	var browserWidth = getWidth();
	myServiceCarYear();
	var service_home_row = document.getElementById('my_service_home_row');

	var service_home_container = document.getElementById('my_service_home_container');


		if (browserWidth <= 500) {
			document.getElementById('all_types').src = "img/car_types/group_cars1.png"
			// document.getElementsByClassName("my_empty_col").remove();

			service_home_container.classList.remove("pb-4");

			service_home_row.classList.remove("py-5");
			service_home_row.classList.add("py-0");
		}
		else{
			service_home_container.classList.add("pb-4");

			service_home_row.classList.add("py-5");
			service_home_row.classList.remove("py-0");
		}
}

function smallWindow(){
	
}

// Gets the car years in service_home.php
function myServiceCarYear(){
	var carYear = document.getElementById("my_service_car_year");
	var currentDate = new Date();
	var currentYear = currentDate.getFullYear();

	for (var i = currentYear; i >= 1955; i--) {
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
window.addEventListener("resize", load);