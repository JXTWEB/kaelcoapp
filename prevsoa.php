<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>  
    
     <style>
body{
position:relative;
   width: 210mm;
   //   font-family: source-code-pro, Menlo, Monaco, Consolas, "Times New Roman",
    //monospace;
    font-family: Consolas,monaco,monospace; 
}

.card {
    margin-bottom:10px;
    position:relative;
   

}
.td{
     font-size:13px;

}
h6{
    padding:0; 
    margin:0;
}
h6{
       font-size:13px;
}
h5{
       font-size:15px;
}
#pdate2{display:none;}
@media only screen and (max-width: 600px) {
  body {

padding:5px;
h5{
    font-size:14px;
}
.td{
     font-size:13px;
}
h6{
     font-size:13px;
}
p{
      font-size:10px;
}
#bt{
        font-size:11px;
}
img{
    width:70px;
    height:70px;
}
  }

  
}
@media only screen and (max-width: 438px) {
     body {
.card{
    width:auto;
    height:auto;

}
h5{
    font-size:14px;
}
h6{
     font-size:13px;
}
.td{
     font-size:13px;
}
p{
      font-size:10px;
}
img{
    width:70px;
    height:70px;
}
}
}

@media print {
    .button-62{
        display:none;
    }
   .card{
       line-height:1em;
padding-bottom:0;
//margin-bottom:5mm;
margin:5%;
margin-bottom:0;
margin-top:0;
   height: 309mm;
  width: 210mm;
     background-color:yellow;
      //  816px x 1344px
   page-break-before: always;
      border:0;
    }
 body{
     margin:0;
 }
    h5, h6{
 
   
}
//*{ overflow: visible !important; } 
  //.card { page-break-after:always; }
//}
#bt{
   
}
.img-fluid{
    left:0;
    top:95;
    position:absolute;
}


@page {
  margin: 2cm;
}
@page :first {
  margin-top: 6cm;
}
  body, page[size="A4"] {
    margin: 0;
    box-shadow: 0;
  }
 footer {page-break-after: always;}

  html, body {
    height: initial !important;
    overflow: initial !important;
    -webkit-print-color-adjust: exact;
  }
}

@page {
  size: auto;
  margin: 20mm;
}
   </style>
   
<?php

include 'con.php';
 date_default_timezone_set('Asia/Manila');
$dateinset =date("M d, Y h:i:sa");
?>

   
   
  </head>
  <body class="" style="background:#0e0e0e8c;padding:5px;">





  <!--  <div class="card-header" style="background-color:white;" style="padding:0; margin:0;">
 <div class="row" style="padding:0; margin:0;">
    <div class="col-3 nopadding text-start" style="padding:0; margin:0;">
<img class="img"  style="box-shadow: inset 0.2em 0.2em 0.2em 0 rgba(255,255,255,0.5), inset -0.2em -0.2em 0.2em 0 rgba(0,0,0,0.5); padding:0; margin:0" src="Kaelco Logo.jpg" alt="user@email.com" width="70" height="70" >
    </div>
    <div class="col-6 nopadding" style="padding:0; margin:0;">
      <h5 style="padding:0; margin:0;">Kalinga-Apayao Electric Cooperative, Inc. </h5>
      <h6 style="padding:0; margin:0;"> Tabuk, Kalinga Apayao </h6>
      <h5 style="padding-top:10px; margin:0;"><b> STATEMENT OF ACCOUNT</b></h5>
    <h5 style="padding:0; margin:0;"><b> Billing Month <u><?php echo date("M-Y ", strtotime($billmonth."/0/".$billyear)); ?> </u></b></h5>
       
    </div>
    

    <div class="col-3 nopadding text-end">
    <br>
    <br>
    
      <p>Date: <?php echo$dateinset; ?>
    
      </p>
    
    </div>








  </div>
  </div>
--->
<style>


.button-62 {
  background: linear-gradient(to bottom right, #e7c02f, #FF9A5A);
  border: 0;
  border-radius: 12px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 500;
  line-height: 2.5;
  outline: transparent;
  padding: 0 1rem;
  text-align: center;
  text-decoration: none;
  transition: box-shadow .2s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
}

.button-62:not([disabled]):focus {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}

.button-62:not([disabled]):hover {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}
</style>
<?php

$key = $_GET["id"];
?>
  <a id="badge" href="http://kaelco.000.pe/Upgrade/dist/prevpdf.php?id=<?php echo$key ?>"  target="_blank" class="button-62 m-2"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
</svg>
Print SOA</a>
<?php




$ptype = $key;

    $info_ = mysqli_query($db,"SELECT PTYPE,DESCRIP FROM fbilpref WHERE PTYPE='$ptype' LIMIT 1 ");
while ($inforow_ = mysqli_fetch_array($info_))
{
$ptype1 = $inforow_['DESCRIP'];
}
if($ptype){
?>
<div class="card text-center p-4 pt-2 align-self-center " style="border:0; ">
  <div class="card-header" style="background-color:white;" style="padding:0; margin:0;">
 <div class="row" style="padding:0; margin:0;">
    <div class="col-3 nopadding text-start" style="padding:0; margin:0;">
<img class="img"  style="box-shadow: inset 0.2em 0.2em 0.2em 0 rgba(255,255,255,0.5), inset -0.2em -0.2em 0.2em 0 rgba(0,0,0,0.5); padding:0; margin:0" src="KaelcoLogo.jpg" alt="user@email.com" width="70" height="70" >
    </div>
    <div class="col-6 nopadding" style="padding:0; margin:0;">
      <h5 style="padding:0; margin:0;">Kalinga-Apayao Electric Cooperative, Inc. </h5>
      <h6 style="padding:0; margin:0;"> Tabuk, Kalinga Apayao </h6>
      <h5 style="padding-top:5px; margin:0;"><b> SUMMARY <br> OF STATEMENT OF ACCOUNT</b></h5>
    <h5 style="padding:0; margin:0;"><b>[<?php echo$ptype;  ?>] <?php echo$ptype1;  ?></b></h5>
       
    </div>
</div>
</div>
<table class="table table-striped" style="margin:0;padding:0;  font-size:14px;  font-family: sans-serif;">
  <thead style="border-bottom:1px solid #0000002d;font-size:12px;" >
    <tr >
      <th scope="col" style="padding:0; margin:0;">Ctr</th>
      <th scope="col" style="padding:0; margin:0;">Account#</th>
      <th scope="col" style="padding:0; margin:0;">Consumer Name</th>
       <th scope="col" style="padding:0; margin:0;">Month Covered</th>
      <th scope="col" style="padding:0; margin:0;">KW USED</th>
            <th scope="col" style="padding:0; margin:0;">AMOUNT Before Due Date</th>
             <th scope="col" style="padding:0; margin:0;">Surcharge</th>
              <th scope="col" style="padding:0; margin:0;">AMOUNT after due date</th>
    </tr>
  </thead>
  <tbody>
<?php


    $info_ = mysqli_query($db,"SELECT PTYPE FROM emails WHERE PTYPE='$ptype' LIMIT 1 ");
while ($inforow_ = mysqli_fetch_array($info_))
{
 $ptype  = $inforow_['PTYPE'];
}
$count=0;
$count1=0;

$info = mysqli_query($db,"SELECT * FROM  fbilmast  WHERE PTYPE = '$ptype' AND BILLSTAT ='A' GROUP BY NEWACTS ORDER BY NEWACTS  ");
while ($inforow = mysqli_fetch_array($info))
{
    $count++;
    $count1++;
$acc = $inforow['NEWACTS'];
$name = $inforow['CNAME'];

$currentbill = $inforow['CURRENTBIL'];
 $billmonth = $inforow['BILLMONTH'];
       $billyear = $inforow['BILLYEAR'];
       $deamndreading = $inforow['PRSDEMRDNG']/10000;
$kwu = $mtp*$deamndreading;

$totalkwu +=$kwu ; 

$mtp = $inforow['MULTIPLIER'];
 $ac_n =$acc;
 $sc =$currentbill*0.03;
 
                $scar =($currentbill*0.03)+$currentbill;

                
if(ctype_digit($ac_n) && strlen($ac_n) == 10) {
 $ac_n = substr($ac_n, 0, 2) .'-'.
            substr($ac_n, 2, 4) .'-'.
            substr($ac_n, 6);
}
if($currentbill<= 0){
    $currentbill=0;
     $sc=0;
     $totalsc=0;
     $scar=0;
}
$totalscar +=  $scar;
$totalsc +=$sc;
$totalcbill += $currentbill;


echo'
   <tr class="nopadding" style="padding:3px; margin:0;">
      <td class="td text-start" style="margin:0:">'. $count1.'</td> 
       <td class="td text-start text-nowrap" style="margin:0;padding:3px;">'. $ac_n.'</td> 
        <td class="td text-start" style="margin:0:">'.$name.'</td> 
         <td class="td text-start" style="padding:3px;margin:0:">'. date("M-Y ", strtotime($billyear."-".$billmonth."-1")).'</td> 
          <td class="td text-end" style="padding:3px;margin:0:">'.$kwu.'</td> 
           <td class="td text-end" style="padding:3px;margin:0:">'. number_format($currentbill/100, 2,'.',',').'</td> 
            <td class="td text-end" style="padding:3px;margin:0:">'.number_format( $sc/100, 2,'.',',').'</td> 
             <td class="td text-end" style="padding:3px;margin:0:">'. number_format($scar/100, 2,'.',',').'</td> 

      
      
      
      
      </tr>';


if($count >=25){

    $count=0;


    echo'</tbody>
</table>

</div>';

echo'

<div class="card text-center p-4 pt-2 align-self-center " style="border:0; ">
  <div class="card-header" style="background-color:white;" style="padding:0; margin:0;">
 <div class="row" style="padding:0; margin:0;">
    <div class="col-3 nopadding text-start" style="padding:0; margin:0;">
<img class="img"  style="box-shadow: inset 0.2em 0.2em 0.2em 0 rgba(255,255,255,0.5), inset -0.2em -0.2em 0.2em 0 rgba(0,0,0,0.5); padding:0; margin:0" src="KaelcoLogo.jpg" alt="user@email.com" width="70" height="70" >
    </div>
    <div class="col-6 nopadding" style="padding:0; margin:0;">
      <h5 style="padding:0; margin:0;">Kalinga-Apayao Electric Cooperative, Inc. </h5>
      <h6 style="padding:0; margin:0;"> Tabuk, Kalinga Apayao </h6>
      <h5 style="padding-top:5px; margin:0;"><b> STATEMENT OF ACCOUNT</b></h5>
    <h5 style="padding:0; margin:0;"><b>['.$ptype.'] '.$ptype1.'</b></h5>
       
    </div>
</div>
</div>
<table class="table table-striped" style="margin:0;padding:0;  font-size:14px;  font-family: sans-serif;">
  <thead style="border-bottom:1px solid #0000002d;font-size:12px;" >
    <tr >
      <th scope="col" style="padding:0; margin:0;">Ctr</th>
      <th scope="col" style="padding:0; margin:0;">Account#</th>
      <th scope="col" style="padding:0; margin:0;">Consumer Name</th>
       <th scope="col" style="padding:0; margin:0;">Month Covered</th>
      <th scope="col" style="padding:0; margin:0;">KW USED</th>
            <th scope="col" style="padding:0; margin:0;">AMOUNT Before Due Date</th>
             <th scope="col" style="padding:0; margin:0;">Surcharge</th>
              <th scope="col" style="padding:0; margin:0;">AMOUNT after due date</th>
    </tr>
  </thead>
  <tbody>
';

}





}

    echo'
   <tr class="nopadding" style="padding:3px; margin:0;">
      <td class="td text-start" style="margin:0:"></td> 
       <td class="td text-start " style="margin:0;padding:3px;"></td> 
        <td class="td text-start  text-nowrap" style="margin:0:">  <b>TOTAL AMOUNT </b></td> 
         <td class="td text-start" style="padding:3px;margin:0:"> </td> 
          <td class="td text-start" style="padding:3px;margin:0:"> <b>'.$totalkwu.'</td> 
           <td class="td text-start" style="padding:3px;margin:0:"> <b>'. number_format($totalcbill/100, 2,'.',',').'</td> 
            <td class="td text-start" style="padding:3px;margin:0:"> <b>'.number_format($totalsc/100, 2,'.',',').'</td> 
             <td class="td text-start" style="padding:3px;margin:0:"> <b>'. number_format( $totalscar/100, 2,'.',',').'</td> 

      
      
      
      
      </tr>';




?>
</tbody>
</table>
</div>


<?php

}
?>


  <!--- <input type="button" id="create_pdf" value="Generate PDF"> ---->  
  </body>
  



<script>
$(document).ready(function () {  
    var form = $('.card'),  
    cache_width = form.width(),  
    a4 = [595.28, 841.89]; // for a4 size paper width and height  

    $('#create_pdf').on('click', function () {  
        $('body').scrollTop(0);  
        createPDF();  
    });  
    
    function createPDF() {  
        getCanvas().then(function (canvas) {  
            var  
             img = canvas.toDataURL("image/png"),  
             doc = new jsPDF({  
                 unit: 'px',  
                 format: 'a4'  
             });  
            doc.addImage(img, 'JPEG', 20, 20);  
            doc.save('techsolutionstuff.pdf');  
            form.width(cache_width);  
        });  
    }  
      
    function getCanvas() {  
        form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');  
        return html2canvas(form, {  
            imageTimeout: 2000,  
            removeContainer: true  
        });  
    }
    
});







</script>

</html>