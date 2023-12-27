<!-- 

	PHP es un lenguaje de programación de servidor, lo que quiere decir que se ejecuta en el servidor y no en el navegador.
	Para poder ejecutar PHP necesitamos un servidor web, como por ejemplo Apache.
	Para esto podemos usar XAMPP, que es un paquete que incluye Apache, MySQL y PHP.

 -->



<?php

	/**
		 ECHO
		En PHP, echo es una construcción utilizada para generar salida (generalmente HTML) directamente en la página web. Es una manera rápida y sencilla de mostrar información en el navegador. Puedes usar echo para imprimir cadenas de texto, variables y también para combinar texto y variables.

		Para imprimir una cadena de texto, simplemente escribimos echo seguido de la cadena de texto entre comillas dobles o simples.
	 */

    // Esto es un comentario de una sola línea
    /*
        Esto es un comentario
        de varias líneas
    */
    $nombre = "Juan";
    $nombre = "Pedro";
    echo "<h1>Hola mundo! $nombre</h1>";


   /*
		TIPOS DE DATOS
		En PHP, las variables pueden almacenar diferentes tipos de datos, como cadenas de texto, números enteros, números decimales, booleanos, arrays.
	*/

	// Cadena de texto
	$nombre = 'Juan';
    $nombre = "Pedro";
	// Número entero
	$numero = 7;
	// Número decimal
	$numero_decimal = 7.7;
	// Booleano
	$verdadero = true;
	$falso = false;
	
    // Array
	$colores = array('rojo', 'amarillo',10,false,null);

	// NULL
	$nulo = null;

    // Constantes
    define('PI', 3.14);
    echo PI;
    echo '<br>';


    /**
		CONDICIONALES Y OPERADORES RELACIONALES

		Las condicionales nos permiten tomar decisiones en el código, es decir, ejecutar cierto código si se cumple una condición o ejecutar otro código si no se cumple.
		En PHP, las condicionales se escriben con la palabra reservada if seguida de la condición entre paréntesis y entre llaves el código que se ejecutará si se cumple la condición.

			Mayor: >
			Menor: <
			Mayor o Igual : >=
			Menor o Igual : <=
			Igual: ==
			Igual estricto en tipo y valor: ===
			Distinto :!=

	*/

    $num1 = 10;
    $num2 = "10";

    var_dump( $num1 == $num2 ); // true

    echo '<br><br>';
    if( $num1 === $num2 ){
        echo "$num1 es igual a $num2";
    }else{
        echo "$num1 no es igual a $num2";
    }

    /**
		OPERADORES LÓGICOS
		Los operadores lógicos nos permiten combinar varias condiciones.
		En PHP, los operadores lógicos son:
			AND o &&
			OR o ||
	*/
    echo '<br><br><br><br>';
    echo '<hr>';

    $color1 = 'rojo';
    $color2 = 'azul';


    if( ($color1 == 'rojo') || ($color2 == 'verde') ){
        echo 'Los dos colores son correctos';
    }else{
        echo 'Los colores no son correctos';
    }

    echo '<br><br>';
    echo '<hr>';


    $nombre = 'Juan';
    $edad = 18;

    if($edad >= 18){
        echo "$nombre es mayor de edad";

        // If anidado 
        if($edad <= 33){
            echo "<h2>Todavia eres Millenial</h2>";
        }else if($edad >= 70){
            echo "<h2>Eres anciano</h2>";
        }else{
            echo "<h2>No eres millenial</h2>";
        }



    }else{
        echo "$nombre es menor de edad";
    }




?>