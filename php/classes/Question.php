<?php  

class Question {
	
	public function __construct($conn) {
		try {
			$this->conn = $conn;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function showAllQuestionsByQuizID($quiz_id) {
		$sql = "SELECT * FROM questions 
				WHERE quiz_id = ? 
				";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute([$quiz_id]);
		return $stmt->fetchAll();
	}

	public function showAllChoicesByQuestionID($question_id) {
		$sql = "SELECT * FROM choices
				WHERE question_id  = ?
				";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute([$question_id]);
		return $stmt->fetchAll();
	}

	public function getQuestionByID($question_id) {
		$sql = "
				SELECT * FROM questions
				WHERE question_id = ?
				";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute([$question_id]);
		return $stmt->fetch();
	}
}

?>