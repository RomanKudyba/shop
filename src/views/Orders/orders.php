<?php
include('server.php');
include('lib.php');

foreach ($table_array as $var)
{
    $btn[] = '<a class="btn btn-info" href="index.php?type=orders&id='. $var['id'] .'">Опрацьовано</a>';
}

if (!empty($_GET['id']))
{
    $sql = "UPDATE `order` SET `bool`=1 WHERE `id`=" . $_GET['id'];
    $conn->Execute($sql);
    location('orders');
}

$smarty->assign('btn', $btn);
$smarty->assign('Products', $table_array);
$smarty->assign('username', 'admin');
$smarty->display(ROOT.'/application/views/Orders/tpl/orders.tpl');



