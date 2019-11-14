<?php
include('server.php');

$result = $conn->Execute("SELECT * FROM `products` WHERE `name` LIKE '%" .$_POST['search'] ."%'");  
$table_array=$result->getRows();

$btn = array();
$btm = array();

foreach ($table_array as $var)
{
    $btn[] = '<a class="btn btn-info form-control" href="index.php?btm=2&id='. $var['id'] .'">Характеристики</a>';
    $btm[] = '<a class="btn btn-info form-control" href="index.php?btm=1&id='. $var['id'] .'">Замовити</a>';
}

$smarty->assign('btn',$btn);
$smarty->assign('btm',$btm);
$smarty->assign('Products', $table_array);
$smarty->assign('username', $_SESSION['username']);
$smarty->display(ROOT.'/application/views/Search/tpl/search.tpl');



