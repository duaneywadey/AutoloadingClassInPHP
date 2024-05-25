<?php 

require_once('php/core.php');

$showAllAdmins = $adminObj->showAllAdminRequests();
print_r($showAllAdmins); 

$showAllQuizzes = $quizObj->showAllQuizzes();
print_r($showAllQuizzes); 

$getQuizByID = $quizObj->getQuizByID(1);
print_r($getQuizByID); 

$showAllQuestionsByQuizID = $questionObj->showAllQuestionsByQuizID(1);
print_r($showAllQuestionsByQuizID);

$showAllChoicesByQuestionID = $questionObj->showAllChoicesByQuestionID(8);
print_r($showAllChoicesByQuestionID);


?>