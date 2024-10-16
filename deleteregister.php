<?php  require 'dbconfig.php';?>
<?php  require 'handleforms.php';?>

<form action="handleforms.php?RegisterID=<?php echo $_GET['RegisterID']; ?>" method="POST">
	<label for="question">Are you sure you want to delete Register <?php echo $_GET['RegisterID'] ?></label>
	<input type="submit" name="deleteRegisterBtn" value="Delete">
</form>
</html>