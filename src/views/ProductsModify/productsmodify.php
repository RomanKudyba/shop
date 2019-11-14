<?php
include('server.php');
include ('lib.php');

$model=new Model_productsmodify;
$id = $_GET['id'];
$row= $model->SelectWithId('products',$id);

if (isset($_POST['save'])) 
{
    if (!empty($_POST['name']) && !empty($_POST['price']))
    {
        if (validateNum($_POST['price']))
        {
            $sql = '
            UPDATE 
                `products` 
            SET 
                `type`=\''. $_POST["type"] .'\',`name`=\''. $_POST["name"] .'\',`price`=\''. $_POST["price"] .'\' WHERE `id`='.$_GET['id'];                        
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

$smarty->assign('row',$row);
$smarty->assign('title','Table Products');
$smarty->assign('errorMsg',$errorMsg);
$smarty->assign('types',array('mobile','tablet','laptop'));
$smarty->assign('nameAction','Продукт/modify');
$smarty->display(ROOT.'/application/Views/ProductsModify/tpl/productsmodify.tpl');
