<?php

class Model
{
    function __construct() 
    {
        
    }
    
    function table_array($tablename)
    {
	global $conn;
	$conn->setFetchMode(ADODB_FETCH_ASSOC);
	$result = $conn->Execute("SELECT * FROM `$tablename`");
	return $rows=$result->getRows(); 
    }
    
    function table_array_type($tablename,$type)
    {
	global $conn;
	$conn->setFetchMode(ADODB_FETCH_ASSOC);
	$result = $conn->Execute("SELECT * FROM `$tablename` WHERE `type`='$type'");
	return $rows=$result->getRows(); 
    }

    function CheckExist($colName,$tablename,$valueArr)
    {
        $controller=new Controller;
	global $conn;
	$tableArray = $this->table_array($tablename);
	$fields = $controller->fields($tableArray);
	$sql="";
	$str1 = "SELECT `$colName` FROM `$tablename` WHERE ";

	for ($i=1; $i < count($fields); $i++) 
        { 
            $str1.= $fields[$i]."='".$valueArr[$fields[$i]]."' AND ";
	}
	$str1 = preg_replace("/\W\w+\s*(\W*)$/", '$1', $str1);
	
        return $result = mysqli_query($conn->_connectionID,$str1);	
    }
    
    function InsertRow($tablename,$arrayname)
    {
	global $conn;
	$sql= $this->InsertNewStr($tablename,$arrayname);
	if (empty($sql)) 
        {
            return TRUE;
	}
        else
        {
            $conn->Execute($sql);
	}
    }
    
    function InsertNewStr($tableName,$arrValues)
    {
	global $conn;
        $controller=new Controller;
	$rs = $conn->Execute("SELECT * FROM $tableName");
	$tableArray = $this->table_array($tableName);
	$fields = $controller->fields($tableArray);
	
	for ($i=1; $i < count($fields); $i++) 
        {
            $record[$fields[$i]]=$arrValues[$fields[$i]];
        } 
    return $insertSQL = $conn->GetInsertSQL($rs, $record);	  
    }

    function SelectRowToDelete($tableName,$id)
    {
	global $conn;
	$conn->setFetchMode(ADODB_FETCH_ASSOC);
	return $row = $conn->getRow("SELECT * FROM `$tableName` WHERE id='$id'");
    }

    function DeleteRow($tableName,$id)
    {
	global $conn;
	$conn->Execute("DELETE FROM `$tableName` WHERE id='$id';");
    }

    function SelectWithId($tableName,$id)
    {
	global $conn;
	$conn->setFetchMode(ADODB_FETCH_ASSOC);
	return $row = $conn->getRow("SELECT * FROM `$tableName` WHERE id='$id'");	
    }

    function UpdateRow($tablename,$arrayname,$id)
    {
	global $conn;
	$sql= $this->UpdateStr($tablename,$arrayname,$id);
	if (empty($sql)) 
        {
            return TRUE;
	}
        else
        {
            $conn->Execute($sql);
	}	
    }

    function UpdateStr($tableName,$arrValues,$id)
    {
	global $conn;
        $controller = new Controller;
	$rs = $conn->Execute("SELECT * FROM $tableName WHERE id = $id");
	$tableArray = $this->table_array($tableName);
	$fields = $controller->fields($tableArray);
	
	for ($i=1; $i < count($fields); $i++) 
        {
            $record[$fields[$i]]=$arrValues[$fields[$i]];
        } 
     return $updateSQL = $conn->GetUpdateSQL($rs, $record);

    }

    function SelectValid($tableName,$id)
    {
	global $conn;
	return $result=mysqli_query($conn->_connectionID,"SELECT * FROM `$tableName` WHERE id='$id'");

    }
}