<?php 
class conexion extends PDO {
	private $tipo_de_base = 'mysql';
	private $host = 'localhost';
	private $nombre_de_base = 'help_proyectos';
	private $usuario = 'root';
	private $contraseña = '';
	public function __construct(){
		try{
			parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base, $this->usuario, $this->contraseña);
		}catch(PDOexception $e){
			echo 'ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
			exit;
		}
	}
}
?>