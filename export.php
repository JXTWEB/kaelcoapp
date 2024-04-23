
<table>
<?php  
            include 'con.php';
   function clean($string) {
//$string = str_replace(',', ',', $string); // Replaces all spaces with hyphens.




   return preg_replace('/[^.,A-Za-z0-9\-.]/', ' ', $string); // Removes special chars.
  // '[^.,a-zA-Z0-9 \n\.]'
   
}
$info = mysqli_query($db,"SELECT MONTH  FROM   current_bill LIMIT 1  ");
 date_default_timezone_set('Asia/Manila');
$year =date("Y");
         while($row = mysqli_fetch_array($info))  
         {  
$month = $row['MONTH'];
         }
echo$month;

    $info = mysqli_query($db,"SELECT NEWACTS, CNAME, NEWMSN, CURRENTBIL, DUEDATE, TOTALAR, ABS(TOTALAR - CURRENTBIL) as arrears, BILLMONTH, BILLYEAR  FROM   fbilmast   WHERE TOTALAR !=0  AND BILLMONTH =$month AND BILLYEAR=$year ");

         while($row = mysqli_fetch_array($info))  
         {  
              $billmonth  = $row['BILLMONTH']."-".$row['BILLYEAR'];
             $billmonthreverse  = $row['BILLYEAR']."-".$row['BILLMONTH'];
            $arrears =$row["TOTALAR"] - $row["CURRENTBIL"];
            $name = clean($row["CNAME"]);
          
//echo$arrears;
$current =$row["CURRENTBIL"] ;
$duedate =$row["DUEDATE"] ;
$acc =$row["NEWACTS"] ;
$setbillmonth = date("M-Y", strtotime($billmonthreverse."-01" ));
$duedateset = date("d/m/Y", strtotime($duedate ));
if($current < 0 ){

////verify current bill
$resultmonth = mysqli_query($db,"SELECT * FROM 	fbilledg WHERE NEWACTS = $acc    ");
while ($rowmonth = mysqli_fetch_array($resultmonth))
{

    $current =0;
$ln++;
for($x =22;$x <= 22 ;$x++){

if($rowmonth['LT'.$x] == "B"){

$current = $rowmonth['LA'.$x];

}}}
////
    


}
  $amount =number_format($current/100, 2,'.',',');

if($arrears <=500 && $current != 0 && $current >= 500  ){
    $found=0;
$info12 = mysqli_query($db,"SELECT NEWACTS  FROM   ecpay WHERE NEWACTS =$acc  ");

         while($row12 = mysqli_fetch_array($info12))  
         {  
 $found=1;
         }

        if($found ==0){
$qry = "INSERT INTO `ecpay` ( `NEWACTS`, `NAME`, `AMOUNT`, `YR_MO`, `DUE_DATE`) VALUES ( '$acc', '$name', '$amount', '$setbillmonth', '$duedateset')";
$color = "red";
    if($db->query($qry) === TRUE){
  
    $color = "black";
}}
    
            echo '  
         <tr style="color:'.$color.';">  
             <td>'.$row["NEWACTS"].'</td>  
             <td>'. clean($row["CNAME"]).'</td>  
             <td>'.number_format($current/100, 2,'.',',').'</td>  
             <td>'.date("d/m/Y", strtotime($duedate )).'</td>  
             <td>'.date("M-Y", strtotime($billmonthreverse."-01" )).'</td>
         </tr>  
            ';  
}}
          
       
        ?>

        </table>