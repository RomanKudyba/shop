
<?php

class Controller_index extends Controller
{
    public function Action_index()
    {
        $view = new View();
        $view->generate('Index','index');
    }
}