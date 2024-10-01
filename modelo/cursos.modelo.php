<?php
require_once "conexion.php";
class ModeloCursos{
    public static function index($tabla){
        $stmt=conexion::conectar()->prepare("select * form $tabla");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
        $stmt->close();
        $stmt->null;
    }
}


?>