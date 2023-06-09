<?php
//subquery connected
require_once "./mysql.php";
$innerSQL = "SELECT  * FROM categiries   WHERE id IN (
   SELECT DISTINCT categiries_id FROM products ) ";
$result = $connection->query($innerSQL);
$data =[];
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        array_push($data,$row);
    }
}

?>