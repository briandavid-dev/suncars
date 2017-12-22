<?php
namespace app\controllers;
use app\controllers\Executor;
class Executor {
	public static $db;
	public static $con;

	public static function doit($sql){

		$con = Executor::getCon();
		if(Core::$debug_sql){
			print "<pre>".$sql."</pre>";
		}
		return array($con->query($sql),$con->insert_id);
	}



	function Database(){
		$this->user="root";$this->pass="";$this->host="localhost";$this->ddbb="bookmedik";
	}

	function connect(){
		
include 'config.php';




		$conexion->query("set sql_mode=''");
		

		return $conexion;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			//self::$db = Executor::Database();
			include 'config.php';




		$conexion->query("set sql_mode=''");
		

		return $conexion;
		}
		return self::$con;
	}


}
?>