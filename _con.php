<?php


$db = mysqli_connect("localhost", "kaelco_demo", "Delprado120995", "kaelco_demo");



if (!$db) {
  die("Connection failed: " . mysqli_connect_error());

  echo'<script>alert("Pls Wait ! Madama Update"); </script>';

}


?>
