<?php


class ModelSensorSensor{
	private $db;
 
    public function __construct(){
        $this->db=conectar::conexion();
   }
   
    public function authorization($sensor_id,$token){

		$prep = $this->db->prepare("SELECT * FROM sensor WHERE sensor_id = ? and token = ?;");
		$prep->bind_param('ii',$sensor_id,$token);
		$prep->execute();
		$res = $prep->get_result();

		$count=0;
		while($row=$res->fetch_assoc()){
			$count++;
		}
		if($count==1){return 1;}
		else{return 0;}
		
	}

    public function getLastSesion($sensor_id){
        $prep = $this->db->prepare("SELECT MAX(sesion_id) as sesion_id FROM sesiones WHERE sensor_id = ?;");
        $prep->bind_param('i',$sensor_id);
        $prep->execute();
        $res = $prep->get_result();
        $data = $res->fetch_assoc();

        //while($r=$res->fetch_assoc()){ $data[]=$r; }

        return $data;
    }

    public function createSesion($sensor_id){
        $prep = $this->db->prepare("INSERT INTO sesiones SET sensor_id = ?;");
        $prep->bind_param('i',$sensor_id);
        $prep->execute();
        $res = $prep->get_result();

        $result=$this->db->insert_id;

        return $result;
    }


     public function insertData($sensor_id,$data,$sesion_id){

        $prep = $this->db->prepare( "INSERT INTO sensor_data SET sensor_id = ?,  data = ?, sesion_id = ?;");
        $prep->bind_param('isi',$sensor_id,$data, $sesion_id);
        $prep->execute();
        $res = $prep->get_result();

		$result=$this->db->insert_id;
		return $result;
		
	}
 
     public function getData($sensor_id){
        $prep = $this->db->prepare( "SELECT * FROM sensor_data WHERE sensor_id = ? and status=1;");
        $prep->bind_param('i',$sensor_id);
        $prep->execute();
        $res = $prep->get_result();

		while($row=$res->fetch_assoc()){
            $data= $row;
        }
		return $data;
		
	}
     public function getSensors(){
		$sql  = "SELECT * FROM sensor;";
		$res = $this->db->query($sql);

        while($row=$res->fetch_assoc()){
            $data= $row;
        }
		return $data;
	}
 
}
?>