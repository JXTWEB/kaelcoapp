<?php

include 'con.php';

$sql = "UPDATE `current_bill` SET `MONTH` = MONTH+1 WHERE `current_bill`.`id` = 1;";

if (mysqli_query($db, $sql)) {
     echo '<script>
 window.location.href = "http://kaelco.000.pe/Upgrade/dist/mailer.php?tran=currentbill";	</script>';
}


?>