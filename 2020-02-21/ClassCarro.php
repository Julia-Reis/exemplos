<?php
    class Carro{
		//Lista de Atributos
		private $cor;
		private $portas;
		private $velocidade_maxima;
		private $velocidade_atual;
		
		public function __construct($a1, $a2, $a3) {
			$this->cor = $a1;
			$this->portas = $a2;
			$this->velocidade_maxima = $a3;
			$this->velocidade_atual = 0;
		}
		
		
		public function get_cor(){
			return($this->cor);
		}
		
		public function get_portas(){
			return($this->portas);
		}
		
		public function get_velocidade_maxima(){
			return($this->velocidade_maxima);
		}
		
		public function get_velocidade_atual(){
			return($this->velocidade_atual);
		}
		
		//Lista de Métodos
		public function acelerar($valor_aceleracao, $tempo){
			//Implementação
			if($valor_aceleracao >= $velocidade_maxima) {
				echo "O valor informado eh maior que a velocidade maxima";
			}else{
				$this->velocidade_atual = $this->velocidade_atual + $valor_acelaracao*$tempo;
			}
		}
		
		public function frear($valor_frenagem, $tempo){
			//Implementação
			$this->velocidade_atual = $this->velocidade_atual - $valor_frenagem*$tempo;
		}
		
		
		public function virar($lado){
			//Implementação
		}
	}
?>