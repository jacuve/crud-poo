<?php
namespace Controllers;
	class seccionesController
	{

		public function index()
		{
			print "Hola, soy el index del SeccionesControllers";
		}

		public function ver($num)
		{
			print "Eres el numero : " . $num;
		}

	}