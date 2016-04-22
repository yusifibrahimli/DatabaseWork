<?php
 require("db.php");
 $updateId=$_GET["id"];
 $updateName=$_GET["name"];
 $updateSurname=$_GET["surname"];
 $updateAge=$_GET["age"];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $updateId;?>">  	  
          </input>
    	  Ad:<input type="text" name="name" value="<?php echo $updateName;?>">  	  
          </input>
     	  Soyad:<input type="text" name="surname" value="<?php echo $updateSurname;?>">	  
     	  </input>
     	  Yash:<input type="text" name="age" value="<?php echo $updateAge;?>">
     	  </input>
     	  <input type="submit" value="update">
     	  </input>
    </form>
</body>
</html>

