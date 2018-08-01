<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php include 'php/head.php' ?>
    </head>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5b61b3a0df040c3e9e0c2ca8/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
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