<?php 		
	require_once('db_functions.php');

	if(isset($_POST['username']) && !empty($_POST['username'])){
		
		$username = trim(strip_tags($_POST['username']));		
		$password = trim(strip_tags($_POST['password']));		
		$db = new DB_Functions();
		// response Array
    	$response = array('status'=>'');
    	
    	$login = $db->checkUser($username,$password);

		if($login) {
			$response['status'] = 'success';
			$response['user_id'] = $login;
			echo json_encode($response);
		}else{			
			echo json_encode($response);
		}			
	}
	else{
		echo "Access Denied";
	}
 ?>