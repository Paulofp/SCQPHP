<?php
include ("users.php");
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

//include ("DibujarTabla.php");



// Leer el contenido del fichero en un string
$string = file_get_contents('users.txt');

// Separar el string por saltos de linea y guardarlo en un array
$array = explode("\n", $string);

// Para cada elemento del array separarlo por comas
foreach($array as $key => $value)
{
    $users[] = explode(",", $value);
}

// dibujar el valor
//DibujarTabla($users);
users($array);