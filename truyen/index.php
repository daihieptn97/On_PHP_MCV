<?php 

require "./controller/Controller.php";

$c = new Controller();

if(isset($_GET['page'])){
	$c->{$_GET['page']}();
}else {
	$c->index();
}
