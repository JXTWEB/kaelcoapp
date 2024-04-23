
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
//$acc =  $_POST["acc"];
$acc = "0101280061";
$tb= "fbilledg".$_POST["tb"];



$payment=array();

   $countp=0;



$bill=array();
$showtables = mysqli_query($db1,"SELECT table_name, engine FROM information_schema.tables WHERE table_type = 'BASE TABLE' AND table_schema='kaelco_buckup' ORDER BY table_name ASC  ");

while ($table=mysqli_fetch_array($showtables)) {
  
$ttb =($table[0]);

//$ttb."<br>";

$payment=array();


$resultmonth1 = mysqli_query($db1,"SELECT * FROM $ttb WHERE NEWACTS =$acc  ");
while ($rowpayment = mysqli_fetch_array($resultmonth1))
{
	


for($x =1;$x <= 22 ;$x++){





    $countp++;

array_push($payment , [$rowpayment['LY'.$x]]);
 $duplicate=0;

for ($row = 0; $row < 22; $row++) {
 

 if($payment[$row][0] == $rowpayment['LY'.$x]){
     $duplicate = 1 ;
 }




}

if($duplicate ==1){

}else{
     echo $rowpayment['LY'.$x]."<br>";
}
	
}


}


}




sort($payment);


//for ($row = 0; $row < $countp; $row++) {
 
//echo$payment[$row][0]."<br>";



//}









              ?>

