function lados(elemento){
	var opcion=elemento.value;
	if (opcion == "trapecio"){
		document.figuras.lado_1.disabled = false;
		document.figuras.lado_2.disabled = false;
		document.figuras.lado_3.disabled = false;
		document.figuras.lado_4.disabled = false;
		document.figuras.diagonal.disabled=true;
		document.figuras.altura.disabled=true;
	}else if(opcion == "rombo"){
		document.figuras.lado_1.disabled = false;
		document.figuras.lado_2.disabled = true;
		document.figuras.lado_3.disabled = true;
		document.figuras.lado_4.disabled = true;
		document.figuras.diagonal.disabled=false;
		document.figuras.altura.disabled=true;
	}else if(opcion == "romboide"){
		document.figuras.lado_1.disabled = false;
		document.figuras.lado_2.disabled = false;
		document.figuras.lado_3.disabled = true;
		document.figuras.lado_4.disabled = true;
		document.figuras.diagonal.disabled=true;
		document.figuras.altura.disabled=false;
	}
	else{
		document.figuras.lado_1.disabled = true;
		document.figuras.lado_2.disabled = true;
		document.figuras.lado_3.disabled = true;
		document.figuras.lado_4.disabled = true;
		document.figuras.diagonal.disabled=true;
		document.figuras.altura.disabled=true;
	}


}
