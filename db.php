<?php
    $DB_HOST = $_ENV["DB_HOST"];
    $DB_USER = $_ENV["DB_USER"];
    $DB_PASSWORD = $_ENV["DB_PASSWORD"];
    $DB_NAME = $_ENV["DB_NAME"];
    $DB_PORT = $_ENV["DB_PORT"];


    $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME, $DB_PORT);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}