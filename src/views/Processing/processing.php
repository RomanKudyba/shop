<?php
include('server.php');

$countLaptop = 0;
$countTablet = 0;
$countMobile = 0;

foreach ($table_array['end'] as $var)
{
    if ($var['type'] == 'mobile')
    {
        $countMobile++;
    }
    else if ($var['type'] == 'tablet')
    {
        $countTablet++;
    }
    else if ($var['type'] == 'laptop')
    {
        $countLaptop++;
    }
}

$smarty->assign('start', $table_array['start'][0]['count']);
$smarty->assign('countMobile',$countMobile);
$smarty->assign('countTablet', $countTablet);
$smarty->assign('countLaptop', $countLaptop);
$smarty->assign('username', 'admin');
$smarty->display(ROOT.'/application/views/Processing/tpl/processing.tpl');