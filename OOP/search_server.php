<?php 

// server site 
// select student  rollno from the database 
require_once "../mysql.php";
$name = $_GET['name'] ?? '';

$sqlquery = "SELECT *from student  WHERE  name like '%" .$name ."%'";

$result = $connection->query($sqlquery);
$data= [];
while($row = $result -> fetch_assoc()){
    array_push($data,$row);
}
//print_r($data);
 echo  JSON_encode($data); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
</head>
<body>
    <h1> iam hacker</h1>

    
</body>
<script >
     var request = new XMLHttpRequest();
     request,open('GET ',"http://localhost/scripting/mysql_insert.php");
     request.send();
     request.onreadystatechange = function () {
        if( request.readyState = 4 ){

          if( request.status == 200){
            alert(request.responseText);
        }
        else{
            alert("error:"  + request.statusText);
        }
    }

     }



</script>
</html>
