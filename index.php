<?php 

require_once('php/core.php');

// $showAllAdmins = $adminObj->showAllAdminRequests();
// print_r($showAllAdmins); 

// $showAllQuizzes = $quizObj->showAllQuizzes();
// print_r($showAllQuizzes); 

// $showAllQuestionsByQuizID = $questionObj->showAllQuestionsByQuizID(1);
// print_r($showAllQuestionsByQuizID);

// $showAllChoicesByQuestionID = $choiceObj->showAllChoicesByQuestionID(8);
// print_r($showAllChoicesByQuestionID);

// Displaying records from the database by ID
$getQuizByID = $quizObj->getQuizByID(1);
echo '<pre>';
print_r($getQuizByID); 
echo '</pre>';

// Accessing by index number
echo "<h1>" . $getQuizByID[1] . "</h1>";

// Accessing by column name
echo "<h1>" . $getQuizByID['date_added'] . "</h1>";

// Displaying records from the database (using fetch_all() method)
$showAllAdmins = $adminObj->showAllAdminRequests();
echo '<pre>';
print_r($showAllAdmins); 
echo '</pre>';

// Displaying all choices from the database (using fetch_all() method)
$showAllChoices = $choiceObj->showAllChoices();
echo '<pre>';
print_r($showAllChoices); 
echo '</pre>';


?>