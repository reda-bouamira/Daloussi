<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php include 'php/head.php' ?>
    </head>
    <body class="p-0">
        <header>
            <?php include 'php/header.php' ?>
        </header>
        <div class="my-content container-fluid p-0">
            <?php include "php/carousel.php" ?>
            <?php include "php/car_type.php" ?>
            <?php include "php/service_home.php" ?>
            <?php include "php/about_us_home.php" ?>
        </div>
        <!-- use image modals when displaying the cars -->
        <footer>
            <?php include 'php/footer.php'; ?>
        </footer>
    	<?php include 'php/scripts.php' ?>
        <script src="js/index.js"></script>
    </body>
</html>