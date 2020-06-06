
<?php
 

$server='localhost:3307';
$username='root';
$password='password';
$database="add_remove_project";

$connection=mysqli_connect($server, $username,$password ,$database );

if($connection){
 }
else{
	// echo "not successful".mysqli_error($connection);
	 die($connection);
}




?>