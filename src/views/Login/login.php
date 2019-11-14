<?php
include('server.php');

$errorArr = array();

if (isset($_POST['loginBtn']))
{
    $username = mysqli_real_escape_string($conn->_connectionID ,$_POST['name']);
    $password = mysqli_real_escape_string($conn->_connectionID ,$_POST['password']);    
   
    //$password = md5($password);
    $sql = "SELECT * FROM `register` WHERE username='". $username ."' AND password='". $password ."'";
    $result = $conn->Execute($sql);
    
    if ($username == 'admin' && $password == 'admin')
    {        
        $_SESSION['admin'] = 'admin';
        $_SESSION['username'] = 'admin';        
        header("location: index.php");
    }
    else 
    {        
        if ($result->recordCount() != TRUE)
        {
            array_push($errorArr, 'Username or password is incorrect');
        }
        else
        {
            $_SESSION['username'] = $username;            
            header("location: index.php");
        }
    }
}
$smarty->assign('error', $errorArr[0]);   
$smarty->display(ROOT.'/application/views/Login/tpl/login.tpl');



