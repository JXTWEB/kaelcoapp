<?php



$db1 = mysqli_connect("localhost", "kaelco_buckup", "iSAJm3ZTxrR", "kaelco_buckup");
if (!$db1) {
  die("Connection failed: " . mysqli_connect_error());
}
$acc = '0101280066';
$tb= "fbilledg".$_POST["tb"];





   $countp=0;

$payment=array();
$bill=array();
$showtables = mysqli_query($db1,"SELECT table_name, engine FROM information_schema.tables WHERE table_type = 'BASE TABLE' AND table_schema='kaelco_buckup' ORDER BY table_name ASC  ");

while ($table=mysqli_fetch_array($showtables)) {
  
$ttb =($table[0]);

//echo$ttb."<br>";





$resultmonth1 = mysqli_query($db1,"SELECT * FROM $ttb WHERE NEWACTS =$acc  ");
while ($rowpayment = mysqli_fetch_array($resultmonth1))
{
	


for($x =1;$x <= 22 ;$x++){




if($rowpayment['LT'.$x] == "P"){
    $countp++;
 if(!in_array($payment , [$rowpayment['LY'.$x], $rowpayment['LA'.$x]], true)){
array_push($payment , [$rowpayment['LY'.$x], $rowpayment['LA'.$x]]);


 }

}



      if($rowpayment['LT'.$x] == "B"){
    $countb++;
 if(!in_array($bill , [$rowpayment['LY'.$x], $rowpayment['LA'.$x]], true)){
array_push($bill , [$rowpayment['LY'.$x], $rowpayment['LA'.$x]]);


 }

}

	
}


}
}






for ($row = 0; $row <    $countp; $row++) {



  for ($col = 0; $col < 2; $col++) {



    echo$payment[$row][$col];
  }
  echo "<br>";

}

for ($row = 0; $row <    $countb; $row++) {


for ($rowp = 0; $rowp <    $countp; $rowp++) {
if($bill[$row][0] == $payment[$rowp][0]){

}else{
 for ($col = 0; $col < 2; $col++) {



    echo$bill[$row][$col];
     
  echo "<br>";
  }

}


}



}






?>