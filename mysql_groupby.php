<?php

///AESC
//DESC
require_once "./mysql.php";
$innerSQL = "SELECT COUNT(title) from product GROUP BY categires_id DESC ";
$result = $connection->query($innerSQL);
$data =[];
if($result ){
    while($row = $result->fetch_assoc()){
        array_push($data,$row);
    }
}
echo "<pre>";
print_r($data);

?>