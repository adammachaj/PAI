<?php

// require_once "Database.php";
require_once "Routing.php";

$router = new Routing();
$router->run();

$database = new Database();
$database->connect();


?>
