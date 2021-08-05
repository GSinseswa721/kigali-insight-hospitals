<?php
$names = $_POST['names'];
$email = $_POST['email'];
$address = $_POST['address'];
$number = $_POST['number'];
$dates = $_POST['date'];
$gender = $_POST['gender'];

//Database connection
$conn = mysqli_connect('localhost','root','','Test');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into registration(names,email,address,number,dates,gender) values(?,?,?,?,?,?)");
$stmt->bind_param("sssiis",$names,$email,$address,$number,$dates,$gender);
$stmt->execute();
echo "registration Successfully...";
$stmt->close();
$conn->close();	
}
?>
<a href="portfolio.php"><b>back to home page</a></li>