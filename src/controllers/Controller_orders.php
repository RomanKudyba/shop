<?php

class Controller_orders extends Controller
{
    public function Action_orders()
    {
        $model = new Model_orders();
        $view = new View();
        $Orders = $model->table_array('order');
        $view->generate('Orders','orders',$Orders);
    }
}