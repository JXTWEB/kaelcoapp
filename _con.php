<?php


$db = mysqli_connect("localhost", "kaelco_demo", "iSAJm3ZTxrR", "kaelco_demo");



if (!$db) {
  die("Connection failed: " . mysqli_connect_error());

  echo'<script>alert("Pls Wait ! Madama Update"); </script>';

}


?>
