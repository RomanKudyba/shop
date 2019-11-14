<?php

class Controller_order extends Controller
{
    public function Action_order()
    {
        $view = new View();
        $view->generate('Order','order');
    }
}