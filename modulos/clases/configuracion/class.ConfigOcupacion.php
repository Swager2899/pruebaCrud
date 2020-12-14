<?php
class Ocupacion{
	private $Accion;
	private $IdOcupacion;
	private $CodOcupacion;
	private $NomOcupacion;
	

	public function __construct($Accion = null, $IdOcupacion = null, $CodOcupacion = null, $NomOcupacion = null){
		$this->Accion           = $Accion;
		$this->IdOcupacion  = $IdOcupacion;
		$this->CodOcupacion = $CodOcupacion;
		$this->NomOcupacion = $NomOcupacion;
	}

	public function get_Accion(){
		return $this->Accion;
	}

	public function get_IdOcupacion(){
		return $this->IdOcupacion;
	}

	public function get_CodOcupacion(){
		return $this->CodOcupacion;
	}

	public function get_NomOcupacion(){
		return $this->NomOcupacion;
	}

	public function set_Accion($Accion){
		return $this->Accion = $Accion;
	}

	public function set_IdOcupacion($IdOcupacion){
		return $this->IdOcupacion = $IdOcupacion;
	}

	public function set_CodOcupacion($CodOcupacion){
		return $this->CodOcupacion = $CodOcupacion;
	}

	public function set_NomOcupacion($NomOcupacion){
		return $this->NomOcupacion = $NomOcupacion;
	}


 	public static function Listar(){
		$conexion = new Conexion();
		$Instruc = $conexion -> prepare("SET NAMES utf8");
		$Instruc -> execute();
		$SqlBuscar = "SELECT * FROM config_ocupacion WHERE acti = 1 ORDER BY nom_ocupa";
		$Instruc = $conexion->prepare($SqlBuscar);
		$Instruc->execute() or die(print_r($Instruc->errorInfo()." - ".$SqlBuscar, true));
		$Result = $Instruc->fetchAll();
		$conexion = null;
		return $Result;
	}
	
	public static function Buscar($Accion, $IdOcupacion) {
		$conexion = new Conexion();
		if($Accion == 1){
			$SqlBuscar = "SELECT * FROM config_ocupacion WHERE id_ocupa = ".$IdOcupacion;
		}
		$Instruc = $conexion -> prepare("SET NAMES utf8");
		$Instruc -> execute();
		$Instruc = $conexion->prepare($SqlBuscar);
		$Instruc->execute() or die(print_r($Instruc->errorInfo()." - ".$SqlBuscar, true));
		$Result = $Instruc->fetch();
		$conexion = null;
		if ($Result) {
			return new self("", $Result['id_ocupa'], $Result['cod_ocupa'], $Result['nom_ocupa']);
		} else {
			return false;
		}
	}
}
?>