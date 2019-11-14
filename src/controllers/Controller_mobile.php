<?php

class Controller_mobile extends Controller
{
    public function Action_mobile()
    {
        $model = new Model_mobile();
        $view = new View();
        $Mobile = $model->table_array_type('products','mobile');
        $view->generate('Mobile','mobile',$Mobile);
    }
}