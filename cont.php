<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Database connection

$conn = mysqli_connect('localhost','root','','Test');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into contact(name,email,subject,message) values(?,?,?,?)");
$stmt->bind_param("ssss",$name,$email,$subject,$message);
$stmt->execute();
echo "Sent Successfully...";
$stmt->close();
$conn->close();	
}
?>
