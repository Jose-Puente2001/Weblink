<?php require_once 'db.php'; ?>

<?php

if(isset($_POST['save_app'])){

	$name = $_POST['name'];
	$link = $_POST['url'];


   $query = "INSERT INTO link(name, link) VALUES ('$name', '$link')";
   $result = mysqli_query($connection, $query);

   if(!result){
   	   die('fallied');
   }
   
   $_SESSION['message'] = "Note created successfully";
   $_SESSION['message_type'] = "success";

   header("Location: index.php");
}