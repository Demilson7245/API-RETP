<?php
//capturacion de ruta
$array = explode ("/", $_SERVER["REQUEST_URI"]);

if (count(array_filter($array))==1){
    $json=array(
        "detalle"=>"Sin Solicitudes",
    );
    echo json_encode($json, true);
}else{
    if (count(array_filter($array))==2){
        // $json=array(
        //     "detalle"=>"con Solicitudes",
        // );
        if (array_filter($array)[2]=="cursos") {
            # code...
            if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]=="GET"){
                # code...
                $cursos=new ControladorCursos();
                $cursos->index();
            }
        }
}
}
?>