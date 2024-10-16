<?php  

require_once 'dbconfig.php';

function insertIntoRegister($pdo, $FirstName, $LastName, $Age, $Email, $Gender, $ContactNumber, $RegisterDate, $RegisterTime) {

	$sql = "INSERT INTO register (FirstName, LastName, Age, Email, Gender, ContactNumber, RegisterDate, RegisterTime) VALUES (?,?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute(
		[$FirstName, $LastName, $Age, $Email, $Gender, $ContactNumber, $RegisterDate, $RegisterTime]
	);

	if ($executeQuery) {
		return true;
	}
}

function seeAllRegister($pdo) {
	$sql = "SELECT * FROM register";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();

	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getRegisterByID($pdo, $RegisterID) {
	$sql = "SELECT * FROM register WHERE RegisterID = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$RegisterID]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function updateARegister($pdo, $RegisterID, $FirstName, $LastName, $Age, $Email, $Gender, $ContactNumber, $RegisterDate, $RegisterTime) {

	$sql = "UPDATE register
				SET FirstName = ?,
					LastName = ?,
					Age = ?,
					Email = ?,
					Gender = ?,
					ContactNumber = ?,
					RegisterDate = ?,
					RegisterTime = ?
			WHERE RegisterID = ?";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute(
		[$RegisterID, $FirstName, $LastName, $Age, $Email, $Gender, $ContactNumber, $RegisterDate, $RegisterTime]
	);

	if ($executeQuery) {
		return true;
	}

}

function deleteARegister($pdo, $RegisterID) {

	$sql = "DELETE FROM register WHERE RegisterID = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$RegisterID]);

	if ($executeQuery) {
		return true;
	}
}

?>