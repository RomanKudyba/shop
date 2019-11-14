<?php

class Controller_edit extends Controller
{
    public function Action_edit()
    {
        $view = new View();
        $view->generate('Edit','edit');
    }
}