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
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getSEById = getSEById($pdo, $_GET['id']); ?>
	<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">

		<div class="SEContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getSEById['firstName']; ?></p>
			<p>Last Name: <?php echo $getSEById['lastName']; ?></p>
			<p>Programming Language: <?php echo $getSEById['programmingLanguage']; ?></p>
			<p>Years of Experience: <?php echo $getSEById['experienceYear']; ?></p>
			<p>Certification: <?php echo $getSEById['certification']; ?></p>
			<input type="submit" name="deleteSEBtn" value="Delete">
		</div>
	</form>
</body>
</html>