<?php
// Clase para acceder al SMBD MYSql utilizando mysqli procedimental
class bdmysql{
	private $servidor;
	private $bd;
	private $usuario;
	private $clave;
	private $conexion;
	protected function bdmysql()// constructor de la clase
	{
		$this->servidor="localhost";
		$this->bd="clase1";
		$this->usuario="root";
		$this->clave="";
	}
	function conectar()
	{
		// mysqli conecta SMDB y BD
		$this->conexion = mysqli_connect( $this->servidor, $this->usuario, $this->clave, $this->bd );
		if ( $this->conexion )
			return true;
		else
			die( "No se conecta: " . mysqli_connect_error() );
	}
	protected function ejecutar($sql)
	{
		$this->conectar();
		return mysqli_query( $this->conexion, $sql ); // se ejecuta el query
	}
}	
?>
