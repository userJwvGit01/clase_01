<?php
include_once("m_bd.php");
class zona extends bdmysql{
	private $cod;
	private $des;
	function zona(){
		$this->bdmysql();
		$this->cod="";
		$this->des="";
	}
	function setDatos( $cod, $des){
		$this->cod=$cod;
		$this->des=$des;	
	}
	function incluye(){
		$sql="insert into zona(cod,des) values('".$this->cod."','".$this->des."')";
		return $this->ejecutar($sql);
	}
}
?>