<?php

class Leon extends Felino {

	var $num_manada;
	var $rugido = "Roaaaaaar!";
	var $dormitorio = "Sabana";
	var $alimento = "Gacelas";

	public function __construct($num_man)
	{
		$this->num_manada = $num_man;
	}

	public function toString()
	{
		print $this->num_manada."\n";
	}

	public function comer()
	{
		return "La manada de ".$this->num_manada." leones cazaron una ". $this->alimento. " y se preparan para devorarla ";
	}

	public function dormir()
	{
		return "Duerme en ".$this->dormitorio;
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