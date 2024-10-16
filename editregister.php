<?php require_once 'models.php'; ?>
<?php require_once 'handleforms.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2 style="color: red">The Register ID is <?php echo $_GET['RegisterID']; ?></h2>

	<?php $getRegisterByID = getRegisterByID($pdo, $_GET['RegisterID']); ?>
	<form action="handleforms.php?RegisterID=<?php echo $getRegisterByID['RegisterID']; ?>" method="POST">
		<p>
			<label for="FirstName">First Name</label> 
			<input type="text" name="FirstName" value="<?php echo $getRegisterByID['FirstName']; ?>">
		</p>
		<p>
			<label for="LastName">Last Name</label> 
			<input type="text" name="LastName" value="<?php echo $getRegisterByID['LastName']; ?>">
		</p>
		<p>
			<label for="Age">Age</label>
			<input type="text" name="Age" value="<?php echo $getRegisterByID['Age']; ?>">
		</p>
		<p>
			<label for="Email">Email</label> 
			<input type="text" name="Email" value="<?php echo $getRegisterByID['Email']; ?>">
		</p>
		<p>
			<label for="Gender">Gender</label> 
			<input type="text" name="Gender" value="<?php echo $getRegisterByID['Gender']; ?>">
		</p>
		<p>
			<label for="ContactNumber">Contact Number</label>
			<input type="text" name="ContactNumber" value="<?php echo $getRegisterByID['ContactNumber']; ?>">
		</p>
		<p>
			<label for="RegisterDate">Register Date</label> 
			<input type="text" name="RegisterDate" value="<?php echo $getRegisterByID['RegisterDate']; ?>">
		<p>
			<label for="RegisterTime">Register Time</label> 
			<input type="text" name="RegisterTime" value="<?php echo $getRegisterByID['RegisterTime']; ?>">
			<input type="submit" name="editRegisterBtn">
		</p>
	</form>

</body>
</html>