<?php

class Controller_search extends Controller
{    
    public function Action_search()
    {       
        $view = new View();       
        $view->generate('Search','search');
    }
}