
 <?php

error_reporting(0);


 date_default_timezone_set('Asia/Manila');
$dateinset =date("M d, Y h:i:sa");
$ln=0;
include 'con.php';
$db1 = mysqli_connect("localhost", "kaelco_buckup", "iSAJm3ZTxrR", "kaelco_buckup");
if (!$db1) {
  die("Connection failed: " . mysqli_connect_error());
}
$acc =  $_POST["acc"];
$tb= "fbilledg".$_POST["tb"];







$resultmonth = mysqli_query($db1,"SELECT * FROM  $tb  WHERE NEWACTS = $acc    ");
while ($rowmonth = mysqli_fetch_array($resultmonth))
{


$ln++;
for($x =1;$x <= 22 ;$x++){
$bg = "background-color:white";
$dadate =$rowmonth['LD'.$x];
$nitfbil_lenght = strlen($rowmonth['LE'.$x]);
$initfbil_collectedby='';
  $initfbil_postedby='';


if($rowmonth['LT'.$x] == "B"){

$bg = "background-color:#53acbd; color:white";
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

if($rowmonth['LT'.$x]=="D"){
$bg = "background-color:#38cd95; color:white";
}
if($rowmonth['LT'.$x]=="C"){
$bg = "background-color:#b76be7; color:white";
}

$mont = $rowmonth['LY'.$x]."01";
 echo'<tr style="font-size:12px;" >
 

 
 ';

echo"


<td  style='".$bg .";'>".$rowmonth['LT'.$x]."</td>
<td  style='".$bg .";'>". date("M-Y", strtotime($mont))."</td>
<td  style='".$bg .";' >".number_format($rowmonth['LA'.$x]/100, 2,'.',',')."</td>
<td style='".$bg .";' '.$tooltip.' >".$rowmonth['LR'.$x]."</td>
<td  style='".$bg . "; text-align:right;'>".number_format($rowmonth['LB'.$x]/100, 2,'.',',')."</td>

<script> $('#ld').hide();</script>


</tr>
";






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

