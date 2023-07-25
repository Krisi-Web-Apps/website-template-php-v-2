<?php

$BASE_PATH = "/admin";

$router = new Router();

$router->addRoute("$BASE_PATH/", function () {
  view("dashboard");
});

$router->addRoute("$BASE_PATH/pages", function () {
  view("pages/index");
});

$router->addRoute("$BASE_PATH/pages/create", function () {
  view("pages/create");
});

$router->addRoute("$BASE_PATH/pages/delete", function ($params) {
  $_SESSION["params"] = $params;
  view("pages/code.php");
});

$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->handleRequest($currentPath);
