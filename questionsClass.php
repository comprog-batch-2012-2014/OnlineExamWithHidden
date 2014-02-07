<?php 
	class questionsClass{
		private static $question_num;
		private static $question;
		private static $choiceA;
		private static $choiceB;
		private static $choiceC;
		private static $choiceD;
		private static $correct_answer;

		public function __construct($config){
			if ($config['question_num'] != "") {
				self::$question_num = $config['question_num'];
			}
			if ($config['question'] != "") {
				self::$question = $config['question'];
			}
			if ($config['choiceA'] != "") {
				self::$choiceA = $config['choiceA'];
			}
			if ($config['choiceB'] != "") {
				self::$choiceB = $config['choiceB'];
			}
			if ($config['choiceC'] != "") {
				self::$choiceC = $config['choiceC'];
			}
			if ($config['choiceD'] != "") {
				self::$choiceD = $config['choiceD'];
			}
			if($config['correct_answer'] != ""){
				self::$correct_answer = $config['correct_answer'];
			}
		}

		public static function getQuestionNum(){
			return self::$question_num;
		}

		public static function getQuestion(){
			return self::$question;
		}

		public static function getChoiceA(){
			return self::$choiceA;
		}

		public static function getChoiceB(){
			return self::$choiceB;
		}

		public static function getChoiceC(){
			return self::$choiceC;
		}

		public static function getChoiceD(){
			return self::$choiceD;
		}

		public static function getAnswer(){
			return self::$correct_answer;
		}
	}
 ?>