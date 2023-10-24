<?php
	include_once 'Nome.php';
	
	abstract class Funcionario{
		private $nome;
		private $salario;
		
		public function __construct(){
			$this->nome = new Nome();
			$this->salario = 0.0;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setNome( $nome ){
			$this->nome = $nome;
		}
		
		// metodos abstratos //
		abstract protected function setSalario( $valor );
		abstract protected function getSalario();
		
		// metodo comum //
		public function imprimir(){
			print $this->getSalario();
		}
	}
?>