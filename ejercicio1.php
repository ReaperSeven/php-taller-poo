<?php
	/**
	 * 
	 */
	class Persona {
		private $nombre;
		private $apellidos;
		private $direccion;
		private $telefono;

		public function cargarAtributos($nombre,$apellidos,$direccion,$telefono) {
			$this->nombre = $nombre;
			$this->apellidos = $apellidos;
			$this->direccion = $direccion;
			$this->telefono = $telefono;
		}

		public function imprimirAtributos() {
			echo "<p>$this->nombre $this->apellidos</p>";
			echo "<p>$this->direccion</p>";
			echo "<p>$this->telefono</p>";
		}
	}

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$direccion = $_POST['direccion'];
	$telefono = $_POST['telefono'];

	$persona = new Persona();

	$persona->cargarAtributos($nombre,$apellidos,$direccion,$telefono);
	$persona->imprimirAtributos();

?>