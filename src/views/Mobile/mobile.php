<?php
include('server.php');

$btm = array();
foreach ($table_array as $key => $product)
{
    $btn[] = '<a class="btn btn-info form-control" href="index.php?btm=2&id='. $product['id'] .'">Характеристики</a>';
    $btm[] = '<a class="btn btn-info form-control" href="index.php?btm=1&id='. $product['id'] .'">Замовити</a>';
}

$smarty->assign('btn',$btn);
$smarty->assign('btm',$btm);
$smarty->assign('Products', $table_array);
$smarty->assign('username', $_SESSION['username']);
$smarty->display(ROOT.'/application/views/Mobile/tpl/mobile.tpl');



