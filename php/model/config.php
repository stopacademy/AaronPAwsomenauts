<?php
    require_once(__DIR__ . "/../model/database.php");
    session_start();
    
    session_regenerate_id(true);
    
    $path = '/AaronPAwesomenauts/php/';
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "awesomenauts_db";
    
    if(!isset($_SESSION["connection"])) {
        $connection = new Database($host, $username, $password, $database);
        $_SESSION["connection"] = $connection;
    }