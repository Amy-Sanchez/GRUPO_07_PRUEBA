<?php
class trapecio extends figura implements formulas{
	
	private $valor1;
	private $valor2;
	private $valor3;
	private $valor4;
	private $tipo;
	
	function __construct($valor1,$valor2,$valor3,$valor4){
		$this->tipo="Trapecio";
		$this->valor1=$valor1;
		$this->valor2=$valor2;
		$this->valor3=$valor3;
		$this->valor4=$valor4;
	}
	

	public function perimetro(){
		$lado1 = $this->valor1;
		$lado2 = $this->valor2;
		$lado3 = $this->valor3;
		$lado4 = $this->valor4;
		$p= $lado1+$lado2+$lado3+$lado4;
		return $p;
	}
	
	public function area(){
		$lado1 = $this->valor1;
		$lado2 = $this->valor2;
		$lado3 = $this->valor3;
		$lado4 = $this->valor4;
		$h=sqrt(($lado2^2)-((($lado2^2)-($lado4^2)+($lado1-$lado3)^2)/(2*($lado1-$lado3)))^2);
		$a=(($lado1+$lado3)/2)*$h;
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
