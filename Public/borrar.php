<?php
include ("deleteForm.php");
echo "<pre> iguala variables get";
echo $_COOKIE["Getid"];
echo "</pre>";
//print_r($_GET);
echo "<pre>Post: ";
print_r($_POST);
$alineas = file_get_contents('users.txt');
$numero_filas = count($alineas);
foreach ($_POST as $value)
{
    
    switch ($value)
    {
        case 'SI':
          //  array_slice($alineas, $offset);
            unset($alineas[$_COOKIE["Getid"]]);
            $cont_new = implode('', $alineas);
            $f = fopen('users.txt', 'w');
            fwrite($f, $cont_new);
            fclose($f);
        break;
        case 'NO':
        break;    
    }
   
       
}



