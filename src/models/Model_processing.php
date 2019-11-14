<?php

class Model_processing extends Model{
    public function arrayToProcess() {
        global $conn;
	$conn->setFetchMode(ADODB_FETCH_ASSOC);
	$result = $conn->Execute("
                SELECT 
                    `products`.`type`                    
                FROM 
                    `order`
                INNER JOIN
                    `products`
                ON
                    `order`.`product_id` = `products`.`id`
                WHERE `order`.`bool` = 1
        ");
	$rows['end']=$result->getRows();
        
        $result1 = $conn->Execute("
                SELECT 
                    COUNT(1) as count                    
                FROM 
                    `order`                
                WHERE `bool` = 0
        ");
        $rows['start']=$result1->getRows();
        return $rows;
    }
   
}