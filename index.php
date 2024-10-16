<?php require_once 'dbconfig.php'; ?>
<?php require_once 'models.php'; ?>
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
	<h3>Welcome to the Owjey's Management System. Input your details here to register</h3>
	<form action="handleforms.php" method="POST">
		<p><label for="FirstName">First Name</label> <input type="text" name="FirstName"></p>
		<p><label for="LastName">Last Name</label> <input type="text" name="LastName"></p>
		<p><label for="Age">Age</label> <input type="text" name="Age"></p>
		<p><label for="Email">Email</label> <input type="text" name="Email"></p>
		<p><label for="Gender">Gender</label> <input type="text" name="Gender"></p>
		<p><label for="ContactNumber">ContactNumber</label> <input type="text" name="ContactNumber"></p>
		<p><label for="RegisterDate">RegisterDate</label> <input type="text" name="RegisterDate"></p>
        <p><label for="RegisterTime">RegisterTime</label> <input type="text" name="RegisterTime">
			<input type="submit" name="insertNewRegisterBtn">
		</p>
	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Register ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Age</th>
	    <th>Email</th>
	    <th>Gender</th>
	    <th>Contact Number</th>
	    <th>Register Date</th>
	    <th>Register Time</th>
	  </tr>

	  <?php $insertIntoRegister = seeAllRegister($pdo); ?>
	  <?php foreach ($insertIntoRegister as $row) { ?>
	  <tr>
	  	<td><?php echo $row['RegisterID']; ?></td>
	  	<td><?php echo $row['FirstName']; ?></td>
	  	<td><?php echo $row['LastName']; ?></td>
	  	<td><?php echo $row['Age']; ?></td>
	  	<td><?php echo $row['Email']; ?></td>
	  	<td><?php echo $row['Gender']; ?></td>
	  	<td><?php echo $row['ContactNumber']; ?></td>
	  	<td><?php echo $row['RegisterDate']; ?></td>
        <td><?php echo $row['RegisterTime']; ?></td>
	  	<td>
	  		<a href="editregister.php?RegisterID=<?php echo $row['RegisterID'];?>">Edit</a>
	  		<a href="deleteregister.php?RegisterID=<?php echo $row['RegisterID'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>