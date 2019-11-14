<?php

class Controller_products extends Controller
{    
    public function Action_products()
    {
        $model = new Model_products();
        $view = new View();
        $Products = $model->table_array('products');
        $view->generate('Products','products',$Products);
    }
}