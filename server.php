<?php

include ('config/config.php');
include ('adodb/adodb.inc.php');
ob_start();
define("ROOT", dirname(__FILE__));

session_start();

if (isset($_SESSION['username']) && !isset($_GET['logout']) && !isset($_SESSION['admin']))
{    

    $smarty->assign('url', ROOT.'/application/views/headerU/tpl/headerU.tpl');
}
else if (isset($_SESSION['admin']) && !isset($_GET['logout']))
{                
    $smarty->assign('url', ROOT.'/application/views/headerA/tpl/headerA.tpl');
}
else if ($_GET['logout'] == 0){                                
    $smarty->assign('url', 'html/header.php');
}
else
{
    $smarty->assign('url', 'html/header.php');
}
            
$conn = &ADONewConnection('mysqli');
$conn->PConnect('localhost','root','','shop');

