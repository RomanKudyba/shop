<?php
include('server.php');

$sql = '
SELECT 
    `products`.`name`,
    `characteristics`.`waterProtect`,
    `characteristics`.`material`,
    `characteristics`.`weight`,
    `characteristics`.`dimentions`,
    `characteristics`.`typeScreen`,
    `characteristics`.`sizeScreen`,
    `characteristics`.`expantion`,
    `characteristics`.`mainCamera`,
    `characteristics`.`frontalCamera`,
    `characteristics`.`countModels`,
    `characteristics`.`focus`,
    `characteristics`.`flash`,
    `characteristics`.`stabilisation`,
    `characteristics`.`product_id`            
FROM 
    `characteristics` 
INNER JOIN 
    `products`
ON
    `products`.`id` = `characteristics`.`product_id`
WHERE 
    `characteristics`.`product_id` = '.$_GET['id'] ;
$return = $conn->Execute($sql);
$array = $return->getRows();

$smarty->assign('smar', "http://localhost/shop/index.php?btm=2&id=".$_GET['id']);
$smarty->assign('model', $array[0]['name']);
$smarty->assign('waterProtect', $array[0]['waterProtect']);
$smarty->assign('material', $array[0]['material']);
$smarty->assign('weight', $array[0]['weight']);
$smarty->assign('dimentions', $array[0]['dimentions']);
$smarty->assign('typeScreen', $array[0]['typeScreen']);
$smarty->assign('sizeScreen', $array[0]['sizeScreen']);
$smarty->assign('expantion', $array[0]['expantion']);
$smarty->assign('mainCamera', $array[0]['mainCamera']);
$smarty->assign('frontalCamera', $array[0]['frontalCamera']);
$smarty->assign('countModels', $array[0]['countModels']);
$smarty->assign('focus', $array[0]['focus']);
$smarty->assign('flash', $array[0]['flash']);
$smarty->assign('stabilisation', $array[0]['stabilisation']);
$smarty->assign('product_id', $array[0]['product_id']);
$smarty->assign('root', ROOT.'/application/views/Characteristic/characteristic.php');
$smarty->assign('username', $_SESSION['username']);
$smarty->display(ROOT.'/application/views/Edit/tpl/edit.tpl');



