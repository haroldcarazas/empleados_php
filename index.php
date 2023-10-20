<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controllers/EmpleadoController.php");

$controller = new EmpleadoController();

// ----- URL del navegador -----
$urlCompleta = $_SERVER["REQUEST_URI"];
// Cortamos la URL para que no muestre los query params "/edit?id=1"
$urlPartida = explode("?", $urlCompleta);
// Tomamos la primera posición porque esa es la que representa la acción "/create", "/index.php", etc...
$url = $urlPartida[0];

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    switch ($url) {
        case "/index.php":
            $controller->index();
            break;

        case "/create":
            $controller->create();
            break;

        case "/edit":
            $controller->edit($_GET["id"]);
            break;

        default:
            echo "No encontramos la URL";
            break;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    switch ($url) {
        case "/create":
            $controller->store($_POST);
            break;

        case "/delete":
            $controller->delete($_POST["empleado_id"]);
            break;

        default:
            echo "No encontramos la URL";
            break;
    }
}
