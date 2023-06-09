<?php
require_once "./mysql.php";
$sql="DELETE from student where id=1";
$result=$connection->query($sql);
if($result){
    echo "Recorded is deleted";
}





?>