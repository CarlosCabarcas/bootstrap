<?php

require_once 'conectar.php';

class proyecto {

    private static $TABLA = 'proyecto';
    private $nombre;
    private $autor1;
    private $autor2;
    private $autor3;
    private $asesor;
    private $fecha;
    private $nota;
    private $linea;

    public function getNombre() {
        return $this->nombre;
    }

    public function getAutor1() {
        return $this->autor1;
    }

    public function getAutor2() {
        return $this->autor2;
    }

    public function getAutor3() {
        return $this->autor3;
    }

    public function getAsesor() {
        return $this->asesor;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getNota() {
        return $this->nota;
    }

    public function getLinea() {
        return $this->linea;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setAutor1($autor1) {
        $this->autor1 = $autor1;
    }

    public function setAutor2($autor2) {
        $this->autor2 = $autor2;
    }

    public function setAutor3($autor3) {
        $this->autor3 = $autor3;
    }

    public function setAsesor($asesor) {
        $this->asesor = $asesor;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setNota($nota) {
        $this->nota = $nota;
    }

    public function setLinea($linea) {
        $this->linea = $linea;
    }

    public function __construct() {
        /*
          $this->nombre = $nombre;
          $this->autor1 = $autor1;
          $this->autor2 = $autor3;
          $this->asesor = $asesor;
          $this->fecha = $fecha;
          $this->nota = $nota;
          $this->linea = $linea;
         * */
    }

    public function guardar($nombre, $autor1, $autor2, $autor3, $asesor, $nota, $linea) {
        $conexion = new conexion();
        $sql = 'INSERT INTO ' . self::$TABLA . ' (nombre, autor1, autor2, autor3, asesor, fecha, nota, linea) VALUES (?, ?, ?, ?, ?, NOW(), ?, ?)';
        $consulta = $conexion->prepare($sql);
        $consulta->execute(array($nombre, $autor1, $autor2, $autor3, $asesor, $nota, $linea));
        $salida = $consulta->rowCount();
        $conexion = NULL;
        return $salida;
    }

    public function listar() {
        $conexion = new conexion();
        $consulta = $conexion->query('SELECT * FROM ' . self::$TABLA);
        $conexion = NULL;
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function eliminar($id) {
        $conexion = new conexion();
        $consulta = $conexion->query('DELETE FROM ' . self::$TABLA . ' WHERE id = ' . $id);
        $conexion = NULL;
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscar($campo, $valor) {
        $conexion = new conexion();
        if ($campo = 'autor') $campo = 'CONCAT(autor1,autor2,autor3)';
        $sql = "SELECT * FROM " . self::$TABLA . " WHERE $campo LIKE '$valor'";
        $consulta = $conexion->query($sql);
        $conexion = NULL;
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>