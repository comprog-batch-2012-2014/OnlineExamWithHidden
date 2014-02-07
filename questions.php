<?php 
	include_once('questionsClass.php');
	include_once('questionsClassDAO.php');

	if (isset($_POST['btn-submit-answer']) && isset($_POST['choice'])) {
		$answer = $_POST['choice'];
		$answers = isset($_POST['answer']) ? $_POST['answer'] . $_POST['choice']: '';
		$i = $_POST['question_num']+1;
		questionsClassDAO::StoreQuestionInClass($i);
		if($i > 10){
			session_start();
			$_SESSION = array('answers'=> $answers);
			header('Location: result.php');
		}
	} elseif(isset($_POST['btn-submit-answer']) && !isset($_POST['choice'])) {
		$i = $_POST['question_num'];
		questionsClassDAO::StoreQuestionInClass($i);
	} elseif (!isset($i)) {		
		$i = 1;
		questionsClassDAO::StoreQuestionInClass($i);
	}
 ?>
 <html>
 	<head>
 		<title>Exam Page</title>
 		<link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
 		<link rel='stylesheet' type='text/css' href='css/my_style.css'>
 		<style type="text/css">
 		p{
 			font-size: 20px;
 			font-weight: bold;
 			text-align: center;
 		}
 		input[type=radio],  input[type=submit] {
 			margin-left: 36%;
 		}
 		</style>
 	</head>
 	<body>
 		<!-- Start Questions -->
 		<div class = 'container'>
 			<div class = 'row'>
 				<div class = 'span12'>
 					<div style='border: 18px solid rgb(199, 171, 121); background: rgb(162, 235, 232);'>
						<div style = 'font-style:tahoma; margin:20px;'>
							<form class = 'question-form' method = 'POST' action = "<?= $_SERVER['PHP_SELF']; ?>">
								<div style = 'border: 3px solid green; height: 13%; padding-top: 20px;'>
									<input type = 'hidden' name = 'question_num' value = '<?= questionsClass::getQuestionNum();?>'/>
									<input type = 'hidden' name = 'answer' value = '<?= @$answers; ?>'>
									<p style = 'font-size: 40px'>Question #<?= questionsClass::getQuestionNum(); ?></p>
								</div>
								<div style = 'border: 3px solid green;'>
									<p style = 'padding-top:12px;'><?= questionsClass::getQuestion(); ?></p>
									<input type = 'radio' value = 'a' name = 'choice'/><p><?= questionsClass::getChoiceA();?></p>
									<input type = 'radio' value = 'b' name = 'choice'/><p><?= questionsClass::getChoiceB();?></p>
									<input type = 'radio' value = 'c' name = 'choice'/><p><?= questionsClass::getChoiceC();?></p>
									<input type = 'radio' value = 'd' name = 'choice'/><p><?= questionsClass::getChoiceD();?></p>
									<input type = 'submit' value = 'Submit Answer' name = 'btn-submit-answer' class = 'btn btn-primary' style = 'font-size: 27px; height: 77px; width: 247px;'>
								</div>
							</form>
						</div>
					</div>
 				</div>
 			</div>
 		</div>
 		<!-- End Questions -->

 		<script src = 'js/jquery-1.8.3.js' /></script>
 		<script src = 'js/bootstrap.js' /></script>
 		<script src = 'js/my_js.js' /></script>
 	</body>
 </html>