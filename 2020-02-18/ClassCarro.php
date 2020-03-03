<?php
    class Carro{
		//Lista de Atributos
		public $cor;
		public $portas;
		public $velocidade_maxima;
		public $velocidade_atual;
		
		//Lista de Métodos
		public function acelerar($valor_aceleração, $tempo){
			//Implementação
			$this->velocidade_atual = $this->velocidade_atual + $valor_acelaracao * $tempo; 
		}
		
		public function frear($valor_frenagem, $tempo){
			//Implementação
			$this->velocidade_atual = $this->velocidade_atual - $valor_frenagem * $tempo;
		}
		
		public function virar($lado){
			//Implementação
		}
	}
?>