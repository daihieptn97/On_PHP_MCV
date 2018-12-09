<?php 

class Controller {

	private $model;

	function __construct(){
		require "./model/Model.php";
		$this->model = new Model();
	}

	public  function index(){
		$dataHome = $this->model->getData();
		require "./views/home.php";
	}

	public function them(){
		
		require "./views/them.php";
	}

	public function sua(){
		$dataTruyen = $this->model->getDataTruyen($_GET['id'])->fetch_assoc();
		require "./views/them.php";
	}

	public function thems(){
		
		if($this->model->them($_POST['ten'], $_POST['gia'], $_POST['tacgia'], $_POST['nxb'], $_POST['nam'], $_POST['time_create']) ){
			echo "Them thanh cong !";
			header("refresh:1;url=?page=index");

		}else{
			echo "Them that bai";
		}
	}
	public function suas(){
		
		if($this->model->sua($_POST['ten'], $_POST['gia'], $_POST['tacgia'], $_POST['nxb'], $_POST['nam'], $_POST['time_create'], $_POST['id']) ){
			echo "sua thanh cong !";
			header("refresh:1;url=?page=index");

		}else{
			echo "sua that bai";
		}
	}


	public function xoa(){
		
		if($this->model->xoa($_GET['id'])){
			echo "xoa thanh cong !";
			header("refresh:1;url=?page=index");
		}else{
			echo "xoa that bai";
		}
	}


}