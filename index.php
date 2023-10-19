<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/src/controllers/EmpleadoController.php");

$controller = new EmpleadoController();
$controller->index();