<?php



$db1 = mysqli_connect("localhost", "kaelco_buckup", "iSAJm3ZTxrR", "kaelco_buckup");
if (!$db1) {
  die("Connection failed: " . mysqli_connect_error());
}
$acc =  $_POST["acc"];
$tb= "fbilledg".$_POST["tb"];


echo $acc;
echo$tb;


   $countp=0;

$payment=array();

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
 if(!in_array($payment , [$rowpayment['LY'.$x]], true)){
array_push($payment , [$rowpayment['LY'.$x]]);


 }

}



      

	
}


}
}






?>