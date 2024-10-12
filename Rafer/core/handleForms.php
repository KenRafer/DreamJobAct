<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertNewSEBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$programmingLanguage = trim($_POST['programmingLanguage']);
	$experienceYear = trim($_POST['experienceYear']);
	$certification = trim($_POST['certification']);

	if (!empty($firstName) && !empty($lastName) && !empty($programmingLanguage) && !empty($experienceYear) && !empty($certification)) {
			$query = insertIntoSE($pdo, $firstName, $lastName, 
			$programmingLanguage, $experienceYear, $certification);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}


if (isset($_POST['editSEBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$programmingLanguage = trim($_POST['programmingLanguage']);
	$experienceYear = trim($_POST['experienceYear']);
	$certification = trim($_POST['certification']);

	if (!empty($id) && !empty($firstName) && !empty($lastName) && !empty($programmingLanguage) && !empty($experienceYear) && !empty($certification)) {

		$query = updateASE($pdo, $firstName, $lastName, $programmingLanguage, $experienceYear, $certification);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}


if (isset($_POST['deleteSEBtn'])) {

	$query = deleteASE($pdo, $_GET['id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}