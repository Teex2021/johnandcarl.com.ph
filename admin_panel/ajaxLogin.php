<?php
	
	session_start();

	if (isset($_POST['user']) && isset($_POST['pwd'])) {

		//print_r($_POST);
		include('../db.php');

		$query="SELECT `username` FROM `tbl_administrator` WHERE `username`=? AND `password`=?";
		$stmt=$con->prepare($query);
		$stmt->bind_param('ss', $_POST['user'], $_POST['pwd']);
		$stmt->execute();
		$result=$stmt->get_result();
		$user=$result->fetch_assoc();
		if ($result->num_rows==1) {

			$_SESSION['LoginUser']=$user['username'];
			
			$res=array('status'=>1, 'username'=>$user['username'], 'msg'=>'Logged in Successfully');
			print_r(json_encode($res));
		} else {
			$res = array('status' => '0', 'msg' => 'Invalid Username or Password.');
			print_r(json_encode($res));
		}
		
	} else {
		$res = array('status' => '0', 'msg' => 'Invalid Username or Password.');
		print_r(json_encode($res));
	}


?>