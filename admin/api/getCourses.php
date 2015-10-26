<?php 
	if(isset($_GET['term']) && !empty($_GET['term'])){
		require_once('db_functions.php');
		$courseName = trim(strip_tags($_GET['term']));
		$db = new DB_Functions();


		//time 
		$offset = strtotime("+0 minutes");
		$currentdate = date('Y-m-d', $offset);
		$currenttime = date('H:i:s', $offset);
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
	}else{
		echo "Access Denied";
	}
 ?>