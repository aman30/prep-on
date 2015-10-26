<?php 
	class DB_Functions{
		private $db;
		
		function __construct(){
			require_once("db_connect.php");
			$this->db = new DB_Connect();
			$this->db->connect();
		}

		function __destruct(){

		}

		/**
	     * Getting subcategory for the applied category id
	     * Return subcategory
	     */
	    public function getCourses($courseName) {
	    	include_once("config.php");
	    	$course_list_query = mysql_query("SELECT `course_name` FROM ".PREFIX."courses_all WHERE course_name LIKE '%".$courseName."%'"); 
	    	$course_list = array();  		    	
	    	while($row = mysql_fetch_array($course_list_query, MYSQL_NUM)){
	    		$course_list[] = $row[0];
	    	}
	    	return($course_list);
	    }

	}

	//$db = new DB_Functions;
	//$db->getCourses("ate");
?>