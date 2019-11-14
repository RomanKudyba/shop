<?php

class Controller_productsedit extends Controller
{
    public function Action_productsedit()
    {
        $model = new Model_productsedit();
        $view = new View();
        $Products = $model->table_array('products');
        $view->generate('ProductsEdit','products',$Products);
    }
}