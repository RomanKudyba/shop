<?php

class Controller
{
    function __construct() 
    {
        
    }
    
    function fields($Array)
    {	
	foreach ($Array as $key => $value) 
        {
	}
	foreach ($value as $key => $value) 
        {
            $fields[] = $key;
	}
	return $fields;
    }
    
    function addCol($GenTable, $TableWithCol, $ColnameGen, $Colname)
    {
	for ($i=0; $i < count($GenTable); $i++) 
        { 
            for ($j=0; $j < count($TableWithCol); $j++) 
            {
		if ($GenTable[$i]["$ColnameGen"]==$TableWithCol[$j]['id']) 
                {
                    $GenTable[$i]["$Colname"] = $TableWithCol[$j]["$Colname"];
                }
            }
        }
    return $GenTable;
    }
    
    function makeArray($array)
    {
        $model = new Model;
	$tablearray = $model->table_array($array);
	$fields = $this->fields($tablearray);
	for ($i=1; $i < count($fields); $i++) 
        {
            $tableName[$fields[$i]] = $_REQUEST[$fields[$i]];
        }
	return $tableName;
    }

}