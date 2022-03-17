<?php  include_once "server.php";?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>


  <?php
	$db= new mysqli('localhost' , 'root' , '' , 'CRUD') or die (mysqli_error($db));
	$result = $db->query("SELECT * FROM pokemon") or die($db->error); 
?>

<div class="container">
	<table class="table">
		
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
					<button><a href="index.php?edit = <?php echo $row['id'];?>">edit</a></button>
				</td>

				<td>
					<button><a href="showup.php?delete= <?php echo $row['id'];?>">delete</a></button>
				</td>
				
			</tr>

		<?php endwhile; ?>


	</table>
		</div>




	<a href="index.php">back</a>

	

  
      
</body>
</html>