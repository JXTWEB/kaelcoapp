<?php
include 'con.php';

$acc =  $_GET['ini'];
$tp =  $_GET['type'];
$verify =0;
$resultonline = mysqli_query($db,"SELECT * FROM onlineaccount WHERE INI = '$acc'  ");
while ($telonline = mysqli_fetch_array($resultonline))
{

$verify =1;



}
if($verify ==0){
    $qry = "INSERT INTO `onlineaccount` (`TYPE`, `INI`) VALUES ( '$tp', '$acc')";

    if($db->query($qry) === TRUE){
  

       echo '<script>
    window.location.href = "http://kaelco.000.pe/Upgrade/dist/dashboard.php";	</script>';
}
}

?>