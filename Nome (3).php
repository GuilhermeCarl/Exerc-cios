<?php
	class Nome{
		private $nome;
		private $sobrenome;
		private $idade;
		private $cidade;
		
		public function __construct(){
			$this->nome = '';
			$this->sobrenome = '';
			$this->idade = -1;
			$this->cidade = '';
		}
		
		public function __destruct(){
			$this->nome = null;
			$this->sobrenome = null;
			$this->idade = null;
			$this->cidade = null;
		}
		
		public function setNome( $nome ){
			$this->nome = $nome;
		}
		public function getNome(){
			return $this->nome;
		}
		
		public function setSobrenome( $sobrenome ){
			$this->sobrenome = $sobrenome;
		}
		public function getSobrenome(){
			return $this->sobrenome;
		}
		
		public function setIdade( $idade ){
			$this->idade = $idade;
		}
		
		public function getIdade(){
			return $this->idade;
		}
		
		public function setCidade( $cidade ){
			$this->cidade = $cidade;
		}
		
		public function getCidade(){
			return $this->cidade;
		}
	}
?>