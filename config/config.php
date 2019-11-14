<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//> Константи для звернення до контроллерів


//>Ініціалізація шаблону смарті
include_once __DIR__.'/../library/Smarty/libs/Smarty.class.php';
$smarty = new Smarty();
// echo "hello, all is ok";
$smarty->setTemplateDir('views');
//$smarty->setCompliteDir('tmp/smarty/templates_c');
$smarty->setCacheDir('tmp/smarty/cache');
$smarty->setConfigDir('configs');



