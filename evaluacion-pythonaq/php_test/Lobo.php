<?php
include "Canino.php";
class Perro extends Canino {

	var $numero_manada;
	var $especie_lobo;
	var $rugido = "Aullar";
	var $dormitorio = "Bosques";
	var $alimento = "Carne";

	public function __construct($num_man, $especie_lob)
	{
		$this->numero_manada = $num_man;
		$this->especie_lobo = $especie_lob;
	}

	public function toString()
	{
		print $this->numero_manada.", ".$this->especie_lobo;
	}

	public function comer()
	{
		return "La manada de ".$this->numero_manada." lobos cazaron un conejo y se preparan para comer su ".$this->alimento;
	}

	public function dormir()
	{
		return $this->nombre_perro."Duerme en ".$this->dormitorio;
	}
	
	public function correr()
	{
		return "corre para cazar";
	}
	
	public function rugir()
	{
		return $this->rugido;
	}

}
?>