<?php
include 'con.php';

$acc =  $_GET['ini'];

include 'con.php';
 $qry  = "DELETE FROM `online` WHERE `ini` = '$acc' ";
  if($db->query($qry) === TRUE){
   //echo"sent";

  echo '<script>
    window.location.href = "http://kaelco.000.pe/Upgrade/dist/dashboard.php";	</script>';


}



?>