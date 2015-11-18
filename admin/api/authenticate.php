<?php 		
	require_once('db_functions.php');
	$offset = strtotime("+270 minutes");
	$currenttime = date('h:i:s', $offset);
	$currentdate = date('Y-m-d', $offset);
	// response Array
    	$response = array('status'=>'');

	if(isset($_POST['password']) && !isset($_POST['fullname'])){
		
		$username = trim(strip_tags($_POST['username']));		
		$password = trim(strip_tags($_POST['password']));		
		$db = new DB_Functions();		
    	
    	$login = $db->checkUser($username,$password);

		if($login) {
			$response['status'] = 'success';
			$response['user_id'] = $login;
			echo json_encode($response);
		}else{			
			echo json_encode($response);
		}			
	}elseif (isset($_POST['fullname'])) {
		$userDetails = array();
		$fullname = strtolower(trim(strip_tags($_POST['fullname'])));
		$name = explode(" ", $fullname);		
		$userDetails['ac_first_name']=$name[0]; $userDetails['ac_last_name']=$name[1];
		$userDetails['ac_password'] = md5(trim(strip_tags($_POST['password'])));
		$userDetails['email'] = trim(strip_tags($_POST['email']));
		$userDetails['reg_date'] = $currentdate;
		$userDetails['reg_time'] = $currenttime;
		$db = new DB_Functions();
		$db->setUser($userDetails);
		echo json_encode($response);

	}
	else{
		echo "Access Denied";
	}
 ?>