<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table>
<tr>
 <th>id</th>
 <th>username</th>
 <th>password</th>
</tr>	
<tr>
	<?php 
	include("connection.php");
	$sql="select * from customer";
	$query=mysqli_query($conn,$sql);
	while ($fetch=mysqli_fetch_array($query)) {
		?>
		<tr>
			<td><?php echo $fetch['id'];?></td>
			<td><?php echo $fetch['username'];?></td>
			<td><?php echo $fetch['password'];?></td>
		</tr>
		<?php
	}
	?>
</tr>
</table>
</body>
</html>