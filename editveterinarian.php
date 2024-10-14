<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Veterinarian Form</title>
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
	<?php $getveterinarianbyid = getveterinarianById($pdo, $_GET['vet_id']); ?>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="first_name">First Name:</label> 
			<input type="text" name="first_name" value="<?php echo $getveterinarianbyid['first_name']; ?>">
		</p>
		<p>
			<label for="last_name">Last Name:</label> 
			<input type="text" name="last_name" value="<?php echo $getveterinarianbyid['last_name']; ?>">
		</p>
		<p>
			<label for="email">Email:</label>
			<input type="email" name="email" value="<?php echo $getveterinarianbyid['email']; ?>">
		</p>
		<p>
			<label for="phone_number">Phone Number:</label>
			<input type="tel" name="phone_number" value="<?php echo $getveterinarianbyid['phone_number']; ?>">
		</p>
		<p>
			<label for="clinic_name">Clinic Name:</label>
			<input type="text" name="clinic_name" value="<?php echo $getveterinarianbyid['clinic_name']; ?>">
		</p>
		<p>
			<label for="specialization">Specialization:</label>
			<input type="text" name="specialization" value="<?php echo $getveterinarianbyid['specialization']; ?>"></p>
		<p>
			<label for="license_number">License Number:</label>
			<input type="text" name="license_number" value="<?php echo $getveterinarianbyid['license_number']; ?>">
			<input type="submit" name="editBtn">
		</p>
	</form>
</body>
</html>