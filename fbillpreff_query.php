
<table class="table table-striped" style="margin:0;padding:0;  font-size:14px;  font-family: sans-serif;">
 
  <tbody>
<?php


include 'con.php';
            $info_ = mysqli_query($db,"SELECT PTYPE,DESCRIP FROM fbilpref  ");
while ($inforow_ = mysqli_fetch_array($info_))
{
    $ptype="";
$ptype = $inforow_['PTYPE'];
$desc = $inforow_['DESCRIP'];
//echo $ptype."<br>";
echo'<tr><td><b>'.$desc.'- '.$ptype.'</b></td></tr>
';
$info = mysqli_query($db,"SELECT * FROM  fbilmast  WHERE PTYPE = '$ptype'  ");
while ($inforow = mysqli_fetch_array($info))
{
      $load++;
      $area = $inforow['AREA'];
   $currentbill = $inforow['CURRENTBIL'];
     $billmonth = $inforow['BILLMONTH'];
       $billyear = $inforow['BILLYEAR'];
$acc = $inforow['NEWACTS'];
$name = $inforow['CNAME'];
 $ac_n =$acc;
if(ctype_digit($ac_n) && strlen($ac_n) == 10) {
 $ac_n = substr($ac_n, 0, 2) .'-'.
            substr($ac_n, 2, 4) .'-'.
            substr($ac_n, 6);
}
echo'
   <tr class="nopadding" style="padding:3px; margin:0;">
      <td class="td text-start" style="margin:0:">'. $count1.'</td> 
       <td class="td text-start text-nowrap" style="margin:0;padding:3px;">'. $ac_n.'</td> 
        <td class="td text-start" style="margin:0:">'.$name.'</td> </tr>';


}
$ptype="";
}





?>

</tbody>
</table>