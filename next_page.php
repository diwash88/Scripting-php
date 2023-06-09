<?php
if(isset($_COOKIE['username'])){
    $name = $_COOKIE['username'];
    echo "hello world ,$name!";
}
else{
    echo "NOOOOOOOOOO";
}
?>