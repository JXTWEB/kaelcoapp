
 <?php


error_reporting(0);


 date_default_timezone_set('Asia/Manila');
$dateinset =date("M d, Y h:i:sa");
$ln=0;
include 'con.php';


$acc =  $_POST["acc"];
$ini =  $_POST["ini"];
$name =  $_POST["name"];
$payment=array();
var_dump($ini) ;
$countp=0;

////getonlypayment



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

}










  $info = mysqli_query($db,"SELECT NEWACTS, CNAME FROM  fbilmast  WHERE NEWACTS = '$acc'  LIMIT 1");
while ($inforow = mysqli_fetch_array($info))
{
      $load++;

$rname = $inforow['CNAME'];

}

$acclength = mb_strlen($acc);
if($acclength == 10){
 if(!$ini){

 }else{
     if($ini == 'RDD'){}
     else{
$qry = "INSERT INTO `user_activity` (`initial`, `action`, `date_`) VALUES ('$ini', '$name  Verify Member Consumer name $rname', '$dateinset') ";

    if($db->query($qry) === TRUE){
  
    
}}}


$resultmonth = mysqli_query($db,"SELECT * FROM 	fbilledg  WHERE NEWACTS = $acc    ");
while ($rowmonth = mysqli_fetch_array($resultmonth))
{


$ln++;
for($x =1;$x <= 22 ;$x++){
$bg = "background-color:white";
$tooltip="";
$dadate =$rowmonth['LD'.$x];
$nitfbil_lenght = strlen($rowmonth['LE'.$x]);
$initfbil_collectedby='';
  $initfbil_postedby='';


if($rowmonth['LT'.$x] == "B"){
$bg = "background-color:#f0a20f; color:white";


for ($row = 0; $row < $countp; $row++) {

if($rowmonth['LY'.$x] == $payment[$row][0]){
$bg = "background-color:#53acbd; color:white";

}

}


}





if($rowmonth['LT'.$x] == "P"){

 $initfbil_collectedby  = substr($rowmonth['LE'.$x] ,0,3);
$result2 = mysqli_query($db,"SELECT * FROM ftellers WHERE TELINI = '$initfbil_collectedby'  ");
while ($tel2 = mysqli_fetch_array($result2))
{

$name_coll1 = $tel2['TELLNAME'];
}
 $tooltip_t = 'Collected And Posted By '.$name_coll1.' ON '.date("F d, Y", strtotime($dadate));



    if($nitfbil_lenght == 7){
        $initfbil_postedby= substr($rowmonth['LE'.$x],-3);
 $initfbil_collectedby  = substr($rowmonth['LE'.$x] ,0,3);
$result = mysqli_query($db,"SELECT * FROM ftellers WHERE TELINI = '$initfbil_postedby'  ");
while ($tel = mysqli_fetch_array($result))
{

$name_pos = $tel['TELLNAME'];
}
$result1 = mysqli_query($db,"SELECT * FROM ftellers WHERE TELINI = '$initfbil_collectedby'  ");
while ($tel1 = mysqli_fetch_array($result1))
{

$name_coll = $tel1['TELLNAME'];
}

 $tooltip_t = 'Collected By '.$name_coll.' and Posted By '.$name_pos.' ON '.date("F d, Y", strtotime($dadate));

}




$tooltip =" data-coreui-toggle='tooltip' data-coreui-placement='bottom'
        data-coreui-custom-class='custom-tooltip'
        data-coreui-title='".$tooltip_t." '" ;

}
$type =$rowmonth['LT'.$x];
$or = $rowmonth['LR'.$x] ;
if($rowmonth['LT'.$x]=="D"){
$bg = "background-color:#38cd95; color:white";
}
if($rowmonth['LT'.$x]=="C"){
$bg = "background-color:#b76be7; color:white";
}

if($rowmonth['LT'.$x]==""){
$bg = "color:#f04b0f";
$type ="!";
$or = $rowmonth['LR'.$x]." (No P-type)" ;
}
$mont = $rowmonth['LY'.$x]."01";
 echo'<tr style="font-size:12px;" >
 

 
 ';

echo"


<td  style='".$bg .";'>".$type."</td>
<td  style='".$bg .";'>". date("M-Y", strtotime($mont))."</td>
<td  style='".$bg .";' >".number_format($rowmonth['LA'.$x]/100, 2,'.',',')."</td>
<td style='".$bg .";' '.$tooltip.' >".$or."</td>
<td  style='".$bg . "; text-align:right;'>".number_format($rowmonth['LB'.$x]/100, 2,'.',',')."</td>

<script> $('#ld').hide();</script>


</tr>
";






}
}
}
              ?>
          <input type="hidden" id="b_id" value ="<?php echo$acc; ?>"> 
              <script>
         
      
  $(document).ready(function()
	

{     
const tooltipTriggerList = document.querySelectorAll('[data-coreui-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new coreui.Tooltip(tooltipTriggerEl))


});
              </script>

