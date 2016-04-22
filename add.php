<?php
 require("db.php");
 $createName=$_POST["name"];
  $createSurname=$_POST["surname"];
   $createAge=$_POST["age"];

 $createQuery=$mysqli->query("INSERT INTO coderslist(CoderName,CoderSurname,CoderAge) VALUES ('$createName','$createSurname','$createAge')");
 if($createQuery){
 	header('Location:index.php');
 }else{
 	echo "uncreated";
 }
?>