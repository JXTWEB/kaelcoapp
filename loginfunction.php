<?php

include 'con.php';
$computerId = $_SERVER['HTTP_USER_AGENT'].$_SERVER['LOCAL_ADDR'].$_SERVER['LOCAL_PORT'].$_SERVER['REMOTE_ADDR'];
$computerId =  preg_replace('/\s+/', '', $computerId);



//echo$computerId;
$entry=  $_POST["entry"]; 
//echo$entry;
 date_default_timezone_set('Asia/Manila');
$dateinset =date("M d, Y h:i:sa");
if(!$entry){
 $res =0;
}else{

$res =0;

$result = mysqli_query($db,"SELECT * FROM `onlineaccount` WHERE `ENTRYCODE`  = '$entry' LIMIT 1");

while ($tel = mysqli_fetch_array($result))
{
$res =1;
$ftel = $tel['INI'];

$result1 = mysqli_query($db,"SELECT * FROM `ftellers` WHERE TELINI = '$ftel'");

while ($tel1 = mysqli_fetch_array($result1)){
$name = $tel1['TELLNAME'];
}
$loginstat = 0;
$lstat = mysqli_query($db,"SELECT * FROM `online_status` WHERE ini = '$ftel'");

while ($stat = mysqli_fetch_array($lstat))
{

$loginstat = 1;
$dev = $stat['device'];

}



if($loginstat ==0){
         $qry = "INSERT INTO `online_status` (`device`, `ini`) VALUES ( '$computerId', '$ftel') ";

    if($db->query($qry) === TRUE){
   
}

}else{

if(!$dev){

}else{
     echo '<script>alert("Attention: This account is currently connected to another device. Please ensure you are the only one accessing this account for security reasons.");
    window.location.href = "http://kaelco.000.pe/Upgrade/dist/login.php";	</script>';
}


}
    
session_destroy();
session_start();
$_SESSION['activeuser'] = $ftel;
    $_SESSION['start'] = date("M d, Y h:i:sa", strtotime('+3 minutes', $time));
     $_SESSION['mode'] = "unrestrict";
     $qry = "INSERT INTO `user_activity` (`initial`, `action`, `date_`) VALUES ('$ftel', 'employee $name transaction -> LOGIN (DATE: $dateinset )  ', '$dateinset') ";
         if($db->query($qry) === TRUE){
   
}
 echo '<script>
    window.location.href = "http://kaelco.000.pe/Upgrade/dist/dashboard.php";	</script>';

}




$result = mysqli_query($db,"SELECT * FROM `ftellers`");

while ($tel = mysqli_fetch_array($result))
{
$res =1;
$ftel1 = $tel['TELINI'];
$name = $tel['TELLNAME'];
//echo$ftel;
if($entry == $ftel1."2023" ){
   // echo'FOUND!';
    
session_destroy();
session_start();

	$_SESSION['activeuser'] = $ftel1;
    $_SESSION['start'] = date("M d, Y h:i:sa", strtotime('+3 minutes', $time));
    $_SESSION['mode'] = "restrict";
     $res =0;



     $qry = "INSERT INTO `user_activity` (`initial`, `action`, `date_`) VALUES ('$ftel1', 'employee $name transaction -> LOGIN (DATE: $dateinset )  ', '$dateinset') ";

    if($db->query($qry) === TRUE){
   
}



$verify =0;
$resultonline = mysqli_query($db,"SELECT * FROM online WHERE ini = '$ftel1'  ");
while ($telonline = mysqli_fetch_array($resultonline))
{

$verify =1;



}



if($verify ==0){
    $qry = "INSERT INTO `online` (`ini`, `date`) VALUES ( '$ftel1', '$dateinset')";

    if($db->query($qry) === TRUE){
  

}
}

       echo '<script>
    window.location.href = "http://kaelco.000.pe/Upgrade/dist/dashboard.php";	</script>';
}

}





}


if($res == 0){


    echo'
    <div class="alert alert-danger" role="alert">
  <strong> Invaled Entry ! </strong>
</div>
    ';

}
    




?>