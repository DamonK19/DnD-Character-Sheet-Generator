<?php

/**
 * Open a connection via PDO to create a
 * new database and table with structure.
 *
 */

require "config.php";

try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("data/delete.sql");
    $connection->exec($sql);
    
    echo "test database deleted";
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
