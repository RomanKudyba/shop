<?php
include('server.php');
include ('lib.php');

if (isset($_POST['save'])) 
{    
    $sql = 'DELETE FROM `products` WHERE id= '. $_GET['id'];
    $conn->Execute($sql);
    location('products');		  
}
else if (isset($_POST['cancel'])) 
{
    location('products');
}

$smarty->assign('title','Table Products');
$smarty->assign('nameAction','Продукт/delete');
$smarty->display(ROOT.'/application/Views/ProductsDelete/tpl/productsdelete.tpl');
