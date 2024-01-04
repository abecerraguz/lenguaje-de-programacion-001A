<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

/*        tr:nth-child(even) {
            background-color: #f2f2f2;
        }*/
        .par{
             background-color: #f2f2f2;
        }

        .impar{
             background-color: #ffffff;
        }


    </style>
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

    echo '<h1 class="border-bottom border-secondary-subtle h3 mt-3">Arrays</h1>';

    $colores = array('Rojo','Verde', 'Azul', false, 20, 1.5);
    var_dump($colores);
    echo $colores[1];


    $cursos = array(

      array(
          "nombre" => "Curso de PHP",
          "duracion" => "6 semanas",
          "categoria" => "Desarrollo web"
      ),
      array(
          "nombre" => "Curso de JavaScript",
          "duracion" => "8 semanas",
          "categoria" => "Desarrollo web"
      ),
      array(
          "nombre" => "Curso de Python",
          "duracion" => "10 semanas",
          "categoria" => "Desarrollo web"
      ),
      array(
          "nombre" => "Curso de Diseño Gráfico",
          "duracion" => "4 semanas",
          "categoria" => "Diseño"
      )

  );

  echo '<br>';
  echo '<br>';

  // var_dump( $cursos );

  // echo $cursos[1];

  $largo = count($cursos);

  echo $largo;

  for( $i=0; $i <= $largo; $i++ ){
    // echo $i."<br>";
    foreach( $cursos[$i] as $key => $value){
      echo "$key : $value";
    }

  }

  echo '<br>';
  echo '<br>';
    echo '<h1 class="border-bottom border-secondary-subtle h3 mt-3">While</h1>';

    $z = 0;
    $largoCurso = count($cursos);

    while( $z < $largoCurso ){
      echo "<div class='alert alert-light' role='alert'>";
      foreach( $cursos[$z] as $key => $value){
        echo "$key : $value";
      }
      echo "</div>";
      $z++;
    }

    echo '<br>';
    echo '<br>';
    echo '<h1 class="border-bottom border-secondary-subtle h3 mt-3">ForEach</h1>';

    foreach( $cursos as $curso ){
      echo "<div class='alert alert-warning' role='alert'>";
        echo "<h1 class='h5 border-bottom border-secondary-subtle'>Curso de $curso[nombre]</h1>
        <p class='mt-4'>El curso tiene una duración de $curso[duracion], este curso pertenece a la categoría de $curso[categoria]</p>";
      echo "</div>";
  }


  function calculadora( $numeros ,  $operador ){
      // if($operador  == '+'){
      //   $suma = 0;
      //   $largo = count($numeros);
      //   for($i=0; $i < $largo; $i++){
      //     $suma+=$numeros[$i];
      //   }
      //   return "La suma es $suma";
      // }else if($operador  == '-'){
      //   $resta = 0;
      //   $largo = count($numeros);
      //   for($i=0; $i < $largo; $i++){
      //     $resta-=$numeros[$i];
      //     echo $resta;
      //   }
      //   return "La resta es $resta";
      // }


       switch ( $operador ) {
            case '+':
                $suma = 0;
                $largo = count($numeros);
                for ($i=0; $i < $largo; $i++) { 
                    $suma += $numeros[$i];
                }
                return "La suma es $suma";
                break;
            case '-':
                $resta = 0;
                $largo = count($numeros);
                for ($i=0; $i < $largo; $i++) { 
                    $resta -= $numeros[$i];
                }
                return "La resta es $resta";
                break;
            case '*':
                $multiplicacion = 1;
                $largo = count($numeros);
                for ($i=0; $i < $largo; $i++) { 
                    $multiplicacion *= $numeros[$i];
                }
                return "La multiplicacion es $multiplicacion";
                break;
            case '/':
                $division = 1;
                $largo = count($numeros);
                for ($i=0; $i < $largo; $i++) { 
                    $division /= $numeros[$i];
                }
                return "La division es $division";
                break;
            case '%':
                $modulo = 1;
                $largo = count($numeros);
                for ($i=0; $i < $largo; $i++) { 
                    $modulo %= $numeros[$i];
                }
                return "El modulo es $modulo";
                break;
            case 'p':
                $suma = 0;
                $largo = count($numeros);
                for ($i=0; $i < $largo; $i++) { 
                    $suma += $numeros[$i];
                }
                $promedio = $suma / $largo;
                return "El promedio es $promedio";
                break;
            
            default:
                return "Operacion no valida";
                break;
        }
  }
  $notas = array(80, 90, 75, 87, 92);
  echo calculadora($notas,'+');
  echo '<hr>';
  echo calculadora($notas,'-');
  echo '<hr>';
  echo calculadora($notas,'Multiplicacion');
  echo '<hr>';
  echo calculadora($notas,'Division');
  echo '<hr>';
  echo calculadora($notas,'%');
  echo '<hr>';
  echo calculadora($notas,'p');


  echo '<br><br>';
  echo '<br><br>';
  echo '<br><br>';

echo '<h1 class="border-bottom border-secondary-subtle h3 mt-3">El Módulo de un número</h1>';
   
  
echo "<table>";
echo "<tr><th>Nombre</th><th>Duración</th><th>Categoría</th></tr>";

$largoCurso = count($cursos);

for ($i = 0; $i <= $largoCurso; $i++) {

    echo "<tr";
    echo $i % 2 == 0 ? ' class="par"' : ' class="impar"';
    echo ">";
    echo "<td>".$cursos[$i]['nombre']."</td>";
    echo "<td>".$cursos[$i]['duracion']."</td>";
    echo "<td>".$cursos[$i]['categoria']."</td>";
    echo "</tr>";
}

echo "</table>";



?>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

