<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <?php

    ini_set('display_errors', 1);

    ini_set('display_startup_errors', 1);

    error_reporting(E_ALL);

    // CONDICIONALES
    // En Java: if(condición) { instrucciones} else { instrucciones}
    
    $age = 25;
    if ($age > 30){
        echo "<p>No tienes abono transporte joven</p>";
    }else{
        echo "<p> Si tienes abono joven</p>";
    }

    $age = 4;
    if ($age < 3){
        echo "<p> Bebé </p>";
    }else if ($age < 10){
        echo "<p> Infantil</p>";
    }else {
        echo "<p> Mayor de 10 años </p>";
    }


    $dia =  2;   // al ser 2 imprime solo desde el martes
    switch($dia){
        case 1: 
            echo "<p>Lunes</p>";
            break;
        case 2: 
            echo "<p>Martes</p>";
            break;
        case 3: 
            echo "<p>Miercoles</p>";
            break;
        case 4: 
            echo "<p>Jueves</p>";
            break;
        default:
            echo "<p>Fin de semana</p>";
            break;  // No sería necesario porque ya termina el bloque, pero podemos ponerlo si queremos
    }

    //si la edad está entre 5 y 12 años incluidos, que salga el mesaje "estás en el colegio"
    $age = 6;
    if ($age >= 5 && $age <=12){
        echo "<p>Estás en el colegio</p>";
    }


    $number = 5;
    if( $number >3 || $number <5){
        echo "<p>A</p>";
    }else{
        echo "<p>B</p>";
    }


    $number = 7;
    if (!$number == 7){    // Al tener ! delante lo que hace es cambiar el booleano, es decir, numer era = a 7, seria true pero al tener ! delante pasa a false
         echo "<p>A</p>";
    }else{
        echo "<p>B</p>";
    }

    // Operador ternario
    $age = 4;
    $underAge = false;
    if ($age >= 18){
        $underAge = false;
    }else {
        $underAge = true;
    }

    // Operador ternario: (condicion) ? instrucciónSiTrue : instruccionSiFalse;
    $underAge = ($age >= 18) ? false : true;
    
    


    //BUCLES
    echo "<h3>BUCLES</h3>";
    //for, foreach, while, do-while

    // FOR: for (inicialización; condición; incrementos)  
    echo "<h3>Buccles for</h3>";
    // for(int i = 0; i < 10; i++) {instrucciones}

    // Bucle en PHP que imprima los números el 0 al 9
    
    for ( $i = 0; $i < 10; $i++ ){
        echo"<p>$i</p>";
    }

    echo"<p>";
    //Bucle en PHP que imprima los números pares entre el 0 y el 9
    for ( $i = 0; $i < 9; $i++ ){
        if ($i %2 == 0){
            echo "<p>$i</p>";
        }
    }
    echo"</p>";

    echo"<p>";
    echo "<p>Con el ternario</p>";  // esto es lo mismo que el anterior pero con el operador ternario
    for ( $i = 0; $i < 10; $i++ ){
        echo ($i % 2 == 0) ? $i : null;
    }
    echo"</p>";

    ?>


    <h3>Bucles While</h3>
    <?php
    //while (condicion){}
    $number = 8;
    /*
    Transfroma este bucle en un while
        for ( $i = 0; $i < 10; $i++ ){
            echo"<p>$i</p>";
        }
    */
    echo "<p>Bucle while: ";
    $i = 0;
    while ($i < 10){
        echo "$i";
        $i++;
    }
    echo "</p>";

    //do-while
    echo "<p>Bucle do- while: ";
    $i = 11;
    do{
        echo "$i";
        $i++;
    }while ($i < 10);
    echo "</p>";

    /*
    echo "<p>Bucle do- while que no estaría bien porque sería un bulce infinito: ";
    do{
        $i = 8;
        echo "$i";
        $i++;
    }while ($i < 10);
    echo "</p>";
    */

    //Imprime por pantalla los números del 1 al 5 (incluidos) dentro de una lista html no ordenada
    echo "<p>Lista no ordenada: </p>";
    echo "<ul>";
    for ($i = 1; $i < 6; $i++){
        echo "<li>$i</li>";
        
    }
    echo "</ul>";

    // otra forma de hacerlo pero con un bucle while
    $number = 1;
    echo "<ul>";
     while ($number < 6){
        echo "<li>";
        echo "$number";
        $number++;
        echo "</li>";
    }
    echo "</ul>";


    
    ?>
</body>
</html>