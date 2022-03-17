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


  <div class="d-flex justify-content-center">
	<form action = "server.php"  method = "POST">

  
	<label> pokemon name :</label>
	<input type="text" name="name">
  

	<label> type :</label>
	<input type="text" name="type">
  
	<label> Weakness </label>
	<input type="text" name="weakness">
  

	<button class="btn btn-primary" type="submit" name="submit">submi</button> 

	
		
	</form>
	</div>
      
    
  </body>
</html>