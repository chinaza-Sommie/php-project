<?php 

	require "databaseQuery.php";


   $conn = new dbQuery();


   $conn->drop("project")->execute();

 
?>


