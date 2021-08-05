<!DOCTYPE html>
<html>
<body>
<style>
body
{
background-color:pink;
}
</style>
<h3>CONTACT DETAILS</h3>
<table border="">
<tr>
<td>Names</td>
<td>Email</td>
<td>Address</td>
<td>Number</td>
<td>Dates</td>
<td>Gender</td>
</tr>
<?php
$conn = mysqli_connect('localhost','root','','Test');
mysqli_select_db($con,"registration");
$query=mysqli_query($con,"select*from
registration");
while($record=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php echo $record['names']?></td>
<td><?php echo $record['email']?></td>
<td><?php echo $record['address']?></td>
<td><?php echo $record['number']?></td>
<td><?php echo $record['dates']?></td>
<td><?php echo $record['gender']?></td>
</tr>
<?php
}
?>
</table>