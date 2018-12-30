<?php
require_once("model/common/login.php");
require_once("language/index.php");

$login=new ModelCommonLogin();
//$route='common/login';
$route='';

if(isset($_GET['route'])){
	$route=$_GET['route'];
}
if($route=='sensor/insert' or $route=='sensor/begin'){
	require_once('controller/'.$route.'.php');

}
else{
	if(!isset($_SESSION['user_id'])){
		if(!isset($_POST['login'])){
			require_once("language/common/login.php");
			require_once("view/common/login.phtml");
		}else{
			$login_result=$login->login($_POST['username'],$_POST['password'],$result);
			if($login_result==1){
				var_dump($result);
				$_SESSION['user_id'] = $result['user_id'];
				$_SESSION['username'] = $result['username'];
				$_SESSION['email'] = $result['email'];
				$_SESSION['firstname'] = $result['firstname'];
				$_SESSION['first_lastname'] = $result['first_lastname'];
				$_SESSION['secound_lastname'] = $result['secound_lastname'];
				$_SESSION['expire'] = time() + (SESSION_TIMEOUT * 60);
				
				header("location:index.php?route=common/dashboard");
			}else{
				require_once("language/common/login.php");
				require_once("view/common/login.phtml");
				
			}
		}

	}else{
		switch ($route){
			case 'account/logout';
				session_destroy();
				require_once("language/common/login.php");
				require_once("view/common/login.phtml");
				break;
			case '':
				header("location:index.php?route=common/dashboard");
				break;

			default:
				require_once('controller/'.$route.'.php');
				break;
		}		

	}
}


?>