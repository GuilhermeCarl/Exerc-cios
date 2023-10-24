<?php
	abstract class Automovel{
		private $marca;
		
		public function __construct(){
			$this->marca = '';
		}
		
		abstract public function abrirPorta();
	}
	
	class CarroFerrari extends Automovel{
		private $modelo;
		
		public function __construct(){
			$this->modelo = '';
		}
		
		public function abrirPorta(){
			// escrever codigo de como abrir a porta
		}
	}
	
	class Carroca extends Automovel{
		
		public function abrirPorta(){}
	}
	
	class BiciclitaEletrica extends Automovel{
		
		public function abrirPorta(){}
	}
?>