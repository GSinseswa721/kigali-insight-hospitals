<?php
$conn = mysql_connect("localhost","root","","student")
$name = $_POST['fname']." ".$_POST['lname'];
$div = $_POST['div'];
$sql = "INSERT INTO 'list'('name','division') Values('$name','$div')";
$insert = mysqli_query($conn,$sql);
if(!$insert){
	echo "EERROOrR";
}
else{
	header("Location:/flattern/");
}
?>