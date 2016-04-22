<?php
require ("db.php");


$cod=$mysqli->query("SELECT * FROM coderslist");

?>

<!DOCTYPE html>
<html>
<head>
	<title>List of Coders</title>
	<style type="text/css">
          body{
          	background-color: gray;
          	
          }
	</style>
</head>
<body>
   <h2>List of Coders</h2>
   <a href="create.php">Create</a>
   <table>
   	    <tr>
   	    	<th>Id</th>
   	    	<th>Name</th>
   	    	<th>Surname</th>
   	    	<th>Age</th>
   	    	<th>Edit</th>
   	    	<th>Delete</th>
   	    </tr>
   	    <?php
           while($row=$cod->fetch_object()){
                echo " <tr>
   	    	             <td>$row->CoderId</td>
   	    	             <td>$row->CoderName</td>
   	    	             <td>$row->CoderSurname</td>
   	    	             <td>$row->CoderAge</td>
   	    	             <td><a href='edit.php?id=$row->CoderId & name=$row->CoderName & surname=$row->CoderSurname & age=$row->CoderAge'>Edit</a></td>
   	    	             <td><a href='delete.php?id=$row->CoderId'>Delete</a></td>
   	                   </tr>";
           }
   	    ?>

   </table>
</body>
</html>