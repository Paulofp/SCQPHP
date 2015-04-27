<?php

function putUser($id, $data,$config)
{
//     $users = file('../data/users.txt');
//     foreach($data as $key => $value)
//     {
//         if(!is_array($value))
//             $data[$key]=$value;
//         else
//             $data[$key]=implode("|",$value);
//     }
    
//     $users[$id] = implode(",", $data)."\n";
//     file_put_contents('../data/users.txt', $users);
        
//     return true;

// Conectarse al DBMS
$link = mysqli_connect($config['host'],
    $config['user'],
    $config['password']
);

// Seleccionar la DB
mysqli_select_db($link, $config['database']);


// Crear la consulta
                     
$query="UPDATE user SET  name = '".$data['name']."',
                     email='".$data['email']."',
					 password='".$data['password']."',
                     description='".$data['description']."',
           
                     gender_idgender=".$genders[$data['gender']].",
                     city_idcity=".$cities[$data['city']]." WHERE id=$id";

//         echo $query;
//         die;
// Enviar la consulta
$result = mysqli_query($link, $query);

//         echo "<pre>";
//         print_r($result);
//         echo "</pre>";
 
// Cerra la coneccion
mysqli_close($link);


return $result;



}