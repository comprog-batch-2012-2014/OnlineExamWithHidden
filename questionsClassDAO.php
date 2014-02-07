<?php 
	include_once('config.php');
	include_once('questionsClass.php');

	class questionsClassDAO{
		public static function register($fname, $mname, $lname, $emailadd, $password){
			global $db;			
			$query = "INSERT INTO users(user_fname, user_mname, user_lname, user_email, user_pass) VALUES('$fname', '$mname', '$lname', '$emailadd', sha1('$password'))";
			$result = $db->query($query);
			if ($result) {
				return true;
			} else {
				return false;
			}
		}

		public static function StoreQuestionInClass($id){
			global $db;
			$query = "SELECT * FROM questionnaire WHERE question_id = '$id'";
			$result = $db->query($query);
			if($result){
				new questionsClass($result->fetch_assoc());
				$result->free();
				return true;
			}else{
				return false;
			}
		}

		public static function isUser($emailadd, $password){
			global $db;
			$query = "SELECT * FROM users WHERE user_email = '$emailadd' AND user_pass	 ='$password'";
			$result = $db->query($query);
			if($result->num_rows != 0){
				return true;
			}else{
				return false;
			}
		}

		public static function getScore($answers){
			global $db;
			$query = "SELECT correct_answer FROM questionnaire";
			$result = $db->query($query);
			if($result->num_rows != 0){
				$score = 0;
				for($i = 0; $i < $result->num_rows; $i++){
					($answers[$i] == $result->fetch_assoc()['correct_answer']) ? $score++: '';
				}
				return $score;
			}else{
				return null;
			}
		}
	}
 ?>