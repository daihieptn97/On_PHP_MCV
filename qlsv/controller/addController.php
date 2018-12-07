<?php 
	include "../views/add.php";
	
	// if(!isset($_POST['btnAdd'])){
		require "../model/Model.php";
	// }
	var_dump($_POST);

	if(isset($_POST['msv'])){
		$m  = new Model();

		if($m->insert($_POST['msv'], $_POST['ten'], $_POST['tuoi'], $_POST['quequan'], $_POST['gt']) ){
			echo 'Thêm thành công';
			$_POST = null;
			require "../index.php";
		}else {
			echo 'Thêm  thất bại';
			$_POST= "null";
		}

	}
 ?>