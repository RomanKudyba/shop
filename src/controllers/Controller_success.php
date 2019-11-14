<?php

class Controller_success extends Controller
{    
    public function Action_success()
    {      
       $view = new View();
       $view->generate('Success','success');
    }
}