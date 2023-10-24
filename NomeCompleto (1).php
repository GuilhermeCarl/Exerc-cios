<?php
	include_once 'Nome.php';
	
	class NomeCompleto extends Nome{
		private $nomeCompleto;
		
		public function __construct(){
			parent::__construct();
			$this->nomeCompleto = '';
		}
		
		public function __destruct(){
			$this->nomeCompleto = null;
		}
		
		public function setNomeCompleto( $nomeCompleto ){
			$this->nomeCompleto = $nomeCompleto;
		}
		
		public function getNomeCompleto(){
			return $this->nomeCompleto;
		}
	}
?>