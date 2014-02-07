<?php
	include_once('questionsClassDAO.php');

	session_start();

	$score = questionsClassDAO::getScore($_SESSION['answers']);
 ?>

<html>
	<head>
		<title>Exam Page</title>
		<link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
		<link rel='stylesheet' type='text/css' href='css/my_style.css'>
	</head>
	<body>
		<!-- Start Showing Result -->
		<div id = 'result'>
			<div style='border: 18px solid rgb(40, 185, 105); background: rgb(220, 226, 240); width: 58.5%; margin: 10% 19%;'>
				<div style = 'font-family:serif;'>
					<p style = 'margin: 55px; font-family: georgia; font-size: 60;'>Score: <?=  $score?></p>
					<p style = 'margin: 55px; font-family: georgia; font-size: 60;'>Percentage: <?= ($score / 10) * 50 + 50; ?>%</p>
					<p style = 'margin: 55px; font-family: georgia; font-size: 60;'>Result: <?= ($score > 4) ? 'Passed': 'Failed' ?></p>
				</div>
			</div>
		</div>
		<!-- End Showing Result -->
		
		<script src = 'js/jquery-1.8.3.js' /></script>
		<script src = 'js/bootstrap.js' /></script>
		<script src = 'js/my_js.js' /></script>
	</body>
</html>