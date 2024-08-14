<?php  
require_once 'core.php';

if (isset($_POST['savePostBtn'])) {
	$description = $_POST['description'];

	if ($postObj->insertNewPost($description)) {
		header("Location: ../write-post.php");
	}
}


?>