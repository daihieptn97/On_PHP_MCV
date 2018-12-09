<?php
class Model{
	
	private $conn;

	function __construct(){
		$this->conn = new mysqli("localhost", "root", "", "ql_truyen");
		mysqli_set_charset($this->conn, "utf8");
	}

	function getData(){
		$sql = "SELECT * FROM truyen";
		return $this->conn->query($sql);
	}

	function xoa($id){
		$sql = "DELETE FROM `truyen` WHERE id ='$id' ";
		return $this->conn->query($sql);
	}

	function them($ten, $gia, $tacgia, $nxb, $nam, $time_create){
		$sql ="INSERT INTO `truyen`( `ten`, `gia`, `tacgia`, `nxb`, `nam`, `time_create`) 
				VALUES ('$ten', '$gia','$tacgia', '$nxb', '$nam', '$time_create') ";
		return $this->conn->query($sql);
	}

	
	function sua($ten, $gia, $tacgia, $nxb, $nam, $time_create, $id){
		$sql ="UPDATE `truyen` SET `ten`='$ten',`gia`='$gia',`tacgia`='$tacgia',`nxb`='$nxb',`nam`='$nam',`time_create`='$time_create' WHERE id = '$id' ";
		return $this->conn->query($sql);
	}

	function getDataTruyen($id){
		$sql = "SELECT * FROM truyen WHERE id = '$id' ";
		return $this->conn->query($sql);
	}


}