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
            <?php include "php/carousel.php" ?>
            <?php include "php/car_type.php" ?>
            <?php include "php/about_us_home.php" ?>
        </div>
        <!-- Schedule Service: Usethis API https://github.com/n8barr/automotive-model-year-data for the car make and model. -->
        <!-- form on image to use with the schedule service -->
        <!-- use image modals when displaying the cars -->
        <footer>
            <?php include 'php/footer.php'; ?>
        </footer>
    	<?php include 'php/scripts.php' ?>
    </body>
</html>