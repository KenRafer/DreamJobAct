
<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<?php $getSEById = getSEById($pdo, $_GET['id']); ?>
	<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="firstName" value="<?php echo $getSEById['firstName']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label> 
			<input type="text" name="lastName" value="<?php echo $getSEById['lastName']; ?>">
		</p>
		<p>
			<label for="programmingLanguage">Programming Language</label>
			<input type="text" name="programmingLanguage" value="<?php echo $getSEById['programmingLanguage']; ?>">
		</p>
		<p>
			<label for="experienceYear">Years of Experience</label>
			<input type="text" name="experienceYear" value="<?php echo $getSEById['experienceYear']; ?>">
		</p>
		<p>
			<label for="certification">Certification</label>
			<input type="text" name="certification" value="<?php echo $getSEById['certification']; ?>">
		</p>
		<p>
			<input type="submit" name="editSEBtn">
		</p>
	</form>
</body>
</html>
