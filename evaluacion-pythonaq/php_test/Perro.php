<?php

class Perro extends Canino {

	var $nombre_perro;
	var $nombre_amo;
	var $raza;
	var $rugido = "Ladrar";
	var $dormitorio = "Jardin";
	var $alimento = "Pellets";

	public function __construct($nom_perro, $nom_amo, $raza_perro)
	{
		$this->nombre_perro = $nom_perro;
		$this->nombre_amo = $nom_amo;
		$this->raza = $raza_perro;
	}

	public function toString()
	{
		print $this->nombre_perro.", ".$this->nombre_amo.", ".$this->raza."\n";
	}

	public function comer()
	{
		return "El amo ".$this->nombre_amo.", le da de comer ".$this->alimento." a ".$this->nombre_perro;
	}

	public function dormir()
	{
		return $this->nombre_perro."Duerme en ".$this->dormitorio;
	}
	
	public function correr()
	{
		return "corre para jugar";
	}
	
	public function rugir()
	{
		return $this->rugido;
	}

}
?>