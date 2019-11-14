<?php

class Controller_characteristic extends Controller
{
    public function Action_characteristic()
    {
        $view = new View();
        $view->generate('Characteristic','characteristic');
    }
}