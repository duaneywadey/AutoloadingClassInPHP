<?php  

class Post {

	public function __construct($conn) {
		try {
			$this->conn = $conn;
		} 
		catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	public function seeAllPosts() {
		$sql = "SELECT * FROM posts ORDER BY date_posted DESC";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function insertNewPost($description) {
		$sql = "INSERT INTO posts (description) VALUES(?)";
		$stmt = $this->conn->prepare($sql);
		return $stmt->execute([$description]);
	}
}


?>