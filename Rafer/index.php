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
	<h3>Welcome to Software Engineering! Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="firstName">First Name</label> <input type="text" name="firstName"></p>
		<p><label for="lastName">Last Name</label> <input type="text" name="lastName"></p>
		<p><label for="programmingLanguage">Programming Language</label> <input type="text" name="programmingLanguage"></p>
		<p><label for="experienceYear">Years of Experience</label> <input type="text" name="experienceYear"></p>
		<p><label for="certification">Certification</label> <input type="text" name="certification">
			<input type="submit" name="insertNewSEBtn">
		</p>
	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Programming Language</th>
	    <th>Years of Experience</th>
	    <th>Certification</th>
	  </tr>

	  <?php $seeAllSE = seeAllSE($pdo); ?>
	  <?php foreach ($seeAllSE as $row) { ?>
	  <tr>
	  	<td><?php echo $row['id']; ?></td>
	  	<td><?php echo $row['firstName']; ?></td>
	  	<td><?php echo $row['lastName']; ?></td>
	  	<td><?php echo $row['programmingLanguage']; ?></td>
	  	<td><?php echo $row['experienceYear']; ?></td>
	  	<td><?php echo $row['certification']; ?></td>
	  	<td>
	  		<a href="editSE.php?id=<?php echo $row['id'];?>">Edit</a>
	  		<a href="deleteSE.php?id=<?php echo $row['id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>