<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "student";

$connection = new mysqli($host,$username,$password);
if($connection->connect_errno != 0){
    die("connection failed");
}
$connection->select_db($database);
echo "connection established";

/**
 * Mysql DataType
 * Three essential type to store
 * 1.Text
 * 2.Number
 * 3.Date and time
 * Actual Datatype
 * 1.Int = integer,size 4 bytes
 * 2.BigInt = integer,size 8 bytes
 * 3.float = Decimal number ,size 4 bytes
 * 4.Double = Decimal number ,size 8bytes
 * 5.VarChar[220] = 220 Length +1bytes size
 * 6.Tinytext = maximum length 255 
 * 7.Text =  max length 65,535 character
 * MEDIUMTEXT = string length +3 bytes
 * LONGTEXT = = string length + 4 bytes
 * DATE = YYY_MM-DD HH:MM:SS
 * ENUM = each column can have one of possible value
 * 
 */
/**
 * Spatial Data Type
 * 1. POINT
 * 2.POLYGON
 * 3.GEOMETRY
 * 
 */


?>
