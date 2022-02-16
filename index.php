<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<head>
	<title>Figuras</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script type="text/javascript" src="script/lados.js"></script>
</head>
<body>
	<?php
		include("include/class.figura.php");
		include("include/Interface.formulas.php");
		include("figuras/class.trapecio.php");
		include("figuras/class.romboide.php");
		include("figuras/class.rombo.php");

		

		if(isset($_POST['calcular'])){
			switch($_POST['tipo']){
				case "trapecio": $f = new trapecio($_POST['lado_1'],$_POST['lado_2'],$_POST['lado_3'],$_POST['lado_4']);break;
				case 'rombo':$f=new rombo($_POST['lado_1'],$_POST['diagonal']);break;
				case "romboide": $f = new romboide($_POST['lado_1'],$_POST['lado_2'],$_POST['altura']); 
			}
			mostrar($f);
		}else{
			echo figura::get_form();
		}
		
			
		function mostrar(formulas $fig){
			$fig->area();
			$fig->perimetro();
			echo "El área del " . $fig->GetTipo() . " es: " . $fig->GetArea();
			echo "<br>El perímetro del " . $fig->GetTipo() . " es: " . $fig->GetPerimetro();
			echo "<br><a href='index.php'><button type='button' class='btn btn-danger'>Volver</button></a>";
		}
	?>
	
</body>

</html>
