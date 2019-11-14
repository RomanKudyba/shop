<?php
include('server.php');
//$btm = array();
foreach ($table_array as $key => $product)
{
    $btnM[] = '<a class="btn btn-warning form-control" href="index.php?btn=modify&id='. $product['id'] .'">Редагувати</a>';
    $btnD[] = '<a class="btn btn-danger form-control" href="index.php?btn=delete&id='. $product['id'] .'">Видалити</a>';
    $btn[] = '<a class="btn btn-info form-control" href="index.php?btm=2&id='. $product['id'] .'">Характеристика</a>';
}
$btnA = '<a class="btn btn-success form-control" href="index.php?btn=add&id='. $product['id'] .'">Додати</a>';

$smarty->assign('btn',$btn);
$smarty->assign('btnA',$btnA);
$smarty->assign('btnD',$btnD);
$smarty->assign('btnM',$btnM);
$smarty->assign('Products', $table_array);
$smarty->assign('username', 'admin');
$smarty->display(ROOT.'/application/views/ProductsEdit/tpl/products.tpl');



