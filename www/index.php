<?php
session_start();
define('VERSION', '0.1');
date_default_timezone_set('America/Santiago');
require_once("config.php");
require_once("model/bd.php");

require_once("controller/index.php");

?>