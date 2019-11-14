<?php

class View
{
    function __construct() 
    {
        
    }
    
    public function generate($dir,$view,$table_array=array(),$fields_array=array())
    {
        include ROOT.'/application/views/template.php';
    }
    
    public function generateRelation($dir,$view,$CinemaFilm=array(),$Cinema,$Film)
    {
        include ROOT.'/application/views/template.php';
    }
    
    public function generateAdd($dir,$view,$table_array=array(),$fields_array=array(),$result,$resultValid)
    {
        include ROOT.'/application/views/template.php';
    }
}