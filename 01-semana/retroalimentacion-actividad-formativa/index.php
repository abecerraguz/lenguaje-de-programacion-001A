<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

 <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<?php

    echo '<h1 class="border-bottom border-secondary-subtle h3 my-5">Retroalimentación</h1>';

    

    echo '<h2 class="border-bottom border-secondary-subtle h5 mt-3">Ejercicio 1 – Condicionales</h2>';
    /*
    
        Ejercicio 1 – Condicionales 

        Para llevar a cabo este ejercicio, realiza las siguientes acciones: 
            -Crea un archivo con una extensión ".php"-
            -Escribe un programa PHP que tome un número.-
            -Define una variable para almacenar el número.-
            -Utiliza una declaración if-else para determinar si el número es positivo, negativo o cero.
            -No es necesario realizar validación de entrada de datos en este caso, ya que se asumeque el valor del número se inicializa directamente en el código por el programado
    */

 

        $numero = 0;
        if( $numero > 0){
            echo "El $numero es positivo!";
        }else if( $numero < 0 ){
            echo "El $numero es negativo!";
        }else{
            echo  " el Número es cero";
        }

 

   

 


    echo '<h2 class="border-bottom border-secondary-subtle h5 mt-3">Ejercicio 2 – Funciones</h2>';

    /*
        Ejercicio 2 – Funciones 
        Para llevar a cabo este ejercicio, realiza las siguientes acciones:

        Crea un archivo con una extensión ".php"

        -Define una función "suma" que tome dos parámetros numéricos (a y b) y devuelva la sumade esos números.
        - Llama a la función con diferentes valores y mostrar el resultado.
        En este caso, se esperaque la función procese los datos de acuerdo con la lógica definida en el programa.
    */

    function suma( $a, $b ){

        $suma = $a+$b;
        return "La suma de $a y $b es: $suma<br>";

    }

    echo suma(10,4);
    echo suma(5,4);
    echo suma(7,4);


    echo '<h2 class="border-bottom border-secondary-subtle h5 mt-3">Ejercicio 3 – Matrices</h2>';

    /*
    Ejercicio 3 – Matrices

    Para llevar a cabo este ejercicio, realiza las siguientes acciones: 
    -Crea un archivo con una extensión ".php"
    -Completa la función en PHP llamada "calcularPromedio" que se proporciona en estedocumento. 
    
    Esta función toma un arreglo de números como argumento y calcula el promedio de esos números.
    -Dentro de la función, escribe el código necesario para realizar el cálculo del promedio.
    -Luego, llama a la función "calcularPromedio" con un arreglo de números y almacena elresultado en una variable.
    -Finalmente, muestra el resultado en pantalla



    function calcularPromedio($numeros) {

        // código a realizar por ti.


    }
        
        $notas = array(80, 90, 75, 87, 92);
        $promedio = calcularPromedio($notas);

        echo "El promedio es: ". $promedio;
    
    */

    function calcularPromedio($numeros) {
        $suma = 0;
        $largo = count($numeros);
        // $i = $i+1;
        for($i=0; $i < $largo; $i++){
            $suma+=$numeros[$i];
        }
        $promedio = $suma / $largo;
        return "El promedio es $promedio<br>";
    }

    $notas1 = array(80, 90, 75, 87, 92);
    $notas2 = array(100, 30, 60, 95, 92);
    echo calcularPromedio($notas1);
    echo calcularPromedio($notas2);

    echo '<h2 class="border-bottom border-secondary-subtle h5 mt-3">Ejercicio 4 – Bucles</h2>';

    /*
    Ejercicio 4 – Bucles
    Para llevar a cabo este ejercicio, realiza las siguientes acciones:
    -Crea un archivo con extensión ".php"
    -Escribe un programa PHP que imprima los números pares del 0 al 20 utilizando tres
    -bucles diferentes: for, while y do-while. 


    En PHP, puedes determinar si un número es par o impar utilizando el operador de módulo (%). El operador de módulo devuelve el residuo de la división de un número entre otro. 



    */



    echo '<h3 class="border-bottom border-secondary-subtle h5 mt-3">FOR</h3>';
    for($i=0; $i <= 20; $i++){

        // echo $i;

        if( $i % 2 == 0 ){
            echo "$i<br>";    
        }

    }

 
    echo '<h3 class="border-bottom border-secondary-subtle h5 mt-3">WHILE</h3>';
    $i = 0;
    while($i <= 20){
        if( $i % 2 == 0 ){
            echo "$i<br>";    
        }
        $i++;
    }

    echo '<h3 class="border-bottom border-secondary-subtle h5 mt-3">DO WHILE</h3>';
    $i = 0;
    do {
        if( $i % 2 == 0 ){
            echo "$i<br>";    
        }
        $i++;
    } while ($i <= 20);

    

 



?>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

