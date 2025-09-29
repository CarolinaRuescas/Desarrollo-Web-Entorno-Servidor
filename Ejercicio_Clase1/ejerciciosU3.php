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
    <?
    $arrayAsociativo = [            //preguntar a sete si en los asociativos vale poner () o [].
        "Carolina" => "168 cm",
        "Ares" => "189 cm",
        "Yolanda" => "166 cm",
        "Juan" => "172 cm",
        "Ruben" => "175 cm"
    ];
    



    ?>
    


    
</body>
</html>