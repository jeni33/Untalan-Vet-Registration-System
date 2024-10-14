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
 <h1>Are you sure you want to delete this Vet info?</h1>
 <?php $getveterinarianbyid = getVeterinarianById($pdo, $_GET['vet_id']); ?>
 <form action="core/handleForms.php?vet_id=<?php echo $_GET['vet_id']; ?>" method="POST">

  <div class="VeterinarianContainer" style="border-style: solid; 
  font-family: 'Arial';">
   <p>First Name: <?php echo $getveterinarianbyid['first_name']; ?></p>
   <p>Last Name: <?php echo $getveterinarianbyid['last_name']; ?></p>
   <p>Email: <?php echo $getveterinarianbyid['email']; ?></p>
   <p>Phone Number: <?php echo $getveterinarianbyid['phone_number']; ?></p>
   <p>Clinic Name: <?php echo $getveterinarianbyid['clinic_name']; ?></p>
   <p>Specialization: <?php echo $getveterinarianbyid['specialization']; ?></p>
   <p>License Number: <?php echo $getveterinarianbyid['license_number']; ?></p>
   <input type="submit" name="deleteBtn" value="Delete">
  </div>
 </form>
</body>
</html>