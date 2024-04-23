<?php

$email = $_POST['email']; 
$cn = $_POST['cn']; 
$cp = $_POST['cp']; 
$ptype = $_POST['ptype']; 


include 'con.php';
 $accreg=0;
$info = mysqli_query($db,"SELECT NEWACTS, PTYPE, BILLYEAR, BILLMONTH  FROM  fbilmast  WHERE PTYPE = '$ptype' ");
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
   $accreg++;

}
}else{
  
}


}

$found=0;
$info = mysqli_query($db,"SELECT * FROM `gmail`  WHERE PTYPE = '$ptype' LIMIT 1 ");
while ($inforow = mysqli_fetch_array($info))
{
$found=1;

}



if($found == 0){


 $qry = "INSERT INTO `gmail` ( `EMAIL`, `PTYPE`, `CONTACT_PERSON`, `CONTACT_NO`) VALUES ( '$email', '$ptype', '$cp', '$cn')";

    if($db->query($qry) === TRUE){
           echo'<div class="alert alert-warning" role="alert">
 '. $accreg.' Account Registered!
</div>
        ';
    }

}else{
            echo'<div class="alert alert-warning" role="alert">
  ALready Registered!
</div>
        ';
}

?>