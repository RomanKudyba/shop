<?php

class Controller_reportDate extends Controller
{    
    public function Action_reportDate()
    {       
        $model = new Model_reportDate();
        $view = new View();       
        $report = $model->arrayByDate();
        $view->generate('ReportDate', 'reportDate', $report);
    }
}