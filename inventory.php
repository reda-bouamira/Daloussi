<?php   
        if (isset($_GET['sort'])) {
            $sort_option = filter_input(INPUT_GET, 'sort', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php include 'php/head.php' ?>
    </head>
    <script src="js/kijiji-scraper/bundle.js"></script>
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
        <div class="my-content container-fluid p-0 my_inventory">
            <div class="row justify-content-center my_header_title">
                <h2>Used Vehicles For Sale</h2>
            </div>
            <div class="my_nav_search_options">
                <?php include 'inventory_php/inventory_nav.php'; ?>
            </div>
            <div class="row my_vehicles_header justify-content-end pt-3">
                <div class="col-sm-2 my-2">SHOWING <span class="font-weight-bold" id="my_cars_count"></span> OF <span class="font-weight-bold" id="my_total_cars_count"></span> CARS</div>
                <div class="form-inline col-sm-4 my_inventory_sort_form">

                    <label class="col-form-label mr-2" for="my_inventory_sort">SORT BY:</label>
                    <select class="custom-select form-control-sm pb-1" id="my_inventory_sort" onchange="location = this.value;">
                        <?php if (!isset($_GET['sort'])): ?>
                            <option value=""></option>
                            <option value="?sort=lprice">Price (Low to High)</option>
                            <option value="?sort=hprice">Price (High to Low)</option>
                            <option value="?sort=hyear">Year (Newest to Oldest)</option>
                            <option value="?sort=lyear">Year (Oldest to Newest)</option>
                        <?php else: ?>
                            <?php if ($sort_option == 'lprice'): ?>
                                <option value="?sort=lprice">Price (Low to High)</option>
                                <option value="?sort=hprice">Price (High to Low)</option>
                                <option value="?sort=hyear">Year (Newest to Oldest)</option>
                                <option value="?sort=lyear">Year (Oldest to Newest)</option>
                            <?php elseif ($sort_option == 'hprice'): ?>
                                <option value="?sort=hprice">Price (High to Low)</option>
                                <option value="?sort=lprice">Price (Low to High)</option>
                                <option value="?sort=hyear">Year (Newest to Oldest)</option>
                                <option value="?sort=lyear">Year (Oldest to Newest)</option>
                            <?php elseif ($sort_option == 'hyear'): ?>
                                <option value="?sort=hyear">Year (Newest to Oldest)</option>
                                <option value="?sort=lprice">Price (Low to High)</option>
                                <option value="?sort=hprice">Price (High to Low)</option>
                                <option value="?sort=lyear">Year (Oldest to Newest)</option>
                            <?php elseif ($sort_option == 'lyear'): ?>
                                <option value="?sort=lyear">Year (Oldest to Newest)</option>
                                <option value="?sort=hprice">Price (High to Low)</option>
                                <option value="?sort=lprice">Price (Low to High)</option>
                                <option value="?sort=hyear">Year (Newest to Oldest)</option>
                            <?php endif ?>
                        <?php endif ?>
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