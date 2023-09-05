<?php

// Asignacion
$num = 9;
$lang = [
    'es' => 'español',
    'en' => 'inglés'
];

// Aritmetica

echo "Suma 2 + 2: " . ((int) 2 + (int) 2);
echo "<br/>";
echo "Suma 2 - 2: " . ((int) 2 - (int) 2);
echo "<br/>";
echo "Suma 2 * 2: " . ((int) 2 * (int) 2);
echo "<br/>";
echo "Suma 2 / 2: " . ((int) 2 / (int) 2);
echo "<br/>";
echo "Suma 2 % 2: " . ((int) 2 % (int) 2);
echo "<br/>";
echo "Suma 2 ** 2: " . ((int) 2 ** (int) 2);

// Comparacion

// Igual ==, valor '9' == 9
// Igual ===, valor - tipo 9 === 9
// Diferencias !=, valor
// Diferencias !==, valor - tipo
// <, >, <=, >=

// Variables variables
$app = 'name';
$name = 'platzi';

echo "<br/>";
echo $app; // name
echo "<br/>"; 
echo $$app; // platzi

