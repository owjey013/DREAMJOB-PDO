<?php  

require_once 'dbconfig.php';
require_once 'models.php';

if (isset($_POST['insertNewRegisterBtn'])) {

	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Age = $_POST['Age'];
	$Email = $_POST['Email'];
	$Gender = $_POST['Gender'];
	$ContactNumber = $_POST['ContactNumber'];
	$RegisterDate = $_POST['RegisterDate'];
	$RegisterTime = $_POST['RegisterTime'];

	$query = insertIntoRegister($pdo, $FirstName, $LastName, $Age, $Email, $Gender, $ContactNumber, $RegisterDate, $RegisterTime);

	if ($query) {
		header("Location: index.php");
	}
	else {
		echo "Query unsuccessful. Insertion failed!";
	}

}


if (isset($_POST['editRegisterBtn'])) {
	$RegisterID = $_GET['RegisterID'];
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Age = $_POST['Age'];
	$Email = $_POST['Email'];
	$Gender = $_POST['Gender'];
	$ContactNumber = $_POST['ContactNumber'];
	$RegisterDate = $_POST['RegisterDate'];
	$RegisterTime = $_POST['RegisterTime'];

	$query = updateARegister($pdo, $RegisterID, $FirstName, $LastName, $Age, $Email, $Gender, $ContactNumber, $RegisterDate, $egisterTime);

	if ($query) {
		header("Location: index.php");
	}

	else {
		echo "Update Failed";
	}
}

if (isset($_POST['deleteRegisterBtn'])) {
	$student_id = $_GET['RegisterID'];
	$query = deleteARegister($pdo, $RegisterID);

	if ($query) {
		header("Location: index.php");
	}

	else {
		echo "Deletion failed";
	}
}
?>