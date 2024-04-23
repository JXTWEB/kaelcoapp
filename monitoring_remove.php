<?php

include 'con.php';

 date_default_timezone_set('Asia/Manila');
$dateinset =date("Y-m-d");

$acc =  $_POST["acc"];

$sql = "DELETE FROM monitoring WHERE NEWACTS='$acc'";

if ($db->query($sql) === TRUE) {
  echo '<div class="alert alert-danger" role="alert">Record Deleted Successfully !</div>';



  echo"
  <script> 




window.location.href = 'disconnection_monitoring.php';

  

    </script>
  
  ";
} else {
  echo "Error deleting record: " . $conn->error;
}


?>