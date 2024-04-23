<?php


include 'con.php';
$email = $_POST["email"];
$acc = $_POST["acc"];
$cn = $_POST["cn"];
$cp = $_POST["cp"];
$ptype = $_POST["ptype"];
$action = $_POST["action"];


//var_dump($cn);

if(!$ptype){
if($action =="pref"){


$info = mysqli_query($db,"SELECT NEWACTS, PTYPE, BILLYEAR, BILLMONTH  FROM  fbilmast  WHERE PTYPE = '$acc' ");
while ($inforow = mysqli_fetch_array($info))
{
    $verifyem=0;
    $pptype = $inforow['PTYPE'];
      $billmonth  = $inforow['BILLYEAR']."-".$inforow['BILLMONTH'];
    $pacc = $inforow['NEWACTS'];
    $ac_n =$pacc;
if(ctype_digit($ac_n) && strlen($ac_n) == 10) {
 $ac_n = substr($ac_n, 0, 2) .'-'.
            substr($ac_n, 2, 4) .'-'.
            substr($ac_n, 6);
}
          $info1 = mysqli_query($db,"SELECT * FROM emails WHERE NEWACTS='$pacc'");
while ($inforow = mysqli_fetch_array($info1))
{
    
   
$verifyem=1;
}
if($verifyem == 0){

    //INSERT INTO `emails` (`NEWACTS`, `EMAILS`, `CONTACT_NO`, `CONTACT_ PERSON`, `YR_MO`, `PTYPE`, `_KEY`, `RECEIVED`, `NOTIFICATION`) VALUES ('$pacc', '$email', '$cn', '$billmonth', '$pptype', '', '0', '0', '$cp');
    $qry = "INSERT INTO `emails` (`NEWACTS`, `EMAILS`, `CONTACT_NO`, `CONTACT_ PERSON`, `YR_MO`, `PTYPE`, `_KEY`, `RECEIVED`, `NOTIFICATION`) VALUES ('$pacc', '$email', '$cn', '$cp', '$billmonth', '$pptype', '', '0', '0')";

    if($db->query($qry) === TRUE){
  
$nemail = $email;
echo'
<div class="alert alert-success d-flex align-items-center" role="alert">

'. $ac_n .' Successfully Registered!
  </div>
';
}
}else{
    echo'
    
    <div class="alert alert-warning d-flex align-items-center" role="alert">


 Account '. $ac_n .' Already Regisered!

</div>
    ';
}


}

}

if($action =="!pref"){



$verify =0;
$verifyacc =0;
    $info = mysqli_query($db,"SELECT * FROM emails WHERE NEWACTS='$acc'");
while ($inforow = mysqli_fetch_array($info))
{
    
    $verify =1;  
$acc = $inforow['NEWACTS'];

$nemail = $inforow['EMAILS'];
}

//echo $verify;
   $info = mysqli_query($db,"SELECT NEWACTS, CNAME, NEWMSN, CADDRESS FROM  fbilmast  WHERE NEWACTS = $acc ");
while ($inforow = mysqli_fetch_array($info))
{
      $load++;
     $verifyacc=1; 
$acc = $inforow['NEWACTS'];
$name = $inforow['CNAME'];

$newm = $inforow['NEWMSN'];
$address = $inforow['CADDRESS'];


}
$ac_n =$acc;
if(ctype_digit($ac_n) && strlen($ac_n) == 10) {
 $ac_n = substr($ac_n, 0, 2) .'-'.
            substr($ac_n, 2, 4) .'-'.
            substr($ac_n, 6);
}
if($verify == 0 && $verifyacc ==1){
    $qry = "INSERT INTO `emails` ( `NEWACTS`, `EMAILS`) VALUES ('$acc', '$email') ";

    if($db->query($qry) === TRUE){
  
$nemail = $email;
echo'
<div class="alert alert-success d-flex align-items-center" role="alert">

Successfully Registered!
  </div>
';
}
}else{
    if($verifyacc ==0){
    echo'
    
    <div class="alert alert-warning d-flex align-items-center" role="alert">


 Invalid Account N0.

</div>
    ';
    }else{
    echo'
    
    <div class="alert alert-warning d-flex align-items-center" role="alert">


 Account Already Regisered!

</div>
    ';
    }
}
?>




<div class="input-group mb-3">
  <span class="input-group-text" style="border:0;width:120px;" id="inputGroup-sizing-default">EMAIL</span>
  <input type="text" class="form-control" value="<?php echo$nemail; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" style="border:0;width:120px;" id="inputGroup-sizing-default">ACOUNT NO.</span>
  <input type="text" class="form-control" value="<?php echo$ac_n; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" style="border:0;width:120px;" id="inputGroup-sizing-default">NAME</span>
  <input type="text" class="form-control" value="<?php echo$name; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled>
</div>


<div class="input-group mb-3">
  <span class="input-group-text" style="border:0;width:120px;" id="inputGroup-sizing-default">ADDRESS</span>
  <input type="text" class="form-control" value="<?php echo$address; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled>
</div>


<div class="input-group mb-3">
  <span class="input-group-text" style="border:0;width:120px;" id="inputGroup-sizing-default">METER NO.</span>
  <input type="text" class="form-control" value="<?php echo$newm; ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled>
</div>

<?php 
mysqli_close($db);
}}else{



include 'con.php';
$verify =0;

    $info = mysqli_query($db,"SELECT * FROM emails WHERE NEWACTS='$acc'");
while ($inforow = mysqli_fetch_array($info))
{
    
    $verify =1;  

}
if( $verify == 0){
  $qry = "INSERT INTO `emails` ( `NEWACTS`, `EMAILS`) VALUES ('$acc', '$email') ";

    if($db->query($qry) === TRUE){
     echo '<script>
 window.location.href = "http://kaelco.000.pe/Upgrade/dist/kaelco1.php?action=start&ptype='.$ptype.'";	</script>';
    // echo '<script> alert("'.$ptype.'")	</script>';

}

}



}



?>