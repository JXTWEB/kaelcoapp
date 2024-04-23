
<div class="row">
<div class="col-md-12 mb-4 mt-4">


<div class="btn-group">
<button type="button" class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-attachment text-primary mr-1"></i>Send SOA</button>
<a href="http://kaelco.000.pe/Upgrade/dist/mailer.php?action=start&pause=1&ptype=<?php echo$ptype;?>&cp=<?php echo$cp;?>&cn=<?php echo$cn;?>&pname=<?php echo$pname;?>" class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-delete text-primary mr-1"></i>Register Email</a>

</div>
<?php if($action=="sending" && $pause == 0){ 
    $disable ="disabled";
     ?>
<div class="container1"> 

    <div class="box">

        <div class="border one"></div>
        <div class="border two"></div>
        <div class="border three"></div>
        <div class="border four"></div>

        <div class="line one"></div>
        <div class="line two"></div>
        <div class="line three"></div>
        
    </div>
        
</div>

<?php }?>

</div>
</div>
<?php 

if($email=="uregistered email"){}else{  ?>
<div class="message-body">
<input type="hidden" value="<?php echo$ptype;  ?>"  id="ptype">
<div class="form-group row p-2 " id ="register">
<input class="form-control w-50 col-6" type="search" style="border-radius:0;" placeholder="Enter Contact Person" id="cp">
<input class="form-control w-50 col-6" type="search" style="border-radius:0;" placeholder="Contact No. ie.09********" id="cn">
<span class=" col-6 " style="padding:2px;"> </span>
<input class="form-control w-50 col-9" type="search" style="border-radius:0;" placeholder="Enter Email Address" id="email_input">
<button  class="button-62 col-3" role="button" id="remailbtn" style="border-radius:0;background:linear-gradient(to bottom right, #47c0ef, #83cd66);">register</button>
<div class="p-1" id ="registerarea"> </div>
</div>
<?php }  ?>
<h5><?php 

echo$pname;

?></h5>
<div class="sender-details">

<div class="details">

<?php 

$ptype  = $_GET['ptype'];

if($action=="start" ){
    
        $month = mysqli_query($db,"SELECT MONTH  FROM `current_bill`    ");
while ($rmonth = mysqli_fetch_array($month))
{
    $monthbill = $rmonth['MONTH'];
         $currentbillmonthreverse = $year.'-'.str_pad($rmonth['MONTH'], 2, "0", STR_PAD_LEFT);
    $currentbillmonth = str_pad($rmonth['MONTH'], 2, "0", STR_PAD_LEFT).'-'.$year;

}
      ?>

      

<h6 >CURRENT BILL MONTH <u> <?php 

    echo'<span class="" style="border-radius:10px;"><b>'. date('F-Y', strtotime($year.'-'.str_pad($monthbill, 2, "0", STR_PAD_LEFT).'-01')).'</b>';
?>
</span> </u>
</h6>
<?php

}?>
</div>
</div>
<div class="message-content p-1">
<?php if($action=="start"  ){
    
    
      ?>


<!-- Button trigger modal -->


<!-- Modal -->


<?php
$ptype  = $_GET['ptype'];

            $info_ = mysqli_query($db,"SELECT PTYPE,DESCRIP FROM fbilpref WHERE PTYPE='$ptype' LIMIT 1 ");
while ($inforow_ = mysqli_fetch_array($info_))
{
$ptype1 = $inforow_['DESCRIP'];
}

?>
 <?php 


function generateRandomString($length = 30) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}
  $keylink = generateRandomString();
 ?> 



<?php if($stat ==0) {?>
<a href="http://kaelco.000.pe/Upgrade/dist/mailer.php?action=sending&pause=0&ptype=<?php echo$ptype; ?>&key=<?php echo$keylink; ?>"class="button-62 sverisoa" role="button" id="sverisoa">SEND VERIFIED SOA</a>

<?php }else{?>
<a class="button-62 sverisoa" role="button" style=" rgb(251,251,251);background:linear-gradient(94deg, rgba(251, 251, 251, 1) 4%, #d0feef 56%, rgba(255, 255, 255, 1) 100%);color:#43908e;" disabled >SOA ALREADY SENT</a>


<?php } ?>
<a href="http://kaelco.000.pe/Upgrade/dist/prevsoa.php?id=<?php echo$ptype; ?>"  target="_blank" class="button-62 sverisoa" role="button" id="sverisoa">PRINT PREVIWEW </a>



<?php  }?>


<?php if($action=="sending" && $pause == 0){ 
    $disable ="disabled";
     ?>




<?php }?>



<?php
///Display total Sent EMAILS

  if($action=="sending" && $pause ==1){
     
$totalsent =0;
   $info1 = mysqli_query($db,"SELECT  RECEIVED, PTYPE FROM  emails WHERE PTYPE = '$ptype' AND RECEIVED ='1'  ");
   
while ($inforow1 = mysqli_fetch_array($info1))
{
$totalsent ++;

}

?>

<h4 class="text-success">
<?php


 echo$totalsent." ";  ?> 
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-envelope-check" viewBox="0 0 16 16" style="margin-top:-7px;">
  <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
  <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686"/>
</svg> EMAILS WERE SENT   </h4>

<?php   } ?>

</div>
<div class="attachments-sections pcon2 overflow-auto">
<?php 



?>
<table class="table mb-0">
                      <thead class="fw-semibold text-disabled">
                        <tr class="align-middle">
                          <th class="text-center">
                      asd
                          </th>
                          <th>Consumer Name/Address</th>
               <th>Current Bill</th>
                       <th>SOA</th>
                       
                        </tr>
                      </thead>
                      <tbody>
              <!-- start display -->        

 <?php
 date_default_timezone_set('Asia/Manila');
$dateinset =date("Y-m");
  if($action=="start" || $pause ==1){
if(!$ptype){}else{
       $bcount=1;
       $verifybillmonthJS = 0;
    $info = mysqli_query($db,"SELECT * FROM fbilmast WHERE PTYPE ='$ptype' AND BILLSTAT != 'D'");
while ($inforow = mysqli_fetch_array($info))
{
 $bcount++;
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
$email ='';
$setemail='sent';


if($action=="start"){
$setemail ='Registered';
}

$verifybillmonth = 'VERIFIED';
$bgi ='text-danger';

 if($billmonth == $currentbillmonth){
     $verifybillmonth = 'VERIFIED';
    
     $bgi='text-success';
 }
 if($billmonth != $currentbillmonth){
 $verifybillmonthJS++;

 }
 $sendcolor="text-secondary";
   $info1 = mysqli_query($db,"SELECT * FROM  emails WHERE NEWACTS = '$acc'   ");
while ($inforow1 = mysqli_fetch_array($info1))
{

$emailbillmonth = $inforow1['YR_MO'];
 $sendcolor='text-success';
}
   $info1 = mysqli_query($db,"SELECT * FROM  gmail WHERE PTYPE = '$ptype' ");
while ($row= mysqli_fetch_array($info1))
{
    $email =$row['EMAIL'];
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
                        <td style="width:25%;">  <div class="text-wrap"><?php   echo$verifybillmonth ;
                            
                         ?> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill  <?php echo $bgi; ?>" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                      </div>
                      </td>
                          <td>
                        <?php 
                       if(!$email){}else{
                        ?>  
  <div class="text-wrap"> <?php echo$setemail;  ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill  <?php echo $sendcolor; ?>" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></div>
<?php } ?>
                          <div class="small text-medium-emphasis text-wrap"><?php echo$email;
                          if(!$email){
                              
                        echo'
         <button class="button-63" style="height:auto;" data-toggle="modal" data-target="#exampleModal'.$bcount.'" '.$disable.' >   register email
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16"  class="bi bi-pen " style="margin-left:10px;" viewBox="0 0 16 16"  >
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
</svg>
</button>';
 echo '<div class="modal fade" id="exampleModal'.$bcount.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">REGISTER EMAIL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   		<label for="formEmail" class="d-block">
					<i class="icon" data-feather="mail"></i>
				</label>
				<input type="email" id="email'.$bcount.'" class="form-control form-control-lg thick" placeholder="E-mail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary register_c" id="'.$bcount.'" acc="'.$acc.'" ptype="'.$ptype.'" >Register</button>
      </div>
    </div>
  </div>';
?>


<!-- Button trigger modal -->




</div>
                         
                           </div>
                             <?php }?>
                          </td>
                        </tr>
                         

<?php }

}

?>


<script> 


  $(document).ready(function(){

var verify_billm ="<?php echo$verifybillmonthJS;  ?>";
var email = "<?php echo$linkemail;  ?>";
if (verify_billm >= 1 || !email){


$(".sverisoa").css("display", "none");
}else{
$(".sverisoa").css("display", "");
}

if(!email){
 $("#register").css("display", "");  

}else{
  $("#register").css("display", "none");  
}
  });

  </script>


<?php

  



}?>


<!-- sending display display -->

             <?php

  if($action=="sending" && $pause ==0){

      
?>


<script> 


  $(document).ready(function(){

 setInterval(function () {
        
         // $('#sendarea').empty();   
         var _ptype ="<?php echo$ptype; ?>";
         var _key ="<?php echo$key; ?>";
         //alert(_ptype);
          $.ajax({
        url:'sendgmail.php',
        type: 'POST',
        async : true,
        data: {ptype:_ptype, key:_key},
        dataType: 'text',
        success: function(data){
      // $("#sendarea").html(data);
          $("#sendarea").append(data);
          console.log(data);
           
        }
      });
         
         
  } , 1000);


  });
    </script>

      



<?php } ?>


       <tbody id="sendarea"> </tbody>
 
                
                      </tbody>





                    </table>



</div>
</div>
