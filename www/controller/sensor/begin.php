<?php
/*
$error= array(
			'200' => "OK",
			'401' => "Error de Autenticación",
			'400' => "Error falta data",
			'500' => "error default",
			);
*/
require_once('model/sensor/sensor.php');

$sensor=new ModelSensorSensor();

$DEBUG=0;
if ($DEBUG>0) {
	error_log("[debug][".__METHOD__."][".__LINE__."]GET->".$_GET);
	var_dump($_GET);
}
#validacion
$error=500;
if(isset($_GET['sensor_id'])&&isset($_GET['token'])){
	$auth=$sensor->authorization($_GET['sensor_id'],$_GET['token']);
	if($auth==1){
        $ins=$sensor->createSesion($_GET['sensor_id']);
		if ($ins>0) {$error=200;}
		else {$error=400;}
	}else{
		$error=401;
	}
	// $data=json_decode($_GET['data'], TRUE);
	// var_dump($data);
	// echo 'x1='.$data['x1'];
}
echo $error.'<br>';
?>