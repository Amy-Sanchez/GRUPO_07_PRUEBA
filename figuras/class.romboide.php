<?php
class romboide extends figura implements formulas{
	
	
	private $lado1;
	private $lado2;
	private $altura;
	private $tipo;

	function __construct($lado1, $lado2, $altura){
		$this->tipo="Romboide";
		$this->lado1 = $lado1;
		$this->lado2 = $lado2;
		$this->altura = $altura;
		
	}

	public function area(){

		return $this->lado1*$this->altura;
	}


	public function perimetro(){

		return (2*$this->lado1)+(2*$this->lado2);
	}

	public function GetArea(){

		return $this->area();

	}
	
	public function GetPerimetro(){

		return $this->perimetro();
	}

	public function GetTipo(){

		return $this->tipo;
	}


}

?>
