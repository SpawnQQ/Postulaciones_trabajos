<?php
include "Felino.php";
class Tigre extends Felino {

	var $tipo_tigre;
	var $num_manada;
	var $rugido = "Roaar!";
	var $dormitorio = "Selva";
	var $alimento = "Jabalies";

	public function __construct($tipo, $num_man)
	{
		$this->tipo_tigre = $tipo;
		$this->num_manada = $num_man;
	}

	public function toString()
	{
		print $this->tipo_tigre.", ".$this->num_manada;
	}

	public function comer()
	{
		return "La manada de ".$this->numero_manada." leones cazaron una ". $this->$alimento. " y se preparan para devorarla ";
	}

	public function dormir()
	{
		return $this->nombre_perro."Duerme en ".$this->dormitorio;
	}
	
	public function correr()
	{
		return "Corre para cazar";
	}
	
	public function rugir()
	{
		return $this->rugido;
	}

}
?>