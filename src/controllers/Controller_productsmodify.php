<?php

class Controller_productsmodify extends Controller
{    
    public function Action_productsmodify()
    {        
        $view = new View();      
        $view->generate('ProductsModify','productsmodify');
    }
}