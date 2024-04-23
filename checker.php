<?php


            include 'con.php';
    $info = mysqli_query($db,"SELECT NEWACTS  FROM   ecpay   ");
$paid =0;
$unpaid =0;

         while($row = mysqli_fetch_array($info))  
         {  
              $acc  = $row['NEWACTS'];
             

$resultmonth = mysqli_query($db,"SELECT * FROM 	fbilledg WHERE NEWACTS = $acc    ");
while ($rowmonth = mysqli_fetch_array($resultmonth))
{

    $current =0;
$ln++;
for($x =22;$x <= 22 ;$x++){

if($rowmonth['LT'.$x] == "P"){

if($rowmonth['LY'.$x] =="202402"){
$paid++;
}else{
$unpaid++;
}



}}}


         }

         echo"Paid: ".$paid;
echo"UNPAID: ".$unpaid;





?>