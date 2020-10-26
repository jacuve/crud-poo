<?php
namespace Models;

	class Seccion 
	{
		private $id;
		private $nombre;
		private $conn;

		public function __construct ($conn)
		{
			$this->conn = new Conexion();


		}

		public function __construct()
		{
			$this->conn = new Conexion();
		}

		public function set ($atributo, $contenido)
		{
			$this->$atributo = $contenido;
		}


		public function listar ()
		{
			$sql = "SELECT * FROM secciones ";
			$this->conn->consultaRetorno($sql);
			return $datos;
		}

		public function add()
		{
			$sql = "INSERT INTO secciones (id,nombre ) VALUES (null, '{$this->nombre}');";

		}

		public function delete()
		{
			$sql = "DELETE FROM secciones WHERE id = '{$this->id}";
			$this->conn->consultaSimple($sql);
		}

		public function edit()
		{
			$sql = "UPDATE secciones SET nombre = '{$this->nombre}' WHERE id = {$this->id} ";
			$this->conn->consultaSimple($sql);
		}

		public function view()
		{
			$sql ="SELECT * FROM secciones WHERE id = {$this->id}";
			$datos = $this->conn->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}

	}
