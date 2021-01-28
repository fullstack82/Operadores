<?php

$numero1 = 55;
$numero2 = 77;

// Operadores aritmeticos

 echo 'Suma: ' . ($numero1 + $numero2) . '</br>' ;   // Nos muestra el resultado de la suma 

echo 'Resta: ' . ($numero1 - $numero2) . '</br>' ;  // Nos muestra el resultado de la resta

echo 'Multiplicación: ' . ($numero1 * $numero2) . '</br>' ;  // Nos muestra el resultado de la multiplicación

echo 'División: ' . ($numero1 / $numero2) . '</br>' ;  // Nos muestra el resultado de la división

echo 'Resto: ' . ($numero1 % $numero2) . '</br>' ;   // Nos muestra el resultado del resto de la división



// Operadores de incremento y decremento

$year = 2019;
// $year++; //Operador de incremento
// $year--;  //Operador de decremento
// ++$year;  //Operador de pre-Incremento
// --$year;  //Operador de pre-Decremento

// Explicacion simple de los operadores

//$year = $year + 1;  // Incremento
//$year = $year - 1;  // Decremento
//$year = 1 + $year; // Pre-incremento
//$year = 1 - $year; //Pre-decremento

echo "<h1>$year</h1>";

// Operadores de asignación

$edad = 38;

echo $edad.'<br>';

echo ($edad += 5).'<br>'; 

echo ($edad -= 5).'<br>';

echo ($edad *= 5).'<br>';

echo ($edad /= 5).'<br>';