<?php

class Controller_register extends Controller
{    
    public function Action_register()
    {
       $model = new Model_register();
       $view = new View();
       $view->generate('Register','register');
    }
}