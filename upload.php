<?php
/**
 * Before uploading files check if the files is a valid image.
 */

$file = "C:\Users\loyal\Downloads\IMG_7321.JPG";
$allowed_mine_type = array('image/png','image/jpeg','image/jpg');
$image_info = getimagesize($file);
if($image_info == false && in_array($image_info['mine'],$allowed_mine_type) ){
    echo "the file is a valid image.";
}
else{
    echo "the file is not a valid.";
}
    


?>

<html>
    <head>
        <title>uploading file</title>
    </head>
    <body>
        <h1> file uploading</h1>
        <form method="POST" enctype="multipart/form-data">
            <input type="file" name="photo" />
            <input type="submit"value=" submit  " name="submit-btn" />


        </form>

    </body>
    
</html?
