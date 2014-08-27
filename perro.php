<?php

	/**
	* Definicion de perro
	*/

	class Perro
	{	
		private $_nombre;
		private $_hambre;
		private $_raza;

		function __construct($raza)
		{
			$this->_raza = $raza;
		}

		private function digerir($comida)
		{
			$this->_hambre = FALSE;
		}

		public function comer($comida)
		{
			digerir($comida);
		}

		public function setNombre($nombre)
		{
			$this->_nombre = $nombre;
		}

		public function getNombre()
		{
			return $this->_nombre;
		}

		public function setRaza($raza)
		{
			$this->_raza = $raza;
		}

		public function getRaza()
		{
			return $this->_raza;
		}

	}

	//$perro = new Perro("Dalmata");
	//$perro->setNombre("Norman");
	//echo "Se creo el perro " . $perro->getRaza() . " con nombre " . $perro->getNombre();