            <?php


include 'con.php';
$verified =0;
   $info1 = mysqli_query($db,"SELECT  fbilmast.NEWACTS as facc , fbilmast.CURRENTBIL as bill, fbilmast.CNAME as name, fbilmast.DUEDATE as duedate, fbilmast.BILLSTAT, emails.NOTIFICATION , emails.NEWACTS as eacc FROM emails INNER JOIN fbilmast WHERE emails.NEWACTS =fbilmast.NEWACTS AND fbilmast.BILLSTAT ='A' AND emails.NOTIFICATION ='0' LIMIT 1 ");
while ($row = mysqli_fetch_array($info1))
{
$acc = $row['eacc'];
echo$row['duedate']."<br>";
$verified =1;


}
if($verified ==1){
 $qry  = "UPDATE `emails` SET `NOTIFICATION` = '1' WHERE `NEWACTS` = '$acc'";
  if($db->query($qry) === TRUE){
   //echo"sent";
  
}}

?>