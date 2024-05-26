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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<style>
		.box {
			border-style: solid;
		}
	</style>
</head>
<body>
	<div class="box">
		<form action="php/choices.php" method="POST">
			<input type="submit" value="See All" name="seeAllChoices">
		</form>
		<h1>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Doloribus quas corporis similique iusto accusantium laboriosam ad delectus dolor alias voluptate eligendi impedit repudiandae, consectetur veniam aspernatur quia est architecto tempora.</h1>
	</div>

	<script>
		$(document).ready(function(){
			$('.box').click(function(e){
				e.preventDefault();
				$.ajax({
					url:'php/choices.php',
					type:'post',
					dataType:'json',
					data: {
						seeAllChoices: 1
					}, success: function (response) {
						console.log(response.description);
					}, error: function (response) {
						console.log(response);
					}
				})

			});

		});
	</script>
</body>
</html>