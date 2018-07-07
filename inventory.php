<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php include 'php/head.php' ?>
    </head>
    <body class="p-0">
        <header>
            <?php include 'php/header.php' ?>
        </header>
        <div class="my-content container-fluid p-0 my_inventory">
            <div class="row justify-content-center my_header_title">
                <h2>Used Vehicles For Sale</h2>
            </div>
            <div class="my_nav_search_options">
                <?php include 'inventory_php/inventory_nav.php'; ?>
            </div>
            <div class="row my_vehicles_header justify-content-end pt-3">
                <div class="col-sm-2 my-2">SHOWING <span class="font-weight-bold">1 - 20</span> OF <span class="font-weight-bold">100</span></div>
                <div class="form-inline col-sm-4 my_inventory_sort_form">
                    <label class="col-form-label mr-2" for="my_inventory_sort">SORT BY:</label>
                    <select class="custom-select form-control-sm pb-1" id="my_inventory_sort">
                        <option value="date">Date Added</option>
                        <option value="lprice">Price (Low to High)</option>
                        <option value="hprice">Price (High to Low)</option>
                        <option value="hyear">Year (Newest to Oldest)</option>
                        <option value="lyear">Year (Oldest to Newest)</option>
                    </select>
                </div>
            </div>
            <div class="my_vehicles pt-3">
                <?php   include 'inventory_php/car_container.php' ?>
            </div>
        </div>
        <footer>
            <?php include 'php/footer.php'; ?>
        </footer>
    	<?php include 'php/scripts.php' ?>
        <script src="js/inventory.js"></script>
    </body>
</html>