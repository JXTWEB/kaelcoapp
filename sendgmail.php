            <?php


include 'con.php';
$ptype = $_POST['ptype'];

$key = $_POST['key'];

 date_default_timezone_set('Asia/Manila');
$dateinset =date("Y-m");
$year =date("Y");
$dateinset1 =date("Y-m-d h:i:sa");
    $month = mysqli_query($db,"SELECT MONTH  FROM `current_bill`    ");
while ($rmonth = mysqli_fetch_array($month))
{
    $monthbill = $rmonth['MONTH'];
      $currentbillmonthreverse = $year.'-'.str_pad($rmonth['MONTH'], 2, "0", STR_PAD_LEFT);

}
//echo  $currentbillmonthreverse;
$find=0;
$sent=0;
///note naka depende jy table t current bill n
   $info1 = mysqli_query($db,"SELECT * FROM  emails WHERE _KEY != '$key' AND PTYPE = '$ptype' AND RECEIVED='0' LIMIT 1");
while ($inforow1 = mysqli_fetch_array($info1))
{

 $email =$inforow1['EMAILS'];
$acc =$inforow1['NEWACTS'];

       $bcount=1;
       //remind include mo jy interuption nu nga han na sendan  nu nu han nga current bill jy nak naka kabil jy fbilmast
    $info = mysqli_query($db,"SELECT BILLMONTH,BILLYEAR, NEWACTS, CADDRESS, CNAME  FROM fbilmast WHERE NEWACTS ='$acc' ");
while ($inforow = mysqli_fetch_array($info))
{
 $bcount++;
$find=1;
     $billmonth  = $inforow['BILLMONTH']."-".$inforow['BILLYEAR'];
$acc = $inforow['NEWACTS'];
$address = $inforow['CADDRESS'];
$name = $inforow['CNAME'];
$ac_n =$acc;
if(ctype_digit($ac_n) && strlen($ac_n) == 10) {
 $ac_n = substr($ac_n, 0, 2) .'-'.
            substr($ac_n, 2, 4) .'-'.
            substr($ac_n, 6);
}

}}
if($find ==1){



 $qry  = "UPDATE `emails` SET `YR_MO` = '$currentbillmonthreverse', `_KEY` = '$key', `_DATE` = '$dateinset1', `_DATE` = '$dateinset1' WHERE `NEWACTS` = '$acc'";
  if($db->query($qry) === TRUE){
   //echo"sent";
    $sent=1;



}}

if($find ==1){
$bgi ='text-secondary';
if ($sent ==1){
$bgi ='text-success';

}
?>



  <tr class="align-middle">
                          <td class="text-center">
                            <div class="avatar avatar-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
</svg>

                            </div>
                          </td>
                          <td>
                            <div class="text-wrap"><?php  echo$name; ?></div>
                            <div class="small text-medium-emphasis text-wrap"><?php echo$address. '( <b>'.$ac_n.'</b> )' ; ?></div>
                          </td>
                        <td>  <div class="text-wrap"><?php   echo$billmonth ;
                            
                         ?> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill  <?php echo $bgi; ?>" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                      </div>
                      </td>
                          <td>
           
  <div class="text-wrap"> <?php $email;  ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></div>

                  <div class="small text-medium-emphasis text-wrap"><?php echo$email;?></div>

<!-- Button trigger modal -->





      
                          </td>
                        </tr>




<?php


}



if($find ==0){
//echo$find;

include 'send_email/index.php';


}


             ?>
                      
         