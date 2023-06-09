<?php
/**
 * On first time : create a form asking user name
 * On submit :set cookie with user name.
 * On next page visit if cookies is set display "hello world " name.
 */

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    setcookie('username',$name,time()+(86400*30),'/');
}




?>
<html>
    <head>
        <title>hello world</title>
    </head>
    <body >
        <form method="POST" action="next_page.php ">
            <input type = "text" placeholder="Enter name" />
            <input type="submit" value="submit" name="submit-btn"/>
        </form>
    </body>
<html>