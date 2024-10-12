<!-- Functions for interacting with the database -->

<?php 

require_once 'dbConfig.php';

function insertIntoSE($pdo,$firstName, $lastName, $programmingLanguage, $experienceYear, $certification) {

	$sql = "INSERT INTO SoftwareEngineer (firstName,lastName,programmingLanguage,experienceYear,certification) VALUES (?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$firstName, $lastName, $programmingLanguage, $experienceYear, 
		$certification]);

	if ($executeQuery) {
		return true;	
	}
}

function seeAllSE($pdo) {
	$sql = "SELECT * FROM SoftwareEngineer";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getSEByID($pdo, $id) {
	$sql = "SELECT * FROM SoftwareEngineer WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$id])) {
		return $stmt->fetch();
	}
}

function updateASE($pdo, $firstName, $lastName, 
	$programmingLanguage, $experienceYear, $certification) {

	$sql = "UPDATE  SortwareEngineer
				SET firstName = ?, 
					lastName = ?, 
					programmingLanguage = ?, 
					experienceYear = ?, 
					certification = ? 
			WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$firstName, $lastName, $programmingLanguage, 
		$experienceYear, $certification]);

	if ($executeQuery) {
		return true;
	}
}



function deleteASE($pdo, $id) {

	$sql = "DELETE FROM SoftwareEngineer WHERE id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$id]);

	if ($executeQuery) {
		return true;
	}

}




?>