<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST">
		<table border="1">
			<theader>
				<th>ADMINID</th>
				<th>USERNAME</th>
				<th>PASSWORD</th>
				<th colspan="2">ACTION</th>
				
			</theader>
			<?php
			include ('connection.php');
			$select="SELECT * FROM adimin";
			$query=mysqli_query($conn,$select);
			while ($row=mysqli_fetch_array($query)) {
				$a=$row[''];
				$b=$row[''];
				$c=$row[''];
				// code...
			}
			?>
			
		</table>
		
	</form>

</body>
</html>