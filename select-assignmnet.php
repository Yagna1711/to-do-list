<?php
session_start();
?>

<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "server not found";
}

if(!mysqli_select_db($con,'yagna'))
{
	echo"database not found";
}
?>

<!DOCTYPE html>
<head>
	<title> yagna </title>
</head>
<body>
	<table border="1">
		<th> ID </th>
		<th> TASK </th>
		<th> DATE </th>
		<th> MESSAGE </th>
	
<?php
$email=$_SESSION["email2"];
$sql="SELECT * FROM assignment where status=1 && email='$email'";
$query=mysqli_query($con,$sql);
while($fetch=mysqli_fetch_array($query))
{
?>
	<tr>
		<td><?php echo $fetch['id'];?></td>
		<td><?php echo $fetch['task'];?></td>
		<td><?php echo $fetch['dates'];?></td>
		<td><?php echo $fetch['message'];?></td>
		<td><a href="edit-assignment.php?id=<?php echo $fetch['id'];?>"> EDIT </a></td>
		<td><a href="delete-assignment.php?id=<?php echo $fetch['id'];?>"> DELETE </a></td>
		<td><a href="done-assignment.php?id=<?php echo $fetch['id'];?>"> DONE </a></td> 
	</tr>
	
	<?php
		
}	
	
	// else
	// {
	// 	echo "wrong";
	// }
?>

</table>
</body>
</html>