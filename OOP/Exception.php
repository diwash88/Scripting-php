<?php


class LongMessageException extends Exception {
    
}

/**
 * Exception
 * 
 */
function sendMessage($mesage){
    if($message = " "){
        throw new Exception(" emplty value");
    }
    if(strlen($message) > 20){
        //throw new Exception("string message must be less than 20");
         throw new LongMessageException(" string message must be less than 20");
    }
    echo "message  sent"; 
}
try {
$messag("hello");
$sendMessage("hello iam a another person where under the section non grading");
}
catch(Exception $e){
    echo " general error";

}

catch(Exception){
    echo "Error " .$e->getMessage();
}
finally{
    echo " finally ran";
}




?>


