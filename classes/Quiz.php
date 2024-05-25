<?php  

class Quiz {

	public function __construct($conn) {
		try {
			$this->conn = $conn;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function showAllQuizzes() {
		$sql = "SELECT * FROM quizzes";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function getQuizByID($quiz_id) {
	$sql = "
			SELECT * FROM quizzes 
			WHERE quiz_id = ?
			";
	$stmt = $this->conn->prepare($sql);
	$stmt->execute([$quiz_id]);
	return $stmt->fetch();
	
	}
}
?>