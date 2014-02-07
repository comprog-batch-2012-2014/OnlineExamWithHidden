<?php 
	include_once('questionsClassDAO.php');

	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$result = questionsClassDAO::register($fname, $mname, $lname, $email, $password);

	if (!isset($_POST['btn-submit'])) {
		header('Location:registrationForm.php');
	} else if($result === true) {
		echo "<script>
				var userAnswer = false;
				if(confirm('Or Do you want to proceed in taking exam?')){
					document.location.href = 'questions.php';
				}else{
					document.location.href = 'registrationForm.php';
				}
			</script>";
	}

 ?>

