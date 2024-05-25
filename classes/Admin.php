<?php  

class Admin {

	public function __construct($conn) {
		try {
			$this->conn = $conn;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	function showAllAdminRequests() {
		$sql = "
				SELECT
					admin_requests.admin_request_id AS admin_request_id, 
					users.user_id AS user_id,
					users.username AS username,
					admin_requests.admin_request_letter AS admin_request_letter
				FROM users
				JOIN admin_requests ON users.user_id = admin_requests.user_id
				WHERE admin_requests.is_approved = 0
				";
		$stmt = $this->conn->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}

?>