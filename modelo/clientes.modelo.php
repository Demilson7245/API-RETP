<?php

class ModeloCliente{
    static public function index($tabla){
        $stmt=conexion::conectar()->prepare("select * from $tabla");
        $stmt->execute();

        return $stmt->fetchAll();
        $stmt->close();
        $stmt->null;
    }
}

?>