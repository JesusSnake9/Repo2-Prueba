<script type="text/javascript" >

var menu = "Elija la opción deseada (1-3):\n\
1. Cifrar el mensaje\n\
2. Descifrar el mensaje\n\
3. Salir";

var opcion = prompt(menu);
	
var normal = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',' '];
var cifrado = ['11','12','13','14','15','21','22','23','24','25','31','32','33','34','35','41','42','43','44','45','51','52','53','54','55','56','EE',' '];
var resultado = [];	

if ( opcion == "1" ) {
	var texto = prompt("Introduce un mensaje para cifrarlo: ").toUpperCase().split("");
			
	for ( var i = 0; i < texto.length; i++ ) {
		for ( var j = 0; j < normal.length; j++ ) {
			if ( texto[i] == normal[j] ) {resultado.push(cifrado[j])};
		}
	}
		
	alert("Este mensaje cifrado es <<" +resultado.join("")+ ">>.");
	location.reload();

} else if (opcion == "2") {
	var texto = prompt("Introduce el mensaje cifrado para descifrarlo: ").toUpperCase().replace(/ /g, '  ').match(/.{1,2}/g);

	for ( var i = 0; i < texto.length; i++ ) {
		if (texto[i] == '  ') { texto[i] = ' ';}
		for ( var j = 0; j < normal.length; j++ ) {
			if ( texto[i] == cifrado[j] ) {resultado.push(normal[j])};
		}
	}
	
	alert("Este mensaje descifrado es <<" +resultado.join("")+ ">>.");
	location.reload(); 

} else if (opcion == "3") {
	alert("Saliendo del programa, ¡hasta luego!");
	
} else {
	alert("¡Error, inténtalo de nuevo!");
	location.reload();
}
					
		</script>