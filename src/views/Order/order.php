<?php
include('server.php');
include ('lib.php');

$smarty->assign('username', $_SESSION['username']);
$smarty->assign('urll', ROOT.'application/views/Success/success.php');

if (isset($_POST['sendOrder']))
{
    $order = array(
        'name' => $_POST['Name'],
        'surname' => $_POST['Surname'],
        'email' => $_POST['Email'],
        'number' => $_POST['Number'],
        'product_id' => $_POST['productId']
    );
    $sqll = "SELECT * FROM `order` WHERE `name` ='". $order['name'] ."' AND `surname` ='". $order['surname'] ."' AND `email` ='". $order['email'] ."' AND `number` ='". $order['number'] ."' AND `product_id` ='". $order['product_id'] ."';";
    $result = $conn->Execute($sqll);
 
    if (validateString($order['name']))
    {        
        if (validateString($order['surname']))
        {            
            if (validateNum($order['number']))
            { 
                if ($result->recordCount() != TRUE)
                {                    
                    $sql = "
                    INSERT INTO 
                        `order`(`name`,`surname`,`email`,`number`,`product_id`) 
                    VALUES('". $order['name'] ."', '". $order['surname'] ."', '". $order['email'] ."', '". $order['number'] ."', '". $order['product_id'] ."');";    
                    $conn->Execute($sql);
                    $errorMsg = "Ваше замовлення прийняте.";                            
                }
                else
                {
                    $errorMsg = "Ваше замовлення вже існує";                
                }
            }    
            else
            {
                $errorMsg = "Введіть номер цифрами";                
            }
        }
        else
        {
            $errorMsg = "Введіть прізвище буквами";
        }
    }
    else
    {
        $errorMsg = "Введіть ім'я буквами";
    }
}

$smarty->assign('msg', $errorMsg);
if (isset($_SESSION['username']))
{
    $smarty->assign('productId', $_GET['id']);
    $smarty->assign('userEmail', $_SESSION['email']);
    $smarty->display(ROOT.'/application/views/Order/tpl/order.tpl');
}
else
{
    $smarty->display(ROOT.'/application/views/Order/tpl/orderError.tpl');
}
