<?php
class rombo extends figura implements formulas{
		
		private $valor1;
		private $valor2;
		private $tipo;
	
	function __construct($valor1, $valor2){
		$this->tipo="Rombo";
		$this->valor1=$valor1;
		$this->valor2=$valor2;
	}
	

	public function perimetro(){
		$lado1 = $this->valor1;
		$p=$lado1*4;
		return $p;
	}
	
	public function area(){
		$lado1 = $this->valor1;
		$lado2 = $this->valor2;

		$d=$lado2/2;
		$aux=sqrt(($lado1*$lado1)-($d*$d));
		$dm=$aux*2;
		$a=($lado2*$dm)/2;	
		return $a;
		}
		
	


	public function GetTipo(){
		return $this->tipo;
	}
	
	public function GetPerimetro(){
		return $this->perimetro();
	}

	public function GetArea(){
		return $this->area();
	}
	
}
?>

