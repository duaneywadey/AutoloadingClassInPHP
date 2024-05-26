<?php  

class Choice {

	public function __construct($conn) {
		try {
			$this->conn = $conn;
		} 
		catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	// For demo purposes
	public function showAllChoices() {
		$sql = "SELECT * FROM choices";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		$data = $stmt->fetch();
		$result = [
			"description" => $data['description']
		];
		echo json_encode($result);
	}

	public function showAllChoicesByQuestionID($question_id) {
		$sql = "SELECT * FROM choices 
			WHERE question_id = ?
			";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute([$question_id]);
		return $stmt->fetchAll();
	}
}


?>