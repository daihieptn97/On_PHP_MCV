<?php 
	Class Model{
		private $conn;
		private $saveName = "localhost";
		private $username = "root";
		private $password = "";
		private $databasename = "LOP_sinhvien";
	
		function __construct()
		{
			$this->conn =  new mysqli($this->saveName, $this->username, $this->password, $this->databasename);
			mysqli_set_charset($this->conn, "utf8");
			// if($this->conn->connect_error){
			// 	die("loi : " . $conn->connect_error);
			// }
		}

		public function getData()
		{
			$sql = "SELECT * from sinhvien";
			$res =  $this->conn->query($sql);
			return $res;
		}

		public function insert($msv, $ten, $tuoi, $quequan, $gt)
		{
			$sql =  "INSERT INTO `sinhvien` (`msv`, `ten`, `tuoi`, `quequan`, `gt`) VALUES ('$msv', ' $ten', '$tuoi', '$quequan', '$gt')";
			// $this->conn->query($sql);
			// var_dump($sql); die();

			return $this->conn->query($sql);
		}

		public function delete($id)
		{
			$sql = "DELETE FROM `sinhvien` WHERE msv = '$id' ";
			return $this->conn->query($sql);
		}

		public function search($msv)
		{
			$sql  = "SELECT * FROM `sinhvien` WHERE msv LIKE '%$msv%' ";
			// var_dump($sql);
			$res =  $this->conn->query($sql);
			return $res;
		}

		public function getSutudenByMSV($msv)
		{
			$sql  = "SELECT * FROM `sinhvien` WHERE msv = '$msv' ";
			$res =  $this->conn->query($sql);
		
			return $res->fetch_assoc();
		}
			
		public function edit($msv, $ten, $tuoi, $quequan, $gt)
	    {
	    	$sql = "UPDATE `sinhvien` SET `ten`='$ten',`tuoi`='$tuoi',`quequan`='$quequan',`gt`='$gt' WHERE msv = '$msv' ";
	    	return $this->conn->query($sql);
	    }
	}
 ?>