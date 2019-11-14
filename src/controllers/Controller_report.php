<?php

class Controller_report extends Controller
{    
    public function Action_report()
    {       
        $view = new View();       
        $view->generate('Report','report');
    }
}