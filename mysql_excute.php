<?php   
/****
 * 
 * Mysql Aggregation(multiform into one form)
 * Type of aggregation
 * 1.COUNT
 * 2.SUM
 * 3.AVG
 * 4.MAX
 * 5.MIN
 */


 /**
  * COUNT
  * retutrn total number of values in specified field
  */
  require_once "./mysql.php";
  $countSQL =  "SELECT COUNT(*)as totalStudent FROM student";
  $result = $connection->query($countSQL);
  if($result){
    $row = $result->fetch_assoc();
    print_r($row);
  }


  /**
   * SUM
   * return the total non null value in the expression
   */
  $sumSQL =  "SELECT SUM(roll_no)as totalRoll FROM student";
  $result = $connection->query($sumSQL);
  if($result){
    $row = $result->fetch_assoc();
    print_r($row);
    echo "<br>";

  }
  /**
   * 
   * AVG
   * return the average 
   */
  $avgSQL =  "SELECT AVG(roll_no)as avgRoll FROM student";
  $result = $connection->query($avgSQL);
  if($result){
    $row = $result->fetch_assoc();
    print_r($row);
  }



  $minSQL =  "SELECT min(roll_no)as minRoll FROM student";
  $result = $connection->query($minSQL);
  if($result){
    $row = $result->fetch_assoc();
    print_r($row);
  }
/**
 * (->roll_rows>0)
 */



?>