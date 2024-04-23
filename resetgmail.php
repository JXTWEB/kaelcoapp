<?php


include 'con.php';
 $qry  = "UPDATE `emails` SET `RECEIVED` = '0' WHERE `RECEIVED` = '1'";
  if($db->query($qry) === TRUE){
   //echo"sent";




}



?>