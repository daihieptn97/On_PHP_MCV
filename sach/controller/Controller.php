<?php 
Class Controller{
	private $model;

	function __construct()
	{
		require 'model/Model.php';
		$this->model = new Model();
	}

	public function index()
	{
		$dataHome = $this->model->getData();
		require 'views/home.php';
	}

	public function them()
	{
		require 'views/them.php';
	}

	public function thems()
	{
		$res = $this->model->them($_POST['ten'], $_POST['gia'], $_POST['nxb']);
		if($res){
			echo "Thêm thành công ! ";
			header("refresh:0.5;?page=index");
		}else{
			echo "Thêm thất bại";
		}
	}
}