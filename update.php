<?php
require("db.php");
$upId=$_POST["id"];
$upName=$_POST["name"];
$upSurname=$_POST["surname"];
$upAge=$_POST["age"];
$updateQuery=$mysqli->query("UPDATE coderslist  SET CoderName = '$upName',CoderSurname='$upSurname',CoderAge='$upAge' WHERE CoderId='$upId'");
if($updateQuery){
	header('Location:index.php');
}else{
	echo "unupdate";
}
?>