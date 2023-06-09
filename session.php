<?php
/**
 * Session
 * simple file or database record which contain small pieces of data in a server side.
 * Instead of sending data to browser , it sends a unique ID called SESSION ID to the browser.
 * 
 * On each  future request, browser will send  the session ID.
 * 
 */
/**
 * How to create session 
 * session_start();
 * $_SESSION['darkMode']= true;
 */
session_start();
if(isset($_SESSION['page_count'])){
    $_SESSION['page_count'] +=1; 
}
else{


$_SESSION['page_count']=1;
}
session_destroy();// destroyed all session
//unset($_SESSION['page_count']);// only one session destroyed
echo "this page has been visited ",$_SESSION['page_count'] . "time";

?>