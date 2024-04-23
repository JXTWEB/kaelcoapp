<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LEDGER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="" style="background:#0e0e0e8c;padding:100px;">
    <div class="card text-center p-4">
  <div class="card-header" style="background-color:white;">
 <div class="row">
    <div class="col nopadding text-start">
<img class="img"  style="box-shadow: inset 0.2em 0.2em 0.2em 0 rgba(255,255,255,0.5), inset -0.2em -0.2em 0.2em 0 rgba(0,0,0,0.5);" src="Kaelco Logo.jpg" alt="user@email.com" width="110" height="110">
    </div>
    <div class="col nopadding">
      <h5>Kalinga-Apayao Electric Cooperative, Inc. </h5>
      <h6> Tabuk, Kalinga Apayao </h6>
      <h5> Consumer Subsidiary Ledger </h5>
    </div>
<?php

include 'con.php';
 date_default_timezone_set('Asia/Manila');
$dateinset =date("M d, Y h:i:sa");
?>

    <?php
$key = $_GET["id"];
    $info = mysqli_query($db,"SELECT * FROM emails WHERE _KEY='$key'");
while ($inforow = mysqli_fetch_array($info))
{
    
      
$acc = $inforow['NEWACTS'];
}

   $info = mysqli_query($db,"SELECT * FROM  fbilmast  WHERE NEWACTS = $acc ");
while ($inforow = mysqli_fetch_array($info))
{
      $load++;
      
$acc = $inforow['NEWACTS'];
$name = $inforow['CNAME'];
$oldacc = $inforow['MSSIDESN'];
$newm = $inforow['NEWMSN'];
$address = $inforow['CADDRESS'];
$ctype = $inforow['CTYPE'];
$mtp = $inforow['MULTIPLIER'];
$status = $inforow['BILLSTAT'];
}
$ac_n =$acc;
if(ctype_digit($ac_n) && strlen($ac_n) == 10) {
 $ac_n = substr($ac_n, 0, 2) .'-'.
            substr($ac_n, 2, 4) .'-'.
            substr($ac_n, 6);
}
    ?>
   
    <div class="col nopadding text-end">
      <p>Date: <?php echo$dateinset; ?>
    
      </p>
    
    </div>
  </div>
  </div>



<div class="card-header" style="background-color:white;">


<div class="row">
  <div class="col-sm text-start">
  <h6>Account Number:<span style="font-size:1.5em;"> <?php echo$ac_n;?> </span> </h6>
   <h6> Old Acnt No: <span style="font-size:1.2em;"> <?php echo$oldacc;?> </span> </h6>
    <h6>New Meter S.N: <b><?php echo$newm; ?></b></h6>
     <h6>Consumer Type:<?php echo" ".$ctype; ?> </h6>
  
  </div>
  <div class="col-sm text-start">
    <h6>N A M E: <span style="font-size:1.5em;"> <?php echo$name;?> </span> </h6>
   <h6> Consumer Address <span style="font-size:1.2em;"> <?php echo$address;?> </h6>
    <h6>Multiplier: <?php echo$mtp; ?></h6>
     <h6>Status : <?php  echo$status; ?></h6>
  </div>

</div>


</div>

<div class="card-header" style="background-color:white;">


<div class="row">
  <div class="col-sm text-start">Current </div>
  <div class="col-sm text-start">
  <?php

$resultmonth = mysqli_query($db,"SELECT LA22, LT22 FROM 	fbilledg  WHERE NEWACTS = $acc  ");
while ($rowmonth = mysqli_fetch_array($resultmonth))
{


for($x =1;$x <= 22 ;$x++){
if($rowmonth['LT'.$x] == "B"){
   $total = $rowmonth['LA'.$x] ;
   //echo $total."<br>";
}

}}
 echo"<b>". number_format($total/100, 2,'.',',')."</b>";
  ?>
  
  </div>
  <div class="col-sm text-start">TOTAL A/R </div>
  <div class="col-sm text-start"> 
  <?php

$resultmonth = mysqli_query($db,"SELECT LB22 FROM 	fbilledg  WHERE NEWACTS =$acc   ");
while ($rowmonth = mysqli_fetch_array($resultmonth))
{
    echo"<b>". number_format($rowmonth['LB22']/100, 2,'.',',')."</b>";
}
  ?>
  
  </div>
</div>


<br>

<div class="row w-75">
  <div class="col-sm text-start"> Over 30 Days
</div>
  <div class="col-sm text-start">0.00
</div>
  <div class="col-sm text-start">Meter Deposit </div>
  <div class="col-sm text-start"> 0.00</div>
</div>

<div class="row w-75">
  <div class="col-sm text-start"> Over 60 Days
</div>
  <div class="col-sm text-start">0.00
</div>
  <div class="col-sm text-start">Retrobilling </div>
  <div class="col-sm text-start"> 0.00</div>
</div>

<div class="row w-75">
  <div class="col-sm text-start"> Over 90 Days
</div>
  <div class="col-sm text-start">0.00
</div>
  <div class="col-sm text-start">Penalties </div>
  <div class="col-sm text-start"> 0.00</div>
</div>


<div class="row w-75">
  <div class="col-sm text-start"> Over 120 Days
</div>
  <div class="col-sm text-start">0.00
</div>
  <div class="col-sm text-start">Restructured  </div>
  <div class="col-sm text-start"> 0.00</div>
</div>

  </div>


<table class="table table-borderless" style="margin-top:3px;">

<thead style="border-bottom:2px solid #0000002d; border-top:1px solid #0000002d;padding:3px;" >
    <tr >
      <th scope="col">BR</th>
      <th scope="col">Tp</th>
      <th scope="col"> Date</th>
      <th scope="col">Rec/Bil</th>
      <th scope="col"> Mtr Rdng</th>
      <th scope="col">KWH</th>
      <th scope="col">Code/Dem</th>
      <th scope="col">Debit</th>
      <th scope="col">Credit</th> 
     <th scope="col">Dis/Sur</th> 
     <th scope="col"> Balance</th> 
    
    </tr>

  </thead>
 <tr style="border-top:3px solid #0000002d; margin:3px;"> </tr>
  <tbody>

  <?php

$resultmonth = mysqli_query($db,"SELECT * FROM 	fbilledg  WHERE NEWACTS = $acc   ");
while ($rowmonth = mysqli_fetch_array($resultmonth))
{


$ln++;
for($x =1;$x <= 22 ;$x++){
    $mont = $rowmonth['LY'.$x]."01";
echo'<tr>';
    echo '<td> '.$x.'</td>';
    echo '<td> '.$rowmonth['LT'.$x].'</td>';
    echo '<td>'.$rowmonth['LD'.$x].' </td>';
    echo '<td> '.date("M-Y", strtotime($mont)).'</td>';
    echo '<td> '.$rowmonth['LR'.$x].'</td>';
    echo '<td>'.$rowmonth['LK'.$x].' </td>';
    echo '<td>'.$rowmonth['LE'.$x].' </td>';
    echo '<td>'.$rowmonth['LB'.$x].' </td>';
    echo '<td>'. number_format($rowmonth['LA'.$x]/100, 2,'.',',').'</td>';
    echo '<td> </td>';
    echo '<td>'. number_format($rowmonth['LB'.$x]/100, 2,'.',',').' </td>';
 
echo'</tr>';


}}

  ?>

</tbody>

</table>

  <div class="card-body">
Han Pay Nalpas !
  </div>
</div>
  
  </body>
</html>