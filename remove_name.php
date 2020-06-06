
<!DOCTYPE html>
<html>
<body>
<h2>
	enter the names to remove
</h2>
	<form action="remove_name.php" method="post">
		FIRST NAME : <input type="text" name="first_name"></br>
		LAST NAME : <input type="text" name="last_name"></br>
 		<input type="submit" value="submit" name="submit">

	</form>
	</br></br>
		<a href="index.php">back</a>

		</br></br>
 
 

</body>
</html>

 



<?php
include 'dbconnection.php'; 
if (isset($_POST['submit'])){
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$query="DELETE FROM users WHERE first_name='$first_name' AND last_name='$last_name'";
	$run=mysqli_query($connection, $query);
	if($run){
		echo "deleted";
	}
	else{
		echo "not deleted";
	}


}




?>