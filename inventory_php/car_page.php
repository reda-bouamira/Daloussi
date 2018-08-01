<?php 
	$cars_xml = simplexml_load_file('../xml/cars.xml');
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title>Carousel with Gallery Thumbs - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="../css/car_page.css">   
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
	<div class="container">
	    <div id="main_area">
	        <!-- Slider -->
	        <div class="row">
	            <div class="col-sm-6" id="slider-thumbs">
	                <!-- Bottom switcher of slider -->
	                <ul class="hide-bullets">
	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-0">
	                            <img src="http://placehold.it/150x150&text=zero">
	                        </a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/150x150&text=2"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/150x150&text=3"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/150x150&text=4"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/150x150&text=5"></a>
	                    </li>
	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-6"><img src="http://placehold.it/150x150&text=6"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-7"><img src="http://placehold.it/150x150&text=7"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-8"><img src="http://placehold.it/150x150&text=8"></a>
	                    </li>

	                    <li class="col-sm-3">
	                        <a class="thumbnail" id="carousel-selector-9"><img src="http://placehold.it/150x150&text=9"></a>
	                    </li>
	                    </li>
	                </ul>
	            </div>
	            <div class="col-sm-6">
	                <div class="col-xs-12" id="slider">
	                    <!-- Top part of the slider -->
	                    <div class="row">
	                        <div class="col-sm-12" id="carousel-bounding-box">
	                            <div class="carousel slide" id="myCarousel">
	                                <!-- Carousel items -->
	                                <div class="carousel-inner">
	                                    <div class="active item" data-slide-number="0">
	                                        <img src="http://placehold.it/470x480&text=zero"></div>

	                                    <div class="item" data-slide-number="1">
	                                        <img src="http://placehold.it/470x480&text=1"></div>

	                                    <div class="item" data-slide-number="2">
	                                        <img src="http://placehold.it/470x480&text=2"></div>

	                                    <div class="item" data-slide-number="3">
	                                        <img src="http://placehold.it/470x480&text=3"></div>

	                                    <div class="item" data-slide-number="4">
	                                        <img src="http://placehold.it/470x480&text=4"></div>

	                                    <div class="item" data-slide-number="5">
	                                        <img src="http://placehold.it/470x480&text=5"></div>
	                                    
	                                    <div class="item" data-slide-number="6">
	                                        <img src="http://placehold.it/470x480&text=6"></div>
	                                    
	                                    <div class="item" data-slide-number="7">
	                                        <img src="http://placehold.it/470x480&text=7"></div>
	                                    
	                                    <div class="item" data-slide-number="8">
	                                        <img src="http://placehold.it/470x480&text=8"></div>
	                                    
	                                    <div class="item" data-slide-number="9">
	                                        <img src="http://placehold.it/470x480&text=9"></div>
	                                </div>
	                                <!-- Carousel nav -->
	                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	                                    <span class="glyphicon glyphicon-chevron-left"></span>
	                                </a>
	                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	                                    <span class="glyphicon glyphicon-chevron-right"></span>
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <!--/Slider-->
	        </div>

	    </div>
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
		 
		        $('#myCarousel').carousel({
		                interval: 5000
		        });
		 
		        //Handles the carousel thumbnails
		        $('[id^=carousel-selector-]').click(function () {
		        var id_selector = $(this).attr("id");
		        try {
		            var id = /-(\d+)$/.exec(id_selector)[1];
		            console.log(id_selector, id);
		            jQuery('#myCarousel').carousel(parseInt(id));
		        } catch (e) {
		            console.log('Regex failed!', e);
		        }
		    });
		        // When the carousel slides, auto update the text
		        $('#myCarousel').on('slid.bs.carousel', function (e) {
		                 var id = $('.item.active').data('slide-number');
		                $('#carousel-text').html($('#slide-content-'+id).html());
		        });
		});
	</script>
</body>
</html>
