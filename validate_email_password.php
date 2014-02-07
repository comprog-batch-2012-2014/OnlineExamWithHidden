<?php 
	include_once('config.php');
	include_once('questionsClassDAO.php');

	$emailadd = isset($_POST['email']) ? $_POST['email']: "";
	$password = isset($_POST['pass']) ? $_POST['pass']: "";

	if($emailadd == "" && $password != ""){
		echo json_encode(
				array(
					'result'=>'Your emailadd is Invalid',
					'is_user'=> false
					)
			);
	}elseif($password == "" && $emailadd != ""){
		echo json_encode(
				array(
					'result'=>'Your password is Invalid',
					'is_user'=> false
					)
			);
	}elseif($password == "" && $emailadd == ""){
		echo json_encode(
				array(
					'result'=>'The emailadd and password is Invalid',
					'is_user'=> false
					)
			);
	}else{
		$user = questionsClassDAO::isUser($emailadd, sha1($password));		
		if($user){
			echo json_encode(
					array(
						'result'=>'"You successfully login, get ready for the quiz"',
						'is_user'=> true
						)
				);
		}else{
			echo json_encode(
					array(
						'result'=>'Either Email and Password was incorrect',
						'is_user'=> false
						)
				);
		}
	}
 ?>