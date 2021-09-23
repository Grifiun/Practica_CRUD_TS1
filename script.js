var entrada = document.getElementById("nombre");
var salida = document.getElementById("saludo");

function ingresarNombre(){
	let base = "Salida: Hola ";
	let final = base + entrada.value;
	
	console.log(final);
	
	salida.innerHTML = final;
	
}
