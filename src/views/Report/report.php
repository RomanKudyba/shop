<?php
include('server.php');

$sdate = $_POST['sdate'];
$edate = $_POST['edate'];

if ($sdate > $edate)
{
    $smarty->assign('error', 'Дата кінця не може бути швидше');    
}
else if ($sdate && $edate)
{
    header('location: ?type=reportDate&sdate=' . $sdate .'&edate=' . $edate);
}

$smarty->assign('sdate', $sdate);
$smarty->assign('edate', $edate);
$smarty->assign('username', 'admin');
$smarty->display(ROOT.'/application/views/Report/tpl/report.tpl');