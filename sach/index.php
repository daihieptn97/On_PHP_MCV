<?php 
require 'controller/Controller.php';

$c = new Controller();

if(isset($_GET) ){
	$c->{$_GET['page']}();
}else {
	$c->index();
}