<?php 

require_once 'dbConfig.php';

function insertRecords($pdo,$first_name, $last_name, $email, $phone_number, $clinic_name, $specialization, $license_number) {

	$sql = "INSERT INTO veterinarian_records (first_name, last_name, email, phone_number, clinic_name, specialization, license_number) 
    VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $email, $phone_number, 
		$clinic_name, $specialization, $license_number]);

	if ($executeQuery) {
		return true;	
	}
}

function AllRecords($pdo) {
	$sql = "SELECT * FROM veterinarian_records";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getveterinarianById($pdo, $vet_id) {
	$sql = "SELECT * FROM veterinarian_records WHERE vet_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$vet_id])) {
		return $stmt->fetch();
	}
}

function updateveterinarian($pdo, $vet_id, $first_name, $last_name, 
	$email, $phone_number, $clinic_name, $specialization, $license_number) {

	$sql = "UPDATE veterinarian_records 
				SET first_name = ?, 
					last_name = ?, 
					email = ?, 
					phone_number = ?, 
					clinic_name = ?, 
					specialization = ?, 
					license_number = ? 
			WHERE vet_id = ?";
	$stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $email, 
		$phone_number, $clinic_name, $specialization, $license_number, $vet_id]);

	if ($executeQuery) {
		return true;
	}
}

function deleteveterinarian($pdo, $vet_id) {

	$sql = "DELETE FROM veterinarian_records WHERE vet_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$vet_id]);

	if ($executeQuery) {
		return true;
	}

}

?>