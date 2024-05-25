<?php 

require_once('php/core.php');

$showAllAdmins = $adminObj->showAllAdminRequests();
print_r($showAllAdmins); 

$showAllQuizzes = $quizObj->showAllQuizzes();
print_r($showAllQuizzes); 

?>