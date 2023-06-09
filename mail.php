<?php
/**
 * sending email using php
 * 
 * mail(to,subject,message)
 * 
 */
mail("diwashjaic66@gmail.com","Test mail from scripting","hello am devil");
if($mailSent){
    echo "email send sucesfully";
}
else{
    echo "not ";
}

?>