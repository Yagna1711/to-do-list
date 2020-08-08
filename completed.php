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

$sql="SELECT * FROM assignment where status=2;";
$query=mysqli_query($con,$sql);
while($fetch=mysqli_fetch_array($query))
{
?>
	<tr>
		<td><?php echo $fetch['id'];?></td>
		<td><?php echo $fetch['task'];?></td>
		<td><?php echo $fetch['dates'];?></td>
		<td><?php echo $fetch['message'];?></td>
		<td><a href="undo-assignment.php?id=<?php echo $fetch['id'];?>"> UNDO </a></td>
	</tr>
	<?php	
}	

?>

</table>
</body>
</html>