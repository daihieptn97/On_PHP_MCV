<?php 
	/**
	 * summary
	 */
	class Controller 
	{
	    /**
	     * summary
	     */
	    public $model;
	    public function __construct()
	    {
	        require "model/Model.php";
			//$m  = new Model();
			$this->model = new Model();
	    }

	    public function index()
	    {
	    	
	    	$dataHome =  $this->model->getData();
			require "views/home.php";	
	    }

	    public function add()
	    {
	    	require "views/add.php";
	    }

	    public function doAdd()
	    {
	    	if($this->model->insert($_POST['msv'], $_POST['ten'], $_POST['tuoi'], $_POST['quequan'], $_POST['gt']) ){
	    		echo 'Them thanh cong';
	    		header("refresh:1;?page=home");
	    	}else {
	    		echo 'khong thanh cong';
	    	}
	    }

	    public function delete()
	    {
	    	if($this->model->delete( $_GET['id']) ){
	    		echo 'Thanh cong';
	    		header("refresh:0.2;?page=home");
	    	}else {
	    		// echo 'khong thanh cong';
	    	}
	    }

	    public function search()
	    {
	    	$dataHome =  $this->model->search($_POST['search']);
	    	// var_dump($_POST['search']);
			require "views/home.php";	
	    }

	    public function edit()
	    {
	    	$msv = $_GET['id'];

	    	$dataStudentByID = $this->model->getSutudenByMSV($_GET['id']);

	    	require "views/add.php";
	    }

	    public function doEdit()
	    {
	    	// edit($msv, $ten, $tuoi, $quequan, $gt)
	    	if($this->model->edit($_POST['msv'], $_POST['ten'], $_POST['tuoi'], $_POST['quequan'], $_POST['gt']) ){
	    		echo 'sua thanh cong';
	    		header("refresh:1;?page=home");
	    	}else {
	    		echo 'khong thanh cong';
	    	}
	    }
	}
 ?>