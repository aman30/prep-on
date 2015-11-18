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

		/*=============Users==============*/
		/**
	     * Check if user ID exists
	     * Return true or false
	     */
		public function userIdExists($username){
			return (mysql_result(mysql_query("SELECT COUNT(ac_id) FROM `".PREFIX."account` WHERE email = '$username'"), 0)==1)? true : false;
		}
		/**
	     * Check if username and password exists
	     * Return userId or false
	     */
	    public function checkUser($username,$password) {
	    	include_once("config.php");	    	
	    	if(!$this->userIdExists($username))
	    		return false;
	    	else{
	    		$userId= $this->getUserIdFromUsername($username);
		    	$password = md5($password);
		    	return (mysql_result(mysql_query("SELECT COUNT(`ac_id`) FROM `".PREFIX."account` WHERE email ='$username' AND ac_password ='$password'"),0, `ac_id`) == 1)? $userId : false;
		    }
	    }

	    /**
	     * Get userid for username
	     * Return userId
	     */
	    public function getUserIdFromUsername($username){
			return mysql_result(mysql_query("SELECT ac_id FROM `".PREFIX."account` WHERE email = '$username'"), 0, 'ac_id');
		}

		/**
	     * Get first name, last name
	     * Return first and last name
	     */
	    public function getName($userId) {
	    	include_once("config.php");
	    	$name_query = mysql_query("SELECT `ac_first_name`, `ac_last_name` FROM `".PREFIX."account` WHERE ac_id =".$userId);    	
	    	return mysql_fetch_array($name_query, MYSQL_NUM);	    		
	    }

	    /**
	     * Register user
	     */
	    public function setUser($userDetails) {
	    	include_once("config.php");
	    	$fields = '`'.implode('`, `', array_keys($userDetails)). '`';
			$data = '\''.implode('\',\'', $userDetails).'\'';
	
	    	mysql_query("INSERT INTO `".PREFIX."account` ($fields) VALUES ($data)");    	    		
	    }

	    /*============Courses===========*/

		/**
	     * Getting all courses user is registered to
	     * Return list of courses
	     */
	    public function getRegisteredCourses($userId) {
	    	include_once("config.php");
	    	$course_list_query = mysql_query("SELECT `course_name` FROM `".PREFIX."course_selected` RIGHT JOIN `pon_courses_all` ON `pon_course_selected`.`course_id_fk` = `pon_courses_all`.`courses_id` WHERE ac_id_fk =".$userId." ORDER BY `course_name`")or die(mysql_error()); 
	    	$course_list = array();  		    	
	    	while($row = mysql_fetch_array($course_list_query, MYSQL_NUM)){
	    		$course_list[] = $row[0];
	    	}
	    	return $course_list;
	    }

		/**
	     * Getting all courses for the given course name
	     * Return list of courses
	     */
	    public function getCourses($courseName) {
	    	include_once("../config.php");
	    	$course_list_query = mysql_query("SELECT `course_name` FROM ".PREFIX."courses_all WHERE course_name LIKE '%".$courseName."%'"); 
	    	$course_list = array();  		    	
	    	while($row = mysql_fetch_array($course_list_query, MYSQL_NUM)){
	    		$course_list[] = $row[0];
	    	}
	    	return $course_list;
	    }

	    /**
	     * Checking the existence of a course
	     * Return boolean
	     */
	    public function courseExists($courseName) {
	    	include_once("../config.php");	    	
	    	return (mysql_result(mysql_query("SELECT COUNT(course_id_fk) FROM `".PREFIX."course_selected` RIGHT JOIN `pon_courses_all` ON `pon_course_selected`.`course_id_fk` = `pon_courses_all`.`courses_id` WHERE course_name ='".$courseName."'"), 0)== 1)? true : false;
	    }

	    /**
	     * Insert course Name
	     */
	    public function addCourse($courseName,$userId) {
	    	include_once("../config.php");
	    	$courseId = mysql_result(mysql_query("SELECT `courses_id` FROM ".PREFIX."courses_all WHERE course_name='".$courseName."'"),0);
	    	mysql_query("INSERT INTO ".PREFIX."course_selected(`ac_id_fk`, `course_id_fk`) VALUES ({$userId},{$courseId})");
	    }

	}

	//$db = new DB_Functions;
	//echo ($db->userIdExists('sankalp.chugh@gmail.com'));

?>