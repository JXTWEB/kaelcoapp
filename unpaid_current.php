
<?php
$tbal = 0;

$arledger=array();
$db = mysqli_connect("localhost", "kaelco_demo", "iSAJm3ZTxrR", "kaelco_demo");
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

$acc =  $_POST["acc"];

$resultmonth = mysqli_query($db,"SELECT * FROM 	fbilledg WHERE NEWACTS =$acc  ");
while ($rowmonth = mysqli_fetch_array($resultmonth))
{
	

$next_tocurr = $rowmonth['LB21'];

for($x =1;$x <= 22 ;$x++){


	$ln++;
	    if(!in_array($arledger , [$rowmonth['LD'.$x], $rowmonth['LT'.$x],$rowmonth['LY'.$x],$rowmonth['LA'.$x],$rowmonth['LR'.$x],$rowmonth['LK'.$x]], true)){
array_push($arledger , [$rowmonth['LD'.$x], $rowmonth['LT'.$x],$rowmonth['LY'.$x],$rowmonth['LA'.$x],$rowmonth['LR'.$x],$rowmonth['LK'.$x]]);
    }
//$bg = "background-color:white";
//if($rowmonth['LT'.$x] == "B"){

//$bg = "background-color:#4154f1; color:white";
//}

//echo"<tr >";
//echo"

//<td style='".$bg .";'>".$ln."</td>
//<td style='".$bg .";'>".$rowmonth['LT'.$x]."</td>
//<td style='".$bg .";'>".$rowmonth['LY'.$x]."</td>
//<td style='".$bg .";' >".number_format($rowmonth['LA'.$x]/100, 2,'.',',')."</td>
//<td style='".$bg .";'>".$rowmonth['LR'.$x]."</td>
//<td style='".$bg .";'>".number_format($rowmonth['LB'.$x]/100, 2,'.',',')."</td>

//</tr>
//";


$fbal = $rowmonth['LB'.$x];


}
}


rsort($arledger);

for ($row = 0; $row < $ln; $row++) {
	
	
	$bg = "background-color:white";
	
if($arledger[$row][1] == "B"){

$bg = "background-color:#4154f1; color:white";
}
if($next_tocurr <= 0){}else{




  echo '
  
  <ol class="list-group list-group-numbered">
 
';

if($arledger[$row][1] == "B"){

 
  

$balstat ="";
$status ="unpaid";
$balance =$arledger[$row][3];
   $tbal +=$arledger[$row][3] ; 
   $otherpayment = 0;
for ($rowp = 0; $rowp < $ln; $rowp++) {
 
	if($arledger[$rowp][1] == "P"){
	
		 if( $arledger[$rowp][2] ==  $arledger[$row][2]){
 

      	  $tbal -=  $arledger[$rowp][3] ;



$balance = is_numeric($arledger[$row][3]) - is_numeric($arledger[$rowp][3]);



if($balance <= 0){
	$status ="paid";
}else{
	$balstat ="- balance";
    	
}

  }else{

$otherpayment +=$arledger[$rowp][3]; 

  }
		
	}
	
}

if($status == "unpaid"){
$mont =$arledger[$row][2]."01";
//echo "<td>".$arledger[$row][0]."</td>";
//echo "<td>".$arledger[$row][2]."</td>";

//echo "<td>".number_format($balance/100, 2,'.',',')." ".$balstat."</td>";
echo'
 <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div >'.date("M-Y", strtotime($mont)).'</div>
<b>'.number_format($balance/100, 2,'.',',').''.$balstat.'</b>
    </div>
    <span class="badge = rounded-pill" style=" background-color:#157f91;">'.$arledger[$row][0].'</span>
  </li>

';


}





}

}



echo"</ol>";

}

//echo"<tr><td>".$fbal."</tr></td>";

$below = $fbal -$tbal;

if($fbal < 0){
        $below = "";
}
if($below < 0){
    $below = "";
}
if($next_tocurr <= 0){
        $below = "";
}
//echo"<tr><td>OTHER PAYMENT :". number_format($otherpayment/100, 2,'.',',')."</tr></td>";
echo"<tr><td> BELOW :". number_format($below/100, 2,'.',',')."</tr></td>";



?>
