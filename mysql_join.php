<?php


/**
 * MYsql join 
 * 1.inner join
 * (-> num_rows >0)
 * 2.right join
 * 3.left join
 */
require_once "./mysql.php";
$innerSQL = "SELECT p.id,p.title as product_title,c.name as categiries_name *FROM product p join categiries  c ON p.categiries_id = c.id";
$result = $connection->query($innerSQL);
$data =[];
if($result -> num_rows>0){
    while($row = $result->fetch_assoc()){
        array_push($data,$row);
    }
}
echo "<pre>";
print_r($data);

?>