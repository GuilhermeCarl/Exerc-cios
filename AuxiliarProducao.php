<?php
	include_once './Funcionario.php';
	include_once './Fiscal.php';
	
	class AuxiliarProducao extends Funcionario implements Fiscal{
		public function getSalario(){
			return "Nao beleza!";
		}
		
		public function setSalario( $valor ){
			return $valor;
		}
		
		public function calculaSalario(){
			return $this->setSalario( 1.0 );
		}
		
		public function INSS( $valor ){
			return 2.3 * $valor;
		}
		
		public function getHorario(){
			return '08:00-12:00 13:30-18:00';
		}
	}
?>