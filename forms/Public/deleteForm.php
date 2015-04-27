<?php 
//include ("borrar.php");


echo "<pre>Get: ";
print_r($_GET);
echo "</pre>";

echo "<pre>Post: ";
print_r($_POST);
echo "</pre>";
foreach ($_GET as $key => $value)
{
$get=$value;
setcookie("Getid",$get);
echo $_COOKIE["Getid"];
}

//echo "<pre> iguala variables get";
//echo $_COOKIE["Getid"];
//echo "</pre>"
?>


<form method ="POST" action="borrar.php">
Estas segutro que quieres borrar el usuario: ?

<input name="borrar" value="SI" type ="submit"/>
<input name="borrar" value="NO" type ="submit"/>


</form>