<?php

class Controller_admin extends Controller
{
    public function Action_admin()
    {
        $view = new View();
        $view->generate('Admin', 'admin');
    }
}