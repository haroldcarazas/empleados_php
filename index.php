<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controllers/EmpleadoController.php");

$controller = new EmpleadoController();

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $controller->create();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $controller->store($_POST);
}