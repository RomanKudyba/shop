<?php
include('server.php');

$sdate = $_GET['sdate'];
$edate = $_GET['edate'];

$dates = array(); 
$datesForView = array();

$Variable1 = strtotime($sdate); 
$Variable2 = strtotime($edate); 

for ($currentDate = $Variable1; $currentDate <= $Variable2;  
                                $currentDate += (86400)) { 
                                      
$Store = date('Y-m-d', $currentDate); 
$dates[] = $Store; 
} 
$k=0;
for ($i = 0; $i < count($dates); $i++)
{
    $date[$k]['date'] = $dates[$i];
    $date[$k]['count'] = 0;
    $k++;
}
foreach ($date as $dateVar)
{
    foreach ($table_array as $var)
    {
        if ($var['date'] == $dateVar['date'])
        {
            $dateVar['count'] = $var['count'];
        }
    }
    $dateVars[] = $dateVar;
}
$smarty->assign('vars', $dateVars);
$smarty->display(ROOT.'/application/views/ReportDate/tpl/reportDate.tpl');