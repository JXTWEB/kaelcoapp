 <?php

error_reporting(0);
$search_by = $_POST["search_by"];

$acc =  $_POST["acc"];

$checksoundar =0;
include 'con.php';



 date_default_timezone_set('Asia/Manila');
$datedisco =date("Y-m-d");

 $resdisco=0;
$discostr = mysqli_query($db,"SELECT * FROM 	monitoring WHERE NEWACTS = '$acc' AND  DATE = '$datedisco'   ");
while ($discorow = mysqli_fetch_array($discostr))
{
    $disconame =$discorow['agent_name'];
    $discoor =$discorow['OR_NO'];
    $resdisco=1;
}

if($resdisco == 1){
       echo"<script> alert('ada ti payment na ken ni agent nga ".$disconame." or no. na ket ".$discoor." '); </script>";
}

if($search_by == "name"){

$acc = strtoupper($acc);

    $load = 0;
    $info = mysqli_query($db,"SELECT NEWACTS, CNAME, CADDRESS, NEWMSN FROM  fbilmast  WHERE CNAME LIKE '$acc%' OR NEWMSN LIKE '$acc%'  LIMIT 22");
while ($inforow = mysqli_fetch_array($info))
{
      $load++;
      
$acc1 = $inforow['NEWACTS'];
$acc2 = $inforow['NEWACTS'];
$rname = $inforow['CNAME'];
$meter = $inforow['NEWMSN'];
$raddress = $inforow['CADDRESS'];
   
if(ctype_digit($acc2) && strlen($acc2) == 10) {
$acc2 = substr($acc2, 0, 2) .'-'.
            substr($acc2, 2, 4) .'-'.
            substr($acc2, 6);
}
if($load == 0){
    echo'

<ol class="list-group ">
  <li class="selectedname list-group-item d-flex justify-content-between align-items-start" name="selectedname" value="'.$acc1.'">
    <div class="ms-2 me-auto">
      <div class="fw-bold"><b>NO RESULT FOUND !</b></div>
   
    </div>
  </li>
</ol>
<script> $("#ld").hide();</script>
';
} 
echo'

<ol class="list-group ">
  <li class="selectedname list-group-item d-flex justify-content-between align-items-start" name="selectedname" value="'.$acc1.'">
    <div class="ms-2 me-auto">
      <div class="fw-bold"><b>'.$rname.' ('.$acc2.')</b></div>
     '.$raddress.'<br>
     Meter No.:'.$meter.'
    </div>
  </li>
</ol>
<script> $("#ld").hide();</script>
';
}






}else{

$acclength = mb_strlen($acc);

if($acclength == 10){


$resultmonth = mysqli_query($db,"SELECT * FROM 	fbilledg WHERE NEWACTS = $acc    ");
while ($rowmonth = mysqli_fetch_array($resultmonth))
{


$ln++;
for($x =22;$x <= 22 ;$x++){

$total_ar = $rowmonth['LB'.$x] ;
}

for($x =1;$x <= 22 ;$x++){
if($rowmonth['LT'.$x] == "P"){
    $below= $rowmonth['LB'.$x];
}
}

}
$sc=3000;
if($total_ar > 100000){
    $sc = $total_ar *0.03;
}


if($total_ar <= 0.99){
    $total_ar = 0;
    $total_w_sc = 0;
}
$total_w_sc = $total_ar+$sc;
if($below <= 0){
    $below =0;
}
$check =0;
$countsound =0;
$checksoundar =$total_ar;



    $info = mysqli_query($db,"SELECT CNAME, CADDRESS, NEWACTS, NEWMSN, BILLSTAT FROM  fbilmast  WHERE NEWACTS = $acc    ");
while ($inforow = mysqli_fetch_array($info))
{
    $check++;
$name = $inforow['CNAME'];
$ac_n = $inforow['NEWACTS'];
$m_n = $inforow['NEWMSN'];
$stat = $inforow['BILLSTAT'];
$address = $inforow['CADDRESS'];
}
$stat = "ÄCTIVE";
if($stat =="D"){
    $stat = "DISCONNECTED";
}
if($check == 0){
    echo' 
        <div class="alert alert-warning" role="alert" >
NO RESULT FOUND !
</div><script> $("#ld").hide();</script>
    ';
}else{
if(ctype_digit($ac_n) && strlen($ac_n) == 10) {
 $ac_n = substr($ac_n, 0, 2) .'-'.
            substr($ac_n, 2, 4) .'-'.
            substr($ac_n, 6);
}


echo'
 <div class="alert "  role="alert  " style="margin:0; background-color:#72998e;color:#e3fff5;text-shadow: -6px 1px 6px rgba(0,0,0,0.6);border-radius:0;">
 <div class="row">
                    <div class="col-lg-9  ">Name:&nbsp;  <b>'.$name.'</b></div>
                     <div class="col-lg-9 ">Account No.:&nbsp;  <b>'.$ac_n.'</b></div>
                        <div class="col-lg-9 ">Meter No.:&nbsp;  <b>'.$m_n.'</b></div>
                          <div class="col-lg-9 ">Status.:&nbsp;  <b>'.$stat.'</b></div>
                    <div class="col-lg-9 ">Address: &nbsp; <b>'.$address.'</b></div>
                     

 <div class="col-6 ">    
              
TOTAL AR:<b> '.number_format($total_ar/100, 2,'.',',').'</b>
</div>

 <div class="col-6 ">    
              
SC:<b> '.number_format($sc/100, 2,'.',',').'</b>
</div>
 <div class="col-12 mt-3 p-1"  >    
          <span class="p-2" style="background:background: rgb(33,33,45);background: linear-gradient(0deg, rgba(33,33,45,1) 4%, rgba(57,124,120,1) 51%, rgba(33,33,45,1) 100%);color:#acf4e0;border-radius:0;color:white; border:2px solid #86c5d1;border-radius:5px; ">    
 TOTAL AR W/ SC:<b> '.number_format($total_w_sc/100, 2,'.',',').'</b>
 </span>
</div>




</div>
</div>
 
                     


      
                                  
                  ';

                  
if($acclength == 10){
    $play.= "
   <script>
       $('<audio></audio>').attr({
    'src':'audio/59bd8e766e44bffb37f69609addb851e.mp3',
    'volume':0.2,
    loop: false,
   preload: true,
    'autoplay':'false'
}).appendTo('#audioarea');
   
   </script>
   
   ";


  $playpaid.= "
   <script>
       $('<audio></audio>').attr({
    'src':'audio/y.mp3',
    'volume':0.2,
    loop: false,
   preload: true,
    'autoplay':'false'
}).appendTo('#audioarea');
   
   </script>
   
   ";
if($checksoundar >= 0.99){

echo$play;
   
}else{
    echo $playpaid;
}

}

}


}


}


?>

<script>



  $(document).ready(function()
	

{


$('ol li[name="selectedname"]').off('click').click( function(event){
var _acc = $(this).attr("value");
   $("#res").empty();
 $.ajax({
     url: 'kaelco_search.php',
    type: 'POST',
    data: {acc:_acc},
 dataType: 'text',
 async : true,
    success: function(data){
    $("#res").html(data);
     console.log(data);
      
     }
 });


 $.ajax({
        url:'info.php',
        type: 'POST',
        async : true,
        data: {acc:_acc},
        dataType: 'text',
        success: function(data){
       $("#resname").html(data);
          console.log(data);
           
        }
      });



 $.ajax({
        url:'unpaid_current.php',
        type: 'POST',
        async : true,
        data: {acc:_acc},
        dataType: 'text',
        success: function(data){
       $("#unpaidarea").html(data);
          console.log(data);
           
        }
      });

      

});
});
</script>