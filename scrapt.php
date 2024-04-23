<?php
include 'header.php';
$rt =  $_GET['route'];
$lastid =  $_GET['id'];
$previd =  $_GET['prev'];
if(!$lastid){
    $lastid = 0;
}

?>



<div class="card" style="border-radius:0;">
  <div class="card-header" data-coreui-toggle="collapse" data-coreui-target="#actarea" aria-expanded="false" aria-controls="flush-collapseOne" >
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
  <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
</svg> <span style="position:absolute;left:45;color:#157f91;"><b>COLLECTION SUMMARY</b></span> 

<select class="form-select mt-2" aria-label="Default select example">
  <option selected>Select Route</option>




  <?php 

    $info = mysqli_query($db,"SELECT BOOKNO, NEWACTS FROM  fbilmast  GROUP BY BOOKNO ");
while ($inforow = mysqli_fetch_array($info))
{
      $load++;

$route = $inforow['BOOKNO'];


  ?>


  <option class="route" value="<?php echo substr($inforow['NEWACTS'], 2, 4);?>"><?php echo substr($inforow['NEWACTS'], 2, 4);?></option>



  <?php

}


  ?>
</select>
  </div>
  <div class="card-body p-1 "    data-coreui-parent="#accordionFlushExample">

  <table class="table  mb-0" style="font-size:13px;">
                    <thead>
                   
                  <tr>
			
                   <th> <b><button type="button" style="background:#f49bbd;" class="btn btn-warning  btn-sm p-2"></button> Disco </b></th>
                    <th ><b><button type="button" style="background:#9bf4c7;" class="btn btn-warning  btn-sm p-2"></button> Fully Paid</b></th>
                     <th ><b><button type="button" style="background:#fde8b9;" class="btn btn-warning  btn-sm p-2"></button>  UnPaid</b></th>
                    <th ><b><button type="button" style="background:#de81f4;" class="btn btn-warning  btn-sm p-2"></button>  Pull Out</b></th>
             
                  </tr></b>
                </thead>
</table>


   <span class="badge   m-2 p-1 text-wrap " style="color:black; background-color:#b4d2d8; text-align:left;display: block;" > 
<center> ROUTE: <?php 

echo$rt;
?>
</center>
   </span>
<button type="button" id="prev" style="background:#53acbd;" class="btn btn-info text-light btn-sm m-1"><b><< prev  </b> </button>
<button type="button" id="next" style="background:#53acbd; float:right;" class="btn btn-info text-light btn-sm m-1"><b> next >></b> </button>

                      
  <?php
  if(!$rt){}else{

include 'con.php';
$count =0;
$resultmonth = mysqli_query($db,"SELECT BOOKNO, NEWACTS, CNAME, NEWMSN, CADDRESS, SEQUENCE, BILLSTAT FROM  fbilmast WHERE BOOKNO =$rt AND NEWACTS >= $lastid ORDER BY NEWACTS ASC LIMIT 5 ");

while ($rowmonth = mysqli_fetch_array($resultmonth))
{
    $count++;
    if($count == 1){
         $prevcurrentid =$rowmonth['NEWACTS'];
    }
    $lastid =$rowmonth['NEWACTS'];
$acc =$rowmonth['NEWACTS'];

$acc =$rowmonth['NEWACTS'];
$acc2 =$rowmonth['NEWACTS'];
if(ctype_digit($acc2) && strlen($acc2) == 10) {
$acc2 = substr($acc2, 0, 2) .'-'.
            substr($acc2, 2, 4) .'-'.
            substr($acc2, 6);
}
 $bg1="#fde8b9";
if($rowmonth['BILLSTAT']=="D"){
    $bg1="#f49bbd";
}

$payment=array();

$countp=0;


$getpayment = mysqli_query($db,"SELECT * FROM 	fbilledg  WHERE NEWACTS = $acc    ");
while ($rowpayment= mysqli_fetch_array($getpayment))
{



for($x =1;$x <= 22 ;$x++){


$countp++;
if($rowpayment['LT'.$x] == "P"){

 if(!in_array($payment , [$rowpayment['LY'.$x]], true)){
array_push($payment , [$rowpayment['LY'.$x]]);
 }

}
}
$lb = $rowpayment['LB22'];
}
if($lb <= 0){
      $bg1="#9bf4c7";
}

echo'  
               
                          <div class="card" style="border-radius:0;">
  <div class="card-header" data-coreui-toggle="collapse" data-coreui-target="#ledgarea1'.substr($rowmonth['NEWACTS'], 6).'" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color:'.$bg1.';" >
      
                          <td class=""   style="width:50%;"><span class="p-1 " style="background-color:white;color:black; border-radius:5px;float:right;"><b>'.$acc2.'</b></span><br><b>'.$rowmonth['CNAME'].'</b><br>'.$rowmonth['CADDRESS'].'<br><b>M-'.$rowmonth['NEWMSN'].'</b> </td>
                     

  </div>';

if($lb > 0){
  echo'
  <div class="card-body  accordion-collapse collapse " style="padding:0"  id="ledgarea1'.substr($rowmonth['NEWACTS'], 6).'"   data-coreui-parent="#accordionFlushExample">
';

echo'
<table class="table table-striped" >


     <thead>
                  <tr>
			
                    <th style="width:2.33%">Tp</th>
                    <th width:10%;" >Yr-Mo</th>
                    <th >Amount</th>
                    <th>Or</th>
                    <th >Balance</th>
                  </tr>
                </thead>
        
        
	
			         <tbody >
';


////getonlypayment












$ln=0;
$resultmonth1 = mysqli_query($db,"SELECT * FROM 	fbilledg  WHERE NEWACTS = $acc    ");
while ($rowmonth1 = mysqli_fetch_array($resultmonth1))
{


$ln++;
for($x =1;$x <= 22 ;$x++){
$bg = "background-color:white";



if($rowmonth1['LT'.$x] == "B"){
$bg = "background-color:#f0a20f; color:white";


for ($row = 0; $row < $countp; $row++) {

if($rowmonth1['LY'.$x] == $payment[$row][0]){
$bg = "background-color:#53acbd; color:white";

}

}


}





$type =$rowmonth1['LT'.$x];
$or = $rowmonth1['LR'.$x] ;
if($rowmonth1['LT'.$x]=="D"){
$bg = "background-color:#38cd95; color:white";
}
if($rowmonth1['LT'.$x]=="C"){
$bg = "background-color:#b76be7; color:white";
}

if($rowmonth1['LT'.$x]==""){
$bg = "color:#f04b0f";
$type ="!";
$or = $rowmonth1['LR'.$x]." (No P-type)" ;
}
$mont = $rowmonth1['LY'.$x]."01";
 echo'<tr style="font-size:12px;" >
 

 
 ';

echo"


<td  style='".$bg .";'>".$type."</td>
<td  style='".$bg .";'>". date("M-Y", strtotime($mont))."</td>
<td  style='".$bg .";' >".number_format($rowmonth1['LA'.$x]/100, 2,'.',',')."</td>
<td style='".$bg .";' >".$or."</td>
<td  style='".$bg . "; text-align:right;'>".number_format($rowmonth1['LB'.$x]/100, 2,'.',',')."</td>



</tr>
";






}
$bal = number_format($rowmonth1['LB22']/100, 2,'.',',');
$sc =3000;
if($bal  >= 100000){
$sc = $rowmonth1['LB22'] * 0.03;
}
$balset ='TOTAL AR: ';
if($bal <= 0){
    $sc = 0;
}

if($bal < 0){
 $balset ='ADVANCE PAYMENT: ';
}

}

	


echo '<p class="p-2 mt-2"  style="background-color:#856404;color:white; border:2px solid #86c5d1;border-radius:5px; "> '.$balset.' <b>'.$bal.'</b><br>

SURCHARGE: <b>'.number_format($sc/100, 2,'.',',').'</b>



</p>
		  
                </tbody>

</table>
  </div>
  </div>
                          
                          
                          ';


}}
  }

//echo$lastid;
  ?>
 
  <input id="previd" type="hidden" value="<?php echo $previd; ?>">
<input id="previdc" type="hidden" value="<?php echo$prevcurrentid; ?>">
<input id="nextid" type="hidden" value="<?php echo$lastid; ?>">
<input id="rt" type="hidden" value="<?php echo$rt ?>">
  <script>
   $("#ld").hide();
   </script>



</div></div>













</div>



      
      <footer class="footer"><span id="audioarea"></span>
        <div><a href="http://randeljeffdelprado95.epizy.com/">Full Stack WEB</a><a href="http://randeljeffdelprado95.epizy.com/">DEV</a> © 120995.</div>
        <div class="ms-auto"><a href="https://web.facebook.com/jeff000.me">RANDEL JEFF D. DEL PRADO</a></div>
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="vendors/chart.js/js/chart.min.js"></script>
    <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/main.js"></script>
    <script>


  $(document).ready(function()
	

{

$('select').on('change', function (e) {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
    
 $("#ld").show();

window.location.href = 'collsummary.php?route='+valueSelected;




});


$("#next").off('click').click( function(){



window.location.href = 'collsummary.php?route='+$("#rt").val()+'&id='+$("#nextid").val()+'&prv=e'+$("#previdc").val();
});

$("#prev").off('click').click( function(){


window.location.href = 'collsummary.php?route='+$("#rt").val()+'&id='+$("#previd").val()+'&prv=e'+$("#previdc").val();
});



});
    </script>

  </body>
</html>


