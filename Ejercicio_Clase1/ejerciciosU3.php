<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Unidad 3 Arrays</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Crea el array aleatorios, que contenga 20 números aleatorios entre 10 y 50. 
    Muestra por pantalla el contenido de dicho array dentro de un párrrafo y con los 
    números separados por comas.
    Pista: investiga una función de PHP que devuelve números aleatorios.</p>
    <?php
    $aleatorios = [12,13,14,15,16,17,18,19,20,30,35,36,37,40,43,44,45,46,48,49];
    echo"<p>";
    for($i = 0; $i < 21; $i++) {
        $numAleatorio = random_int(10, 50);
        echo $numAleatorio . " , ";
    }
    echo "</p>";

    //Otra forma
    /* for($i = 0; $i < 21; $i++){
        $numAleatorio2[] = random_int(10, 50);
    }
    echo "<p>" .implode("," ,$aleatorios). "</p>";
    */
    ?>

    <h2>Ejercicio 2</h2>
    <p>Utilizando el array aletorios generado antes, imprime</p>    
        <ol>
            <li>La suma de todos los elementos.</li>
            <li>La media aritmética.</li>
            <li>El máximo y el mínimo.</li>
        </ol>
    <?php
    $sum = 0;
    for($i = 0; $i < count($aleatorios); $i++){
        $sum += $aleatorios[$i];
    }
    echo "<p> La suma del array es : " . $sum . "</p>";

    $media = $sum /count($aleatorios);
    echo "<p> La media del array es : " . $media . "</p>";

    $valorMinimo = min($aleatorios);
    echo "<p> El valor mínimo del array es : " . $valorMinimo . "</p>";

    $valorMaximo = max($aleatorios);
    echo "<p>El valor máximo del array es : " . $valorMaximo . "</p>";
    ?>

    <h2>Ejercicio 3</h2>
    <p>Mediante un array asociativo, almacena el nombre y la altura de 5 personas 
    (nombre => altura). Posteriormente, recorre el array y muéstralo en una tabla 
    HTML donde la primera columna tiene los nombres y la segunda las alturas 
    correspondientes. Finalmente añade una última fila a la tabla con la altura media.</p>
    <?php
    $arrayAsociativo = [            //preguntar a sete si en los asociativos vale poner () o [].
        "Carolina" => "168",
        "Ares" => "189",
        "Yolanda" => "166",
        "Juan" => "172",
        "Ruben" => "175"
    ];

    echo "<table border =1>";
    echo "<tr>
            <td>Persona</td>
            <td>Altura</td>
        </tr>";

    $sumAlturas = 0;
    foreach($arrayAsociativo as $personas => $altura){
        $sumAlturas += $altura;

      echo "<tr>";  
        echo "<td>$personas</td>";
        echo "<td>$altura</td>";
      echo "</tr>";
    
    }

    $mediaAlturas = $sumAlturas / count($arrayAsociativo);
    echo "<tr>";
        echo "<td>Media de alturas</td>";
        echo "<td>$mediaAlturas</td>";
     echo "</tr>";

    echo "</table>";
   
    ?>



    <h2>Ejercicio 4</h2>
    <p>Define tres arrays de 10 números enteros cada uno, 
    con nombres numeros, cuadrados y cubos. Inicializa el array numeros con valores 
    aleatorios entre 0 y 100. En el array cuadrados se deben almacenar los cuadrados 
    de los valores que hay en el array numeros; y en el array cubos se deben almacenar 
    los cubos. A continuación, muestra el contenido de los tres arrays dispuestos en 
    tres columnas (con los headers "valor", "cuadrado" y "cubo").</p>
    <?php


    for ($i= 1; $i <= 10; $i++){
        $numero[] = random_int(0,100);
    }
    echo "<p>" .implode(" , " , $numero)."</p>";

    for ($i = 0; $i < count($numero); $i++){
       $a = $numero[$i]**2;
       $cuadrado [] = $a;
    }
    echo "<p>" .implode(" , " , $cuadrado)."</p>";

    for ($i = 0; $i < count ($numero);$i++){
        $b = $numero[$i]**3;
        $cubo[] = $b;
    }
    echo "<p>" . implode(" , " , $cubo). "</p>";
    ?>


    <h2>Ejercicio 5</h2>
    <p>Crea tres arrays indexados, uno de strings llamado alumnado, otro de doubles llamado notas, 
    y otro de booleans llamado matriculas (es muy recomendable no utilizar tildes, ñ, ni otros 
    caracteres no ASCII en los nombres de variables). Cada array contiene 4 elementos. 
    A continuación muestra en una lista no ordenada toda la información, de manera 
    que se vea, por ejemplo (los valores subrayados se sacan de la información contenida 
    en los arrays):</p>
    <ol>
        <li>Fátima tiene un 7.8 y sí está matriculade.</li>
        <li>Alberto tiene un 4.1 y sí está matriculade.</li>
        <li>Amir tiene un 6.8 y no está matriculade</li>
        <li>...</li>
    </ol>
    <?php
    $alumnado = array("Carolina", "Yolanda", "Ares", "Ruben", "Juan");
    $notas = array(4.5 , 5.9, 8.7 , 9.2, 6.8);
    $bolean = array (true, true, false, true, false);

    echo "<ul>";

    for ($i = 0; $i < 5; $i++){
        $matricula = $bolean[$i] ? "si" : "no";   //esto es para convertir un booleano en String
        echo "<li>" . $alumnado[$i] . " tiene un " . $notas[$i] . " y " . $matricula . " está matriculado</li>";
        }
    
    echo "</ul>";
    ?>

    <h2>Ejercicio 6</h2>
    <p>Genera un array asociativo en el que las claves serán los meses del año, y los valores las
    temperaturas máximas de dicho mes en Madrid en 2023 (para ver los valores, puedes verlo
    en la web del Ayuntamiento). A continuación, muestra la información en una tabla como 
    la siguiente, con los meses en la primera fila y las temperaturas correspondientes en 
    la siguiente:</p>
    <?php
    $madrid = [
        "Enero" => 14.8,
        "Febrero"=> 19,
        "Marzo"=> 25.2,
        "Abril"=> 30.9,
        "Mayo"=> 29.1,
        "Junio"=> 37,
        "Julio"=> 38.7,
        "Agosto"=> 40,
        "Septiembre"=> 31.6,
        "Octubre"=> 30.1,
        "Noviembre"=> 18.6,
        "Diciembre" => 13.1
    ];

    echo "<table border = 1>";
    echo "<tr>";
    foreach ($madrid as $mes => $temperatura){
        echo "<td>$mes</td>";
    }
    echo "</tr>";

    echo "<tr>";
    foreach ($madrid as $mes => $temperatura){
        echo "<td>$temperatura</td>";
    }
    echo "</tr>";
    echo "</table>";

    ?>

    <h2>Ejercicio 7</h2>
    <p>Con los mismos valores que antes, realiza una tabla de manera que los meses se muestren en la primera columna,
    y después una simulación de gráfica en la que cada "-" representa 1ºC de la temperatura. Quedaría así:</p>
    <?php
    $tabla = [
        "Enero" => 14.8,
        "Febrero"=> 19,
        "Marzo"=> 25.2,
        "Abril"=> 30.9,
        "Mayo"=> 29.1,
        "Junio"=> 37,
        "Julio"=> 38.7,
        "Agosto"=> 40,
        "Septiembre"=> 31.6,
        "Octubre"=> 30.1,
        "Noviembre"=> 18.6,
        "Diciembre" => 13.1
    ];
    echo "<table border = 1>";
    echo "<tr>
            <th>Mes</th>
            <th>Grafica de temperatura</th>
        </tr>";
    foreach($tabla as $meses => $temperaturas){
        //tengo que redondear los números para poder sustituirlos por -
        //con FLOOR redondeamos hacia el entero inferior y con CEIL recondeamos al número superior
        $numGuiones = floor($temperaturas);
        //creo una variable que me repita tantas veces "-" como valor de temperatura    str_repeat (string, int#times);
        $grafica = str_repeat ("-" , $numGuiones );
        echo "<tr><td>$meses</td><td>$grafica</td></tr>";
    }
    echo "</table>";
    ?>

    <h2>Ejercicio8</h2>
    <p>A continuación, siguiendo con la misma temática, tendrás que crear un array asociativo bidimensional. La estructura
    será la siguiente: las claves seguirán siendo los meses, y los valores serán un array indexado con la termperatura 
    máxima en la posición 0, y la temperatura mínima en la posición 1. De nuevo, estos valores están en la web del Ayuntamiento.
    Muestra la información en una tabla como la siguiente:</p>
    <?php

    $datosAyuntamiento=[
        "Enero" => [14.8 , -1.8],
        "Febrero"=> [19 , -1.8],
        "Marzo"=> [25.2 , -1.6],
        "Abril"=> [30.9 , 5.1],
        "Mayo"=> [29.1 , 8.3],
        "Junio"=> [37 , 13.4],
        "Julio"=> [38.7 , 17.4],
        "Agosto"=> [40 , 15.1],
        "Septiembre"=> [31.6 , 10.7],
        "Octubre"=> [30.1 , 7.5],
        "Noviembre"=> [18.6 , 3],
        "Diciembre" => [13.1, -0.2]
    ];

     echo "<tr>
            <th>Mes</th>
            <th>Máx</th>
            <th>Min</th></th>
        </tr>";
    foreach($datosAyuntamiento as $month => $arrayInterno){
        foreach($arrayInterno as $number){
        echo $number;
        }
    }
    

    ?>





    


    
</body>
</html>