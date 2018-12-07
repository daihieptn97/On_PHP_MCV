<?php
 Class Model{

 	private $conn = null;
 	private $severName = "localhost";
 	private $userName = "root";
 	private $password = "";
 	private $databaseName = "ql_sach";

 	public function __construct()
 	{
 		$this->conn = new mysqli($this->severName, $this->userName, $this->password, $this->databaseName);
 		mysqli_set_charset($this->conn, "utf8");
 	}

 	public function getData()
 	{
 		$sql = "SELECT * FROM `sach` WHERE 1";
 		return $this->conn->query($sql);
 	}

 	public function them($name, $gia, $nxb)
 	{
 		$sql = "INSERT INTO `sach`( `name`, `giasach`, `nxb`) VALUES ('$name','$gia','$nxb' )";
 		return $this->conn->query($sql);
 	}


 }