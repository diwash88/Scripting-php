<?php
require_once "./mysql.php";
$sql= "INSERT INTO student(name,roll_no)values('diwash',01)
";
$success=$connection->query($sql);
if($success){
    echo "record inserted successfully";}
    else{
        echo "Error";
    }





?>