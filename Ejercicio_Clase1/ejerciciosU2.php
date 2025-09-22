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
    EJERCICIO 1
    Declara una variable de cada tipo (int, double, string y boolean) e 
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
    EJERCICIO 2
    Declara dos variables numéricas (a y b), imprime por pantalla el módulo (a mod b) y 
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
    EJERCICIO 3
    Declara tres variables: nombre, apellidos y nacimiento. Asígnales tus datos e 
    imprímelas por pantalla dentro de una tabla, con bordes, de manera que el resultado
    sea parecido a esto:
    */

    echo "<h2>Ejercicio 3 </h2>";
    $nombre = "Carolina";
    $apellido = "Ruescas Cruz";
    $nacimiento = "1996";

    echo"<table border=1>
        <tr>
            <td>Nombre</td> 
            <td>$nombre</td>
        </tr>
        <tr>
            <td>Apellidos</td>
            <td>$apellido</td>
        </tr>
        <tr>
            <td>Año de Nacimiento</td>
            <td>$nacimiento</td>
        </tr>
    </table>";
    echo "<br>";


    /* 
    EJERCICIO 4
    Define una variable llamada edad. Mostrar la edad actual, mostrar la edad que tendrá 
    dentro de 10 años y los años que le quedan para jubilarse (suponiendo que la edad de 
    jubilación es 60). Por ejemplo, si edad=39, muestra un mensaje “Actualmente tienes 39 años, 
    dentro de diez tendrás 49. Te quedan 21 para jubilarte”.
    */ 
    echo "<h2>Ejercicio 4</h2>";
    $age = 29;
    if ($age < 60){
        $after = $age + 10;
        $jubilacion = 60 - $age;
        echo"Actualmente tiene $age , dentro de diez años tendrá $after . Te quedan $jubilacion para jubilarte";
    }
    echo "<br>";


    /* 
    EJERCICIO 5
    A partir de un precio contenido en la variable precio, muestra el mensaje “caro” si es mayor 
    o igual a 1000, “medio” si el precio está entre 100 y 1000, “barato” si es menor o igual a 100, 
    y “precio negativo” si es negativo.
    */
    echo "<h2>Ejercicio 5</h2>";
    $precio = 50;
    if ($precio >= 1000){
        echo "<p>caro</p>";
    }else if ($precio >= 100 && $precio < 1000){
        echo "<p>medio</p>";
    }else if($precio <= 100){
        echo "<p>Barato</p>";
    }else{
        echo "<p>Precio inválido</p>";
    }


    








        











    

    ?>
    
</body>
</html>