// $('.nav-link').on('click', function() {
// 	$('.active-link').removeClass('active-link');
// 	$(this).addClass('active-link');
// });


function load(){
	var browserWidth = getWidth();

		if (browserWidth <= 500) {
			document.getElementById('all_types').src = "img/car_types/group_cars1.png"
			document.getElementsByClassName("my_empty_col").remove();
		}
		else{
			// alert("The browser width is" + browserWidth);
		}
}

function smallWindow(){
	
}

// Gets the width of the browser.
function getWidth(){
	var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

	return width;
}


// document.addEventListener("DOMContentLoaded", load, false);
window.addEventListener("resize", load);
