<?php 
class DB_Connect{
	public $prefix;
	function __construct(){
		$upOne = realpath(__DIR__ . '\..');
		require_once($upOne."\config.php");
	}

	function __destruct(){

	}

	//Connecting to database
	public function connect(){
		
		$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
		mysql_select_db(DB_DATABASE);
		return $con;
	}

	public function close(){
		mysql_close();
	}
}
?>