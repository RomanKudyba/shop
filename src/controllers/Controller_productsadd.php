<?php

class Controller_productsadd extends Controller
{    
    public function Action_productsadd()
    {        
        $view = new View();      
        $view->generate('ProductsAdd','productsadd');
    }
}