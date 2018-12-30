<?php

require_once('model/data/upload.php');

$upload= new ModelDataUpload();

if(isset($_GET['fun'])){

    $fun = $_GET['fun'];

    switch ($fun){
        case 'id_sensor';
            $out = $upload->getSensors();

            echo $out;

            break;
//        case 'sesion_sensor':
//            if(isset($_GET['id_sensor'])){
//                $out = json_encode($upload->getSesions($_GET["id_sensor"]));
//
//                print $out;
//            }
//            break;
//
        case 'buscar_paciente':
            $nombre = $_GET['nombre'];
            $out = $upload->getPacientes($nombre);

            echo $out;
            break;
        default:
            break;
    }
}

?>