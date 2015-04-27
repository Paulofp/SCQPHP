<?php


function deleteUser($id,$config)
{
    $link = mysqli_connect($config['host'],
        $config['user'],
        $config['password']
    );
    
    // Seleccionar la DB
    mysqli_select_db($link, $config['database']);
    
    
    // Crear la consulta
     
//     $query="UPDATE user SET  name = '".$data['name']."',
//                      email='".$data['email']."',
// 					 password='".$data['password']."',
//                      description='".$data['description']."',
      
//                      gender_idgender=".$genders[$data['gender']].",
//                      city_idcity=".$cities[$data['city']]." WHERE id=$id";
    $query ="DELETE from user where id='".$_POST['id']."'";
    
       $result = mysqli_query($link, $query);
    
     mysqli_close($link);
    echo "<br> post";
    print_f ($_POST);
    die;
    
    return true;
}