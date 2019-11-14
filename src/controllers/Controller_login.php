<?php

class Controller_login extends Controller
{
    public function Action_login()
    {
       $model = new Model_login();
       $view = new View();
       $view->generate('Login','login');
    }
}