<?php

include (VENDOR_PATH."/acl/Core/src/Core/View/renderView.php");
include (APPLICATION_PATH."/src/Application/Model/dbtimeline/getUsers.php");
include (APPLICATION_PATH."/src/Application/Model/dbtimeline/getUser.php");
include (APPLICATION_PATH."/src/Application/Model/dbtimeline/setUser.php");
include (APPLICATION_PATH."/src/Application/Model/dbtimeline/deleteUser.php");
include (APPLICATION_PATH."/src/Application/Model/dbtimeline/patchUser.php");
include (APPLICATION_PATH."/src/Application/Model/dbtimeline/putUser.php");

switch($request['action'])
{
    case 'index':
    case 'select':
        $users = getUsers($config['database']);  
        $content = renderView("../modules/Application/views/timeline/select.phtml",
                              array('users'=>$users)
                    );   
    break;

    case 'insert':        
        if($_POST)
        {              
            $user = setUser($_POST, $config['database']);
            header("Location: /timeline/select");
        }
        else 
        {
            $content = renderView("../modules/Application/views/timeline/insert.phtml",
                                  array('configDatabase'=>$config['database']));
        }
    break;

    case 'update':
        echo "esto es update";
        if ($_POST)
        {
            $user = putUser($_POST['id'], $_POST);
            header("Location: /timeline/select");
        }
        else
        {                       
            $user = getUser($request['params']['id']);
            $content = renderView("../modules/Application/views/timeline/update.phtml",
                              array('fieldsLine'=>$user)
                    );
        }
    break;

    case 'delete':
        echo "esto es delete";
        if ($_POST)
        {
            if ($_POST['borrar'] === "SI")
            {
                deleteUser($_POST['id']);
            }               
            header("Location: /timeline/select");    
        }
        else
        {     
            $user = getUser($request['params']['id']);
            $content = renderView("../modules/Application/views/timeline/delete.phtml",
                array('user'=>$user)
            );
        }
    break;
}

// $content = "kaka";

include ("../modules/Application/views/layouts/dashboard.phtml");