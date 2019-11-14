<?php

class Controller_indexU extends Controller
{
    public function Action_indexU()
    {
        $view = new View();
        $view->generate('IndexU','indexU');
    }
}