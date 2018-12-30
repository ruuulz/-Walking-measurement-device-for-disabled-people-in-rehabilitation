<?php

class ModelDataUpload{
    private $db;

    public function __construct(){
        $this->db=conectar::conexion();
    }

    public function authorization($sensor_id,$token){
        //$sql = "SELECT * FROM sensor WHERE sensor_id = '$sensor_id' and token = '$token';";
        //$res = $this->db->query($sql);

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
    public function insertData($sensor_id,$data){
        //$sql  = "INSERT INTO sensor_data SET ";
        //$sql .= "sensor_id = '$sensor_id',  data = '$data';";
        //$res = $this->db->query($sql);

        $prep = $this->db->prepare( "INSERT INTO sensor_data SET sensor_id = ?,  data = ?;");
        $prep->bind_param('is',$sensor_id,$data);
        $prep->execute();
        //$res = $prep->get_result();

        $result=$this->db->insert_id;
        return $result;

    }

    public function getData($sensor_id){
        $prep = $this->db->prepare( "SELECT * FROM sensor_data WHERE sensor_id = ? and status=1;");
        $prep->bind_param('i',$sensor_id);
        $prep->execute();
        $res = $prep->get_result();

        //$sql  = "SELECT * FROM sensor_data WHERE sensor_id = '$sensor_id' and status=1;";
        //$res = $this->db->query($sql);
        //$result=$this->db->insert_id;

        while($row=$res->fetch_assoc()){
            $data= $row;
        }
        return $data;

    }
    public function getSensors(){
        $sql  = "SELECT DISTINCT(sensor_id),name FROM sensor;";
        $res = $this->db->query($sql);
        $data = [];

        while($r=$res->fetch_assoc()){ $data[]=$r; }
        return json_encode($data,JSON_UNESCAPED_UNICODE);
    }

    public function getPacientes($nombre){
        $nombre = "%{$nombre}%";
        $prep = $this->db->prepare( "SELECT patient_id, firstname, first_lastname, secound_lastname FROM patient WHERE (firstname LIKE ? OR first_lastname LIKE ? OR secound_lastname LIKE ?);");
        $prep->bind_param('sss',$nombre,$nombre,$nombre);
        $prep->execute();
        $res = $prep->get_result();
        $data = [];

        while($r=$res->fetch_assoc()){ $data[]=$r; }
        return json_encode($data,JSON_UNESCAPED_UNICODE);
    }

    public function getSesions($sensor_id){
        $prep = $this->db->prepare( "SELECT * FROM sensor_data WHERE sensor_id = ? and status=0;");
        $prep->bind_param('i',$sensor_id);
        $prep->execute();
        $res = $prep->get_result();

        //$sql  = "SELECT * FROM sensor_data WHERE sensor_id = '$sensor_id' and status=1;";
        //$res = $this->db->query($sql);
        //$result=$this->db->insert_id;

        $data = array();
        while($r=$res->fetch_assoc()){ $data[]=$r; }


        return $data;

    }

//    public function getDataSesions($sensor_id,$sesion){
//        $prep = $this->db->prepare( "SELECT * FROM sensor_data WHERE sensor_id = ? and sesion=? and status=0;");
//        $prep->bind_param('i',$sensor_id);
//        $prep->execute();
//        $res = $prep->get_result();
//
//        //$sql  = "SELECT * FROM sensor_data WHERE sensor_id = '$sensor_id' and status=1;";
//        //$res = $this->db->query($sql);
//        //$result=$this->db->insert_id;
//
//        while($row=$res->fetch_assoc()){
//            $data= $row;
//        }
//        return $data;
//
//    }

}
?>