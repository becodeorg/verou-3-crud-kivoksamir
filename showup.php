<?php  include_once "server.php";?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>data</title>
</head>
<body>


<?php
	$db= new mysqli('localhost' , 'root' , '' , 'CRUD') or die (mysqli_error($db));
	$result = $db->query("SELECT * FROM pokemon") or die($db->error); 
?>


	<table>
		
		<thead>
			<tr>
				<th>name</th>
				<th>type</th>
				<th>weakness</th>
				<th>operations</th>
			</tr>
		</thead>


		<?php while($row =$result->fetch_assoc()): ?>  

			<tr>
				<td><?php echo $row["name"];?></td>
				<td><?php echo $row["type"];?></td>
				<td><?php echo $row["weakness"];?></td>
				<td>
					<a href="index.php?edit = <?php echo $row['id'];?>">edit</a>
				</td>

				<td>
					<a href="showup.php?delete = <?php echo $row['id'];?>">delete</a>
				</td>
			</tr>

		<?php endwhile; ?>

		<?php var_dump($row) ;?>


	</table>

</body>
</html>