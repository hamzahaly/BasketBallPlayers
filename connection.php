<?php
//uses the db-credentials to make a connection to the database
function getConnection() {
    require_once 'secret/db-credentials.php';
    try {
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbDatabase");
        return $conn;
    } catch(PDOException $e) {
        die('Could not connect to database ' . $e);
    }
}
?>