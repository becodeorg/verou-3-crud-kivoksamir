<?php




@$name = $_POST['name'] ; 
@$type = $_POST['type'];
@$weakness = $_POST['weakness'];



$db = new mysqli ('localhost' , 'root' , '','CRUD') or die (mysqli_error($db));



 if (isset($_POST['submit'])){
	
	 $db->query("INSERT INTO pokemon (name , type , weakness) VALUES ('$name' , '$type' , '$weakness')") ;
	  header('location:showup.php');

 };

 if(isset($_GET['delete'])){
 	$id=$_GET['delete'];
 	$db->query("DELETE FROM pokemon WHERE id=$id");

 };









?>