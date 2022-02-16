<?php
	abstract class figura{
		//public $tipo;
		public $a; //area
		public $p; //perimetro

		public static function get_form(){
			echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">';
			$html = '
			<form name="figuras" method="POST" action=""  >
			<table border=0 align="center" class="table table-striped">
				<tr>
					<th colspan="2">INGRESO DATOS DE LA FIGURA</th>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td>
						<select name="tipo" OnChange="lados(this);">
							<option value="sel">Seleccione...</option>
							<option value="trapecio">Trapecio</option>
							<option value="rombo">Rombo</option>
							<option value="romboide">Romboide</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Lado 1:</td>
					<td><input type="text" name="lado_1" id="lado1" size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 2:</td>
					<td><input type="text" name="lado_2" size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 3:</td>
					<td><input type="text" name="lado_3" size="4" disabled></td>
				</tr>
				<tr>
					<td>Lado 4:</td>
					<td><input type="text" name="lado_4" size="4" disabled></td>
				</tr>
				<tr>
					<td>Altura:</td>
					<td><input type="text" name="altura" size="4" disabled></td>
				</tr>
				<tr>
					<td>Diagonal:</td>
					<td><input type="text" name="diagonal" size="4" disabled></td>
				</tr>								
				<tr>
					<th colspan="2"><input type="submit" name="calcular" value="Calcular"></th>
				</tr>
			</table>
			</form>';
			return $html;
		}
		/*public function setFigura($tipo){
			$this->tipo=$tipo;
			return $this;
		}*/
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	  
	    public abstract function GetPerimetro();
	    
	     
	    public abstract function GetTipo();

	}
?>
