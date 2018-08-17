<?php
    require('db_connect.php');
    
     // SQL is written as a String.
     $query = "SELECT * FROM carurl";

     // A PDO::Statement is prepared from the query.
     $statement = $db->prepare($query);

     // Execution on the DB server is delayed until we execute().
     $statement->execute();
     $urls = $statement->fetchAll();
?>