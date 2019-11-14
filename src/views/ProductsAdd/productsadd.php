<?php
include('server.php');
include ('lib.php');

if (isset($_POST['save'])) 
{
    if (!empty($_POST['name']) && !empty($_POST['price']))
    {
        if (validateNum($_POST['price']))
        {
            $sql = '
            INSERT INTO 
                `products`(`type`, `name`, `price`) 
            VALUES (\''. $_POST["type"] .'\',\''. $_POST["name"] .'\',\''. $_POST["price"] .'\')';
            $conn->Execute($sql);
            location('products');		
        }
        else
        {
            $errorMsg = 'Ціна повинна містити лише цифри';
        }
    }
    else
    {
        $errorMsg = 'Поля не можуть бути порожніми';
    }
}
else if (isset($_POST['cancel'])) 
{
    location('products');
}


$smarty->assign('title','Table Products');
$smarty->assign('errorMsg',$errorMsg);
$smarty->assign('types',array('mobile','tablet','laptop'));
$smarty->assign('nameAction','Продукт/add');
$smarty->display(ROOT.'/application/Views/ProductsAdd/tpl/productsadd.tpl');
