<?php
 require("db.php");
 $getId=$_GET["id"];
 $deleteQuery=$mysqli->query("DELETE FROM coderslist WHERE CoderId=$getId");
 if($deleteQuery){
 	header('Location:index.php');
 }else{
 	echo "item undelete";
 }
?>