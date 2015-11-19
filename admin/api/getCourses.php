<?php 
	$userId = 1;//for testing purpose	
	require_once('db_functions.php');

	if(isset($_GET['term']) && !empty($_GET['term'])){
		
		$courseName = trim(strip_tags($_GET['term']));		
		$db = new DB_Functions();
		// response Array
    	$response = array();
    	
    	$courses = $db->getCourses($courseName);

		if (isset($courses)) {
			$row = array();
			foreach ($courses as $key => $value) {
						$row['value'] = $value;	
						$response[] = $row;
					}			
			echo json_encode($response);
		}else{
			echo json_encode($response);
		}
	}
	elseif (isset($_GET['course']) && !empty($_GET['course'])) {
		$courseName = trim(strip_tags($_GET['course']));
		$db = new DB_Functions();
		$response = array('status' =>"");
    	
    	$course = $db->courseExists($courseName,$userId);	
    	if($course){//check if course already exists
    		$response['status'] = "error";    		
    		echo json_encode($response);
    	}
    	else{//add course if not added previously
    		$db->addCourse($courseName,$userId);
    		$response['status'] = "success";
    		$response['courseName'] = $courseName;
    		echo json_encode($response);
    	}
    		
	}
	elseif (isset($_GET['remove']) && !empty($_GET['remove'])) {
		$courseName = trim(strip_tags($_GET['remove']));
		$db = new DB_Functions();
		$db->removeCourse($courseName,$userId);
	}
	else{
		echo "Access Denied";
	}
 ?>