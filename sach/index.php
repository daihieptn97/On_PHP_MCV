<?php 

	require "controller/Controller.php";
	$c  = new Controller();
	
	if(!isset($_GET['page']) || $_GET['page'] == "home"){
		$c->index();
	}
	else{
		$c->{$_GET['page']}();
	}


 ?>