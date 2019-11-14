<?php

class Controller_productsdelete extends Controller
{    
    public function Action_productsdelete()
    {        
        $view = new View();      
        $view->generate('ProductsDelete','productsdelete');
    }
}