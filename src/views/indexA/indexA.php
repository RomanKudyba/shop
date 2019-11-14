<?php
include('server.php');

$smarty->assign('username', 'admin');
$smarty->display(ROOT.'/application/views/IndexA/tpl/indexA.tpl');



