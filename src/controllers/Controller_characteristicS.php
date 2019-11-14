<?php

class Controller_characteristicS extends Controller
{
    public function Action_characteristicS()
    {
        $view = new View();
        $view->generate('CharacteristicS','characteristicS');
    }
}