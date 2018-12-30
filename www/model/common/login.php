<?php
class ModelCommonLogin{
    private $db;
    private $login;

    public function __construct(){
        $this->db=conectar::conexion();
    }
    public function login($user,$password,&$result){
		/* result	:1  ->	success
					:0	->	failure
		*/
		$count=0;

        //$consulta=$this->db->query("SELECT * FROM user WHERE username = '$user' and password = MD5('$password');");

        $prep = $this->db->prepare( "SELECT * FROM user WHERE username = ? and password = MD5(?);");
        $prep->bind_param('ss',$user, $password);
        $prep->execute();
        $consulta = $prep->get_result();

		if(!$consulta){
			return -1;
		}else{	
        	while($row=$consulta->fetch_assoc()){
				$count++;
				$result = $row;
        	}
    		if($count == 1){
        		return 1;
    		}else{
        		return 0;
    		}
    	}

    }
	public function isExpired(){
		$now = time();
	
		if($now > $_SESSION['expire']) {
			session_destroy();
			return 1;
		}else{
			$_SESSION['expire'] = $now + (SESSION_TIMEOUT * 60);
			return 0;
		}
	}
}
?>