<?php
require_once "./mysql.php";
$sql ="UPDATE student SET name -> 'RAM' WHERE roll_no=01";
$result=$connection->query($sql);
if($result){
    echo"update sucess";

}
else{
    echo"error";
}


?>
