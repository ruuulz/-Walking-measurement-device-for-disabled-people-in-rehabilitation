<?php
class conectar{
    public static function conexion(){
        $conexion=new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
        public function getLastId() {
                if ($this->connection) {
                        return  $this->connection->insert_id;
                }
        }

}

?>