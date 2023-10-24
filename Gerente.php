<?php
	include_once './Funcionario.php';
	
	class Gerente extends Funcionario{
		public function getSalario(){
			return "Beleza!";
		}
		
		public function setSalario( $valor ){
			return 1.5 * $valor;
		}
		
		public function calculaSalario(){
			return $this->setSalario( 10.0 );
		}
	}
?>