<?php
include('server.php');

$smarty->assign('username', $_SESSION['username']);
$smarty->display(ROOT.'application/views/headerA/tpl/headerA.tpl');