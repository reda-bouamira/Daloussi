<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php include 'php/head.php' ?>
    </head>
    <body>
        <header>
            <?php include 'php/header.php' ?>
        </header>
        <div class="my-content container-fluid p-0">
            <div class="my-slideshow">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="http://st.motortrend.com/uploads/sites/10/2017/08/2018-Mazda-CX-3-cabin.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://www.mercedes-benz-oakville.ca/wp-content/uploads/sites/53/2018/04/MBO.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://s.aolcdn.com/hss/storage/midas/b261dd1550e58b877a5479839c31f099/205904061/bmw-ed.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- CarType: coupe sedan SUV truck van wagon -->
        <footer>
            <!-- <?php include 'php/footer.php'; ?> -->
        </footer>
    	<?php include 'php/scripts.php' ?>
    </body>
</html>