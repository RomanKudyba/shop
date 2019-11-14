<?php

class Controller_processing extends Controller
{    
    public function Action_processing()
    {
        $model = new Model_processing();
        $view = new View();
        $Orders = $model->arrayToProcess();
        $view->generate('Processing','processing',$Orders);
    }
}