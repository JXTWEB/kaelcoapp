
  <?php
include 'con.php';
$resultmonth = mysqli_query($db,"SELECT BOOKNO, NEWACTS, CNAME, NEWMSN, CADDRESS FROM  fbilmast WHERE BOOKNO ='0129'");

while ($rowmonth = mysqli_fetch_array($resultmonth))
{
$acc =$rowmonth['NEWACTS'];

$resultacr = mysqli_query($db,"SELECT NEWACTS, LB22, LB21, LA22 FROM 	fbilledg WHERE NEWACTS = $acc    ");
while ($acr = mysqli_fetch_array($resultacr))
{



$arrears = $acr['LB21'] ;

$current = $acr['LA22'] ;
$bal = $acr['LB22'] ;


}

if($bal >0){

echo'  <tr class=" " >
                          <td class=""   style="width:5%;">'.substr($rowmonth['NEWACTS'], 6).' </td>
                          <td class=""   style="width:60%;">'.$rowmonth['CNAME'].'/'.$rowmonth['CADDRESS'].'/<b>M-'.$rowmonth['NEWMSN'].'</b> </td>
                          <td class=""   style="width:35%;">
                       Current:<b> '.number_format($current/100, 2,'.',',').'</b>
                       <br>
                         Arrears:<b> '.number_format($arrears/100, 2,'.',',').'</b>
                          
                          </td>
                          
                          
                          
                          ';
}

}




  ?>

  <script>
   $("#ld").hide();
   </script>
