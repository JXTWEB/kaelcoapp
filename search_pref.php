<?php


include 'con.php';


$pref = strtoupper( $_POST["name"]);



date_default_timezone_set('Asia/Manila');
$year =date("Y");
$resultptype = mysqli_query($db,"SELECT * FROM `fbilpref` WHERE PTYPE LIKE '$pref%' OR DESCRIP LIKE '$pref%'");
while ($ptype = mysqli_fetch_array($resultptype))
{
    if(!$ptype['PTYPE']){

    }else{
        $ptype2 = $ptype['PTYPE'];

            $info_ = mysqli_query($db,"SELECT PTYPE,DESCRIP FROM fbilpref WHERE PTYPE='$ptype2' LIMIT 1 ");
while ($inforow_ = mysqli_fetch_array($info_))
{
$ptype1 = $inforow_['DESCRIP'];
}
$email="";
$cn ="unregistered";
$cp ="unregistered";
$sent=0;
$unsent=0;
   $info1 = mysqli_query($db,"SELECT * FROM  gmail WHERE PTYPE = '$ptype2' ");
while ($row= mysqli_fetch_array($info1))
{
$email =$row['EMAIL'];
$cn =$row['CONTACT_NO'];
$cp =$row['CONTACT_ PERSON'];
if($row['RECEIVED'] ==1){
$sent =1;
}
if($row['RECEIVED'] ==0){
$unsent++;
}   

}

   $info = mysqli_query($db,"SELECT * FROM  emails WHERE PTYPE = '$ptype2' ");
while ($row= mysqli_fetch_array($info))
{
$status = $row['RECEIVED'];
}

$checkcolor  = '#4af549';
    $alink = 'href="http://kaelco.000.pe/Upgrade/dist/mailer.php?action=start&pause=1&ptype='.$ptype['PTYPE'].'&email='.$email.'&cp='.$cp.'&cn='.$cn.'&pname='.$ptype1.'&tran='.$trans.'&stat='.$status.'"' ;
if($sent ==1){
    $checkcolor  = 'black';
    $alink = '' ;
}

if (!$email){
      $checkcolor  = '#ff0068';
}

echo'


 <a  '. $alink.' class="mail-list">
<div class="form-check">  <svg xmlns="" width="16" height="16" fill="currentColor" class="form-check-input bi bi-envelope-plus " viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
  <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5"/>
</svg>   <i class="input-helper"></i></label></div>
<div class="content">

<p class="message_text"> <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-envelope-plus" viewBox="0 0 16 16">
<svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
</svg> <b>  '.$ptype2.'</b></p>
<p class="sender-name">'.$ptype1.'<br>'.$email.'</p>

</div>
<div class="details">
<span class="mdi mdi-checkbox-marked-circle" style ="color:'.$checkcolor.';"></span>

</div>
</a>

 ';
 
 
 }
}





?>