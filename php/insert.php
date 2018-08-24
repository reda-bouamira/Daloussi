<?php 
    require('db_connect.php');

    if ($_POST && !empty($_POST['url'])) {
        //  Sanitize user input to escape HTML entities and filter out dangerous characters.
        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        //  Build the parameterized SQL query and bind to the above sanitized values.
        $query = "INSERT INTO carurl (url) VALUES (:url)";
        $statement = $db->prepare($query);
        
        //  Bind values to the parameters
        $statement->bindvalue(':url', $url);
        
        //  Execute the INSERT.
        //  execute() will check for possible SQL injection and remove if necessary
        if($statement->execute()){
        	echo "Success";
        }
    }

    require('select_urls.php');

    $urls_js = json_encode($urls);
?>

<!DOCTYPE html>
<html>
<head>
    <title>PDO Insert</title>
    <script>
        function ajax_kijiji(){

            if (<?php echo isset($_POST['url']); ?>) {
                
                var urls = <?php echo $urls_js; ?>;

                var promiseAd = getAd(urls[urls.length - 1]['url']);

                var ad = promiseAd.then(function(value){
                        console.log(value);
                    // Create our XMLHttpRequest object
                    var hr = new XMLHttpRequest();
                    // Create some variables we need to send to our PHP file
                    var url = "kijiji.php";
                    var vars = "attributes=" + JSON.stringify(value.attributes)
                                +"&description="+value.description
                                +"&main_image="+value.image
                                +"&images="+JSON.stringify(value.images)
                                +"&title="+value.title
                                +"&url="+value.url;

                    hr.open("POST", url, true);
                    // Set content type header information for sending url encoded variables in the request
                    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    // Access the onreadystatechange event for the XMLHttpRequest object
                    hr.onreadystatechange = function() {
                        if(hr.readyState == 4 && hr.status == 200) {
                            var return_data = hr.responseText;
                        }
                    }
                    // Send the data to PHP now... and wait for response to update the status div
                    hr.send(vars); // Actually execute the request                 

                    return value
                });
            }
            else{
                alert("not a post");
            }
        }	
    </script>
</head>
<body onload='ajax_kijiji()'>
    <form method="post" action="insert.php">
        <label for="url">URL</label>
        <input id="url" name="url">
        <input type="submit">
    </form>
    <script src="../js/kijiji-scraper/bundle.js"></script>
    <!-- <script src="../js/inventory.js"></script> -->
    <script src="https://requirejs.org/docs/release/2.3.5/minified/require.js" crossorigin="anonymous"></script>
</body>
</html>

