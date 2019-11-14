<?php

class Controller_indexA extends Controller
{
    public function Action_indexA()
    {
        $view = new View();
        $view->generate('IndexA','indexA');
    }
}