<?php
include('server.php');

global $conn;

$errorArr = array();

if (isset($_POST['registerBtn']))
{
    $username = mysqli_real_escape_string($conn->_connectionID ,$_POST['name']);
    $email = mysqli_real_escape_string($conn->_connectionID ,$_POST['email']);
    $password = mysqli_real_escape_string($conn->_connectionID ,$_POST['password']); 
    $cpassword = mysqli_real_escape_string($conn->_connectionID, $_POST['cpassword']);

    if ($password != $cpassword)
    {
        array_push($errorArr, 'Passwords are not the same');          
    }
    $arr = str_split($password);
    if (count($arr) <= 6)
    {
        array_push($errorArr, 'Password is too small');
    }
    
    $sql = "SELECT * FROM `register` WHERE `username` = '$username' ";
    $result = $conn->Execute($sql);
    
    if ($result->recordCount() == TRUE)
    {
        array_push($errorArr, 'This username already exist');
    }
    $sql1 = "SELECT * FROM `register` WHERE `email` = '$email'";
    $result1 = $conn->Execute($sql1);
    
    if ($result1->recordCount() == TRUE)
    {
        array_push($errorArr, 'This email already exist');
    }
    
    if ($username == 'admin')
    {
        array_push($errorArr, 'Incorrect username');
    }
    if (count($errorArr) == 0)
    {        
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        //$password = md5($password);
        $sql = "INSERT INTO register(username,email,password) VALUES('$username','$email','$password')";
        $conn->Execute($sql); 
        header("location: index.php");
    }
}
$smarty->assign('error', $errorArr[0]);   
$smarty->display(ROOT.'/application/views/Register/tpl/register.tpl');



