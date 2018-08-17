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
?>
<!DOCTYPE html>
<html>
<head>
    <title>PDO Insert</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
    <form method="post" action="insert.php">
        <label for="url">URL</label>
        <input id="url" name="url">
        <input type="submit">
    </form>
</body>
</html>