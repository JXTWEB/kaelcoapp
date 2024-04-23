<?php
include 'con.php';

$id =  $_GET['id'];

include 'con.php';
 $qry  = "DELETE FROM `gmail` WHERE `id` = '$id' ";
  if($db->query($qry) === TRUE){
   //echo"sent";

  echo '<script>
    window.location.href = "http://kaelco.000.pe/Upgrade/dist/mailer.php?tran=contacts";	</script>';


}



?>