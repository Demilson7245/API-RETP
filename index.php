<?php
require_once "controlador/rutas.controlador.php";
require_once "controlador/cursos.controlador.php";

//modelo
require_once "modelo/cursos.modelo.php";
$rutas = new controladorRutas();
$rutas->inicio();


?>