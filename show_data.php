 <html>
<body>
 
	 <table>
	 	<tr>
	 		<td>id</td>
	 		<td>first name</td>
	 		<td>last name</td>
	 	</tr>

	 	 
	 <?php
             include 'dbconnection.php'; 
              
	 
	         $query="SELECT * FROM users";
	         $run=mysqli_query($connection, $query);
	         while($row=mysqli_fetch_array($run)){
	         	?>
	         		 <tr> 
		         	 <td><?php echo $row['id'] ?></td>
		         	 <td><?php echo $row['first_name'] ?></td>
		         	 <td><?php echo $row['last_name'] ?></td>  
	        	   </tr>

	        	<?php  }  ?>

	          
	      

	 
	         	 


	          
	        
	 </table>


	 </br></br>
		<a href="index.php">back</a>
 <!--

 -->
 

</body>
</html>
 