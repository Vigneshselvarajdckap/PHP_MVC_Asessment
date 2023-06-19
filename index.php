<?php

require "router.php";

$router = new routers();

$router->get("/","view");
$router->post("/store","create");
$router->get("/list","read");
$router->post("/delete","delete");
$router->post("/edit","edit");
$router->post("/update","update");


$router->check($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);