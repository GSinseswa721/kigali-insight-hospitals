<?php
$names = $_POST['names'];
$email = $_POST['email'];
$address = $_POST['address'];
$number = $_POST['number'];
$dates = $_POST['date'];
$hospital = $_POST['hospital'];
$gender = $_POST['gender'];

//Database connection
$conn = mysqli_connect('localhost','root','','final');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into fin(names,email,address,number,dates,hospitals,gender) values(?,?,?,?,?,?,?)");
$stmt->bind_param("sssiiss",$names,$email,$address,$number,$dates,$hospitals,$gender);
$stmt->execute();
echo "registration Successfully...";
$stmt->close();
$conn->close();	
}
?>
<a href="portfolio.php"><b>back to home page</a></li>