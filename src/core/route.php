<?php

class Route
{    
    public static function start()
    {                       
        if (isset($_SESSION['username']) && !isset($_GET['logout']))
        {                        
            $action_name = indexU;
            $model_name = indexU;
            $controller_name = indexU;                
        }
        else if($_GET['logout'] == 1)
        {                                
            unset($_SESSION['username']);
            unset($_SESSION['admin']);
            unset($_SESSION['email']);
            session_destroy();
            $action_name = index;
            $model_name = index;
            $controller_name = index;

        }
        else 
        {         
            $action_name = index;
            $model_name = index;
            $controller_name = index;                       
        }
        
        if($_GET['type'] == 'all')
        {
            $action_name = products;
            $model_name = products;
            $controller_name = products;           
        }
        else if($_GET['type'] == 'products')
        {
            $action_name = productsedit;
            $model_name = productsedit;
            $controller_name = productsedit;
        }
        else if($_GET['type'])
        {
            $action_name = $_GET['type'];
            $model_name = $_GET['type'];
            $controller_name = $_GET['type'];
        }
        else if (isset ($_GET['register'])) 
        {
            $action_name = register;
            $model_name = register;
            $controller_name = register;
        }        
        else if (isset($_GET['login'])) 
        {         
            $action_name = login;
            $model_name = login;
            $controller_name = login;            
        } 
        else if ($_GET['btm'] == 1) 
        {
            $action_name = order;
            $model_name = order;
            $controller_name = order;            
        }         
        else if ($_GET['btm'] == 2) 
        {
            if($_SESSION['admin'] && $_SESSION['username'] == 'admin')
            {
                if($_GET['edit'] == '1')
                {
                    $action_name = edit;
                    $model_name = edit;
                    $controller_name = edit;            
                }
                else
                {
                    $action_name = characteristic;
                    $model_name = characteristic;
                    $controller_name = characteristic;            
                }
            }            
            else
            {
                $action_name = characteristicS;
                $model_name = characteristicS;
                $controller_name = characteristicS; 
            }
        }
        else if ($_GET['btn'] == 'add') 
        {
            $action_name = productsadd;
            $model_name = productsadd;
            $controller_name = productsadd;            
        } 
        else if ($_GET['btn'] == 'modify') 
        {
            $action_name = productsmodify;
            $model_name = productsmodify;
            $controller_name = productsmodify;            
        } 
        else if ($_GET['btn'] == 'delete') 
        {
            $action_name = productsdelete;
            $model_name = productsdelete;
            $controller_name = productsdelete;            
        } 
        else if(isset ($_GET['success']))
        {
            $action_name = success;
            $model_name = success;
            $controller_name = success;            
        }       
        else if(isset ($_SESSION['admin']))
        {
            $action_name = indexA;
            $model_name = indexA;
            $controller_name = indexA;            
        }
        else if ($_GET['search'] == 1) 
        {
            $action_name = search;
            $model_name = search;
            $controller_name = search;            
        }
                  
        //префікси       
        $model_name = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;
        $action_name = 'Action_'.$action_name;
        
        if(file_exists(ROOT.'/application/models/'.$model_name.'.php')){
            include ROOT.'/application/models/'.$model_name.'.php';
        }
        if(file_exists(ROOT.'/application/controllers/'.$controller_name.'.php')){            
            include ROOT.'/application/controllers/'.$controller_name.'.php';            
        }        
        else{
            header('Location: /404');
            exit;
        }        
        $controller=new $controller_name();
        $controller->$action_name();
    }
}