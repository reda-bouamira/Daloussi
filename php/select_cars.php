<?php
    $query = "SELECT * FROM cars";

    // A PDO::Statement is prepared from the query.
    $statement = $db->prepare($query);

    // Execution on the DB server is delayed until we execute().
    $statement->execute();
    $cars = $statement->fetchAll();
?>