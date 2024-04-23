<?php
include 'con.php';
$acc =  $_POST["acc"];

$payment=array();

$getpayment = mysqli_query($db,"SELECT * FROM 	fbilledg  WHERE NEWACTS = $acc    ");
while ($rowpayment= mysqli_fetch_array($getpayment))
{



for($x =1;$x <= 22 ;$x++){


$countp++;
if($rowpayment['LT'.$x] == "P"){

 if(!in_array($payment , [$rowpayment['LY'.$x]], true)){
array_push($payment , [$rowpayment['LY'.$x]]);
 }

}
}
$lb = $rowpayment['LB22'];
}
echo'
<table class="table table-striped" >


     <thead>
                  <tr>
			
                    <th style="width:2.33%">Tp</th>
                    <th width:10%;" >Yr-Mo</th>
                    <th >Amount</th>
                    <th>Or</th>
                    <th >Balance</th>
                  </tr>
                </thead>
        
        
	
			         <tbody >
';


////getonlypayment












$ln=0;
$resultmonth1 = mysqli_query($db,"SELECT * FROM 	fbilledg  WHERE NEWACTS = $acc    ");
while ($rowmonth1 = mysqli_fetch_array($resultmonth1))
{


$ln++;
for($x =1;$x <= 22 ;$x++){
$bg = "background-color:white";



if($rowmonth1['LT'.$x] == "B"){
$bg = "background-color:#f0a20f; color:white";


for ($row = 0; $row < $countp; $row++) {

if($rowmonth1['LY'.$x] == $payment[$row][0]){
$bg = "background-color:#53acbd; color:white";

}

}


}





$type =$rowmonth1['LT'.$x];
$or = $rowmonth1['LR'.$x] ;
if($rowmonth1['LT'.$x]=="D"){
$bg = "background-color:#38cd95; color:white";
}
if($rowmonth1['LT'.$x]=="C"){
$bg = "background-color:#b76be7; color:white";
}

if($rowmonth1['LT'.$x]==""){
$bg = "color:#f04b0f";
$type ="!";
$or = $rowmonth1['LR'.$x]." (No P-type)" ;
}
$mont = $rowmonth1['LY'.$x]."01";
 echo'<tr style="font-size:12px;" >
 

 
 ';

echo"


<td  style='".$bg .";'>".$type."</td>
<td  style='".$bg .";'>". date("M-Y", strtotime($mont))."</td>
<td  style='".$bg .";' >".number_format($rowmonth1['LA'.$x]/100, 2,'.',',')."</td>
<td style='".$bg .";' >".$or."</td>
<td  style='".$bg . "; text-align:right;'>".number_format($rowmonth1['LB'.$x]/100, 2,'.',',')."</td>



</tr>
";






}
$baluf=$rowmonth1['LB22'];
$bal = number_format($rowmonth1['LB22']/100, 2,'.',',');
$sc =3000;
if($bal  >= 100000){
$sc = $rowmonth1['LB22'] * 0.03;
}
if($bal <= 0){
    $sc = 0;
}

if($bal < 0){
$bal="0";
}
$balwsc = $baluf +$sc;
}

	
    $info = mysqli_query($db,"SELECT CNAME, CADDRESS, NEWACTS, NEWMSN, BILLSTAT FROM  fbilmast  WHERE NEWACTS = $acc    ");
while ($inforow = mysqli_fetch_array($info))
{
    $check++;
$name = $inforow['CNAME'];
$ac_n = $inforow['NEWACTS'];
$m_n = $inforow['NEWMSN'];
$stat = $inforow['BILLSTAT'];
$address = $inforow['CADDRESS'];
}

echo '


 <div class="alert alert-warning" role="alert  " style="margin:0;">
 <div class="row">
                    <div class="col-lg-9  ">Name:&nbsp;  <b>'.$name.'</b></div>
                     <div class="col-lg-9 ">Account No.:&nbsp;  <b>'.$ac_n.'</b></div>
                        <div class="col-lg-9 ">Meter No.:&nbsp;  <b>'.$m_n.'</b></div>
                          <div class="col-lg-9 ">Status.:&nbsp;  <b>'.$stat.'</b></div>
                    <div class="col-lg-9 ">Address: &nbsp; <b>'.$address.'</b></div>
                     

 <div class="col-6 ">    
              
TOTAL AR:<b> '.$bal.'</b>
</div>

 <div class="col-6 ">    
              
SC:<b> '.number_format($sc/100, 2,'.',',').'</b>
</div>
 <div class="col-12 mt-3 p-1"  >    
          <span class="p-2" style="background-color:#856404;color:white; border:2px solid #86c5d1;border-radius:5px; ">    
 TOTAL AR W/ SC:<b> '.number_format($balwsc/100, 2,'.',',').'</b>
 </span>
</div>




</div>
</div>
          
                </tbody>

</table>';



?>
<script>
   $(".ld").hide();
   </script>
