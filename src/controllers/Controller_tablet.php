<?php

class Controller_tablet extends Controller
{    
    public function Action_tablet()
    {
        $model = new Model_tablet();
        $view = new View();
        $Products = $model->table_array_type('products','tablet');
        $view->generate('Tablet','tablet',$Products);
    }
}