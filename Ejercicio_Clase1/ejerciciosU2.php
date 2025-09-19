<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios unidades 2 y 3</title>
</head>
<body>
    <?php
    /* 
    1. Declara una variable de cada tipo (int, double, string y boolean) e 
    imprime por pantalla sus valores y sus tipos (utiliza la función gettype para ello).
    Que salga en un formato HTML correcto y legible por personas, algo como "La variable
    es de tipo integer y tiene valor 5".
    */

    echo "<h2>Ejercicio 1</h2>";
    //variable tipo int
    $number = 10;
    echo gettype($number), "La variable es de tipo integer y tiene valor $number";
    echo "<br>";


    //varible tipo double
    $number = 5.3;
    echo gettype($number) . "La variable es de tipo int y tiene valor $number";
    echo "<br>";

    //varible tipo string
    $text = "Hola";
    var_dump($text);
    echo gettype ( "La variable es de tipo int y tiene valor $text");
    echo "<br>";

    //Variable tipo boolean
    $underAge="true";
    $type = gettype($underAge);
    echo $type;
    echo "<br>";

    /*  
    2. Declara dos variables numéricas (a y b), imprime por pantalla el módulo (a mod b) y 
    la potencia (a elevado a b, ab).
    */
    echo "<h2>Ejercicio 2</h2>";
    $number1 = 11;
    $number2 = 2;
    $mod = $number1 % $number2;
    echo "$number1 mod $number2 = $mod";
    echo "<br>";

    $number1 = 11;
    $number2 = 2;
    $pow = $number1 ** $number2;
    echo "$pow";
    echo "<br>";    

    /* 
    3. Declara tres variables: nombre, apellidos y nacimiento. Asígnales tus datos e 
    imprímelas por pantalla dentro de una tabla, con bordes, de manera que el resultado
    sea parecido a esto:
    */
    $nombre = "Carolina";
    $apellido = "Ruescas Cruz";
    $nacimiento = "Fuenlabrada";



    echo "<table broder =1>
        <tr>
            <th></th>
        </tr>

    
    
    
    
    </table>";











    

    ?>
    
</body>
</html>