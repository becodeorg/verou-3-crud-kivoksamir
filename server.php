<?php

session_start();



@$name = $_POST['name'] ; 
@$type = $_POST['type'];
@$weakness = $_POST['weakness'];

$db = new mysqli ('localhost' , 'root' , '','CRUD') or die (mysqli_error($db));
$result = $db->query("SELECT * FROM pokemon") or die($db->error); 


 if (isset($_POST['submit'])){

	 $db->query("INSERT INTO pokemon (name , type , weakness) 
	 VALUES ('$name' , '$type' , '$weakness')") ;

		$_SESSION['message'] = "pokemon has geen saved";
		$_SESSION['msg_type']="success";
		
		header('location:showup.php');

 };

 if(isset($_GET['delete'])){

	$id=$_GET['delete'];
 	$db->query("DELETE FROM pokemon WHERE id=$id") or die (mysqli_error($db));

	$_SESSION['message']="pokemon has been deleted";
	$_SESSION['msg_type']="danger";

 };

 if(isset($_GET['edit'])){
	 $edit = $GET_['id'];
	 $result=$db->query("SELECT * FROM pokemon WHERE id=$id");
	 
		$row=$result->fetch_array();
		$name = $row['name'];
		$type = $row['type'];
		$weakness = $row['weakness'];
	
 }


 

 



