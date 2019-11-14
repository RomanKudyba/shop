<?php

class Controller_laptop extends Controller
{
    public function Action_laptop()
    {
        $model = new Model_laptop();
        $view = new View();
        $Laptop = $model->table_array_type('products','laptop');
        $view->generate('Laptop','laptop',$Laptop);
    }
}