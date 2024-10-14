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
	<h3>Welcome to the Veterinary Management System. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
		<p><label for="first_name">First Name</label> <input type="text" name="first_name"></p>
		<p><label for="last_name">Last Name</label> <input type="text" name="last_name"></p>
		<p><label for="email">Email</label> <input type="email" name="email"></p>
		<p><label for="phone_number">Phone Number</label> <input type="tel" name="phone_number"></p>
		<p><label for="clinic_name">Clinic Name</label> <input type="text" name="clinic_name"></p>
		<p><label for="specialization">Specialization</label> <input type="text" name="specialization"></p>
		<p><label for="license_number">License Number</label> <input type="number" name="license_number">
			<input type="submit" name="insertBtn">
		</p>
	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Veterinarian ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Email</th>
	    <th>Phone Number</th>
	    <th>Clinic Name</th>
	    <th>Specialization</th>
	    <th>License Number</th>
	    <th>Action</th>
	  </tr>

	  <?php $AllRecords = AllRecords($pdo); ?>
	  <?php foreach ($AllRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['vet_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['email']; ?></td>
	  	<td><?php echo $row['phone_number']; ?></td>
	  	<td><?php echo $row['clinic_name']; ?></td>
	  	<td><?php echo $row['specialization']; ?></td>
	  	<td><?php echo $row['license_number']; ?></td>
	  	<td>
	  		<a href="editveterinarian.php?vet_id=<?php echo $row['vet_id'];?>">Edit</a>
	  		<a href="deleteveterinarian.php?vet_id=<?php echo $row['vet_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>
</body>
</html>