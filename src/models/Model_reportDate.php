<?php

class Model_reportDate extends Model{
    public function arrayByDate() 
    {
        global $conn;
	$conn->setFetchMode(ADODB_FETCH_ASSOC);
	$result = $conn->Execute("
                SELECT                                                        
                    DATE(`order`.`dt`) as date,            
                    COUNT(*) as count
                FROM 
                    `order`
                INNER JOIN
                    `products`
                ON
                    `order`.`product_id` = `products`.`id`
                WHERE
                    `bool` = 1
                GROUP BY
                    DATE(`order`.`dt`)
        ");
	return $rows=$result->getRows();
    }  
}