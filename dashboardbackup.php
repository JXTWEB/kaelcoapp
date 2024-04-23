<?php
include 'header.php';
//echo"<script> alert('new feature (->change profile<-)  ada isuna ayan  3 bar icon left side naka hide suna nu han nga naka update jy google chrome you ! paki update yu lattan ijy playstore thanks !')</script>";

?>


   <p class="nav-title p-2  text-center "style="font-size:12px;background-color:#ebedef;margin:0;" >COLLECTION CHART</p>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<canvas id="myChart" style="width:100%;max-width:100%; background-color:white; fonts-size:8px;"></canvas>

<script>


const d = new Date();
let year = d.getFullYear();
const xValues = ["","Jan "+year, "Feb "+year, "Mar "+year, "Apr "+year, "May "+year, "Jun "+year, "Jul "+year,"Aug "+year, "Sep "+year, "Oct "+year, "Nov "+year, "Dec "+year];
const yValues = [<?php 

include 'con.php';

    $month=     date("m");
    $year =  date("Y");

   for ($x=0; $x<= 12; $x++){
$totalcollstr = mysqli_query($db,"SELECT SUM(COLLAMT) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$x' AND YEAR(COLLDATE) = '$year' ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$gtcoll = $tcoll['totalcoll'];
iF(!$gtcoll){
    $gtcoll=0;
}


}

echo $gtcoll.", ";
   }

?>];
const barColors = ['#ff0000', '#7FFFD4', '#FF7F50', '#7FFF00', '#483D8B', '#FF1493', '#7B68EE', '#B0E0E6', '#F5DEB3', '#40E0D0', '#87CEEB', '#FF0000'];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Collection For The Month of Jan To Dec "+year+" Tap Colored Bar To Display Total Coll."
    }, tooltips: {
         callbacks: {
            label: function(t, d) {
                var totalcol = t.yLabel.toString();
var formattedNumber = (totalcol / 100).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
           var totalcol2 = t.xLabel.toString();
var formattedNumber2 = (totalcol2 / 100).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");

               var xLabel = formattedNumber2;
               var yLabel =  formattedNumber;
               return  yLabel;
            }
         }},    scales: {
         yAxes: [{
            ticks: {


               callback: function(value, index, yValues) {
                                var totalcol1 = value;
var formattedNumber1 = (totalcol1 / 100).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              
                     return formattedNumber1;
                
               }
            }
         }]
      }
  }, 
});

</script>




   <p class="nav-title p-2  text-center "style="font-size:12px;background-color:white;margin:0;" >LEDGER</p>
<div class="alert alert-warning m-1 mt-1" role="alert" >
CURRENT COLLECTION UPDATE:<b> 02/01/2024 11:51 AM  </b>
<br>
COLLECTION UPDATE SCHED: 12:00 - 1:00 PM  and 6:40 - 7:00 PM <br>
<a class="nav-link" href='http://kaelco.000.pe/Upgrade/dist/kaelco.php'  style="float:right;color:#bc4c00;"> Go To Ledger <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg></b> </a>
</div> 

   <p class="nav-title   text-center p-2" style="font-size:12px;background-color:white;margin:0;">TOP HIGHTEST COLLECTION</p>
  <button class="btn btn-warning " style="color:wite;font-size:12px;" data-coreui-toggle="collapse" data-coreui-target="#ledgarea1" aria-expanded="false" aria-controls="flush-collapseOne" >

Click Here !

  </button>


 <div class="card-body p-1 accordion-collapse collapse "   id="ledgarea1"   data-coreui-parent="#accordionFlushExample">

<div class="table-responsive overflow-auto" style="height:300px;">
                    <table class="table border mb-0">
                      <thead class="table-light fw-semibold">



<?php


 

  $list=0;
    $month=     date("m");
    $year =  date("Y");
   
$totalcollstr = mysqli_query($db,"SELECT SUM(COLLAMT) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$month' AND YEAR(COLLDATE) = '$year' ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$gtcoll = $tcoll['totalcoll'];
}

$date_string = date("F-Y");
    $fulldate =     date("Y-m-d");
  $date_current =  date("Y-m");

$resultcoll = mysqli_query($db,"SELECT TELLCODE, COLLDATE, SUM(COLLAMT) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$month' AND YEAR(COLLDATE) = '$year'  GROUP BY TELLCODE ORDER BY SUM(COLLAMT) DESC LIMIT 15");
while ($coll = mysqli_fetch_array($resultcoll))
{
    $list++;
$tellini = $coll['TELLCODE'];
    $date1 = $coll['COLLDATE'];
    $totalcol = $coll['totalcoll'];
    $date1= date('Y-m', strtotime($date1));

$percentage =$totalcol;
$totalWidth =$gtcoll;
                                preg_match('/(.*\.[0-9]{2})/', $percentage, $matches);
 preg_match('/(.*\.[0-9]{2})/',$totalWidth, $matches);
echo $matches[1];  

$new_width = (int)($percentage *100)/$totalWidth ; 
//$new_width= floor( $percentage / 100.0) *$totalWidth ;

$result = mysqli_query($db,"SELECT * FROM ftellers WHERE TELINI = '$tellini'  ");
while ($tel = mysqli_fetch_array($result))
{

$name = $tel['TELLNAME'];
}

            $pp2 = "profile/20211221-Ivana-Alawi.jpg";
            $result = mysqli_query($db,"SELECT * FROM profile WHERE ini = '$tellini' ");
while ($pp_row = mysqli_fetch_array($result))
{

$pp2 = $pp_row['url'];
}
?>
 

                  
                      <tbody>
                        <tr class="align-middle">
                        
                          <td class="text-center" width="5%;"> 
                          
                                           <span style="float:right"><b> <?php echo$list; ?> </b> <img class="img" src="Kaelco Logo.jpg" style="border-radius:50%; margin-top:-3px; margin-left:-3px;"  height="20" width="20" alt="user@email.com">
                            <div class="avatar avatar-md"><img class="img" src="<?php echo$pp2; ?>" style="border-radius:50%;"  height="40" width="40" alt="user@email.com"></div>
 
                          </td>
                          <td width="40%">
                            <div style="font-size:12px;"><?php echo $name;  $totalcol;?></div>
                            <div class="small text-medium-emphasis"><span>Collection</span> | For The Month OF <?php echo$date_string ?> </div>
                          </td>
                          <td class="text-center">
                        
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-start">
                                <div class="fw-semibold"><?php

                                
                                 echo convertExponentialToDecimal($new_width); ?>%</div>
                              </div>
                              <div class="float-end"><small class="text-medium-emphasis"><?php //echo$fulldate; ?></small></div>
                            </div>
                            <div class="progress progress-thin">
                              <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo convertExponentialToDecimal($new_width); ?>%" aria-valuenow="<?php echo convertExponentialToDecimal($new_width); ?>" aria-valuemin="0" aria-valuemax="<?php echo floor($totalWidth); ?>"></div>
                            </div>
                            
                              <div class="small text-medium-emphasis mt-2">Total Collection</div>
                             <span class="badge   ms-auto" style="font-size:14px;color:black;background-color:white;" >  <?php  echo number_format($totalcol/100, 2,'.',','); ?></span>
                          </td>
                       
                      
                        </tr>
                        
   <?php } ?>

                    
                      </tbody>
                    </table>

                    
                  </div></div>

 <p class="nav-title   text-center p-2" style="font-size:12px;background-color:white;margin:0;">SCHED. OF REMITTANCE FOR TODAY</p>
   <button class="btn btn-warning " style="color:wite;font-size:12px;" data-coreui-toggle="collapse" data-coreui-target="#scdarea" aria-expanded="false" aria-controls="flush-collapseOne" >

Click Here !

  </button>
  <div class="card-body p-1 accordion-collapse collapse"  id="scdarea"   data-coreui-parent="#accordionFlushExample">
<?php


  $info = mysqli_query($db,"SELECT * FROM  list_of_agent_for_import  ");
while ($inforow = mysqli_fetch_array($info))
{
      $load++;
$rini =$inforow['INI'];
$namec = $inforow['NAME'];
$add = $inforow['ADDRESS'];
$sched = strtoupper($inforow['sched']);
date_default_timezone_set('Asia/Manila');
$today = strtoupper(date("l"));

if($today == $sched){
    date_default_timezone_set('Asia/Manila');
    //echo$_SESSION['activeuser'].'-'.$rini;
if($_SESSION['activeuser'] == $rini){
echo '<script>alert(" Mam/Sir '.$namec.' Today Is Your Schedule Kaelco Is Waiting For Your Remittance Thank You!")</script>';
}
  // $notifremit = 
  echo '
  
  <ol class="list-group list-group">
 
';
echo'
 <li class="list-group-item d-flex justify-content-between align-items-start mt-1">
    <div class="ms-2 me-auto">
      <div ><b> '.$namec.' </b></div>
'.$add.'
    </div>
    <span class="badge = rounded-pill" style=" background-color:#157f91;">'.$sched.'</span>
  </li>

';


echo"</ol>";

}}

?>
</div>



  <p class="nav-title p-2  text-center" style="font-size:12px;background-color:white;">LIST OF AGENT, DEPUTIES AND COLLECTOR</p>

   <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item p-1">
      

           
     
            

    
<div class="table-responsive nav-item" >
                    <table class="table  mb-0">
                      <thead class="table-light fw-semibold">

 

                  
                      <tbody>
                         <tr class="align-middle " style="border-bottom:1px solid #d8dbe0; width:auto;">
                  <?php 
       
           date_default_timezone_set('Asia/Manila');


$montset=     date("F");
    $month=     date("m");
    $year =  date("Y");



$totalcollstr = mysqli_query($db,"SELECT SUM(COLLAMT) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$month' AND YEAR(COLLDATE) = '$year' ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$gtcoll = $tcoll['totalcoll'];
}



$resultonline = mysqli_query($db,"SELECT * FROM online  ");
while ($telonline = mysqli_fetch_array($resultonline))
{

$inionline= $telonline['ini'];

$resultname = mysqli_query($db,"SELECT * FROM ftellers WHERE TELINI = '$inionline' ");
while ($telname = mysqli_fetch_array($resultname))
{

$onlinename = $telname['TELLNAME'];

}
if($inionline == $user){

}else{


}



            $pp1 = "profile/20211221-Ivana-Alawi.jpg";
            $result = mysqli_query($db,"SELECT * FROM profile WHERE ini = '$inionline' ");
while ($pp_row = mysqli_fetch_array($result))
{

$pp1 = $pp_row['url'];
}

$totalper = mysqli_query($db,"SELECT SUM(COLLAMT) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$month' AND YEAR(COLLDATE) = '$year' AND TELLCODE ='$inionline'  ");
while ($tcollper = mysqli_fetch_array($totalper))
{
$telcol= $tcollper['totalcoll'];
}

$percentage =$telcol;
$totalWidth =$gtcoll;
                                preg_match('/(.*\.[0-9]{2})/', $percentage, $matches);
 preg_match('/(.*\.[0-9]{2})/',$totalWidth, $matches);
//echo $matches[1];  

$new_width = (int)($percentage *100)/$totalWidth ; 

                  ?>
              
                     
                          <td class="text-center"   style="color:#ebedef;width:40px;">  <span><b> <?php echo$list; ?> </b></span>
                            <div class="avatar ">     <a href="timeline.php?huser='<?php echo$inionline; ?>'"><img class="avatar-img" src="<?php echo$pp1;  ?>" alt="user@email.com"></a></div>
                          
                          </td>
                          <td  style="width:2000px;">
                          
                            <div class="small text-medium " ><b><?php echo$onlinename; ?> </b></b> <br>
                           <span style="font-size:11px;" >Percentage Of total Collection For the Month OF <?php echo $montset; ?></span> 
                             <?php
  echo convertExponentialToDecimal($new_width); ?>%
                            <div class="progress progress-thin">
                          
                              <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo convertExponentialToDecimal($new_width); ?>%" aria-valuenow="<?php echo convertExponentialToDecimal($new_width); ?>" aria-valuemin="0" aria-valuemax="<?php echo floor($totalWidth); ?>"></div>
                            </div>
                            </div>

                             <div class="small text-medium " style="">Total Collection
                          <span class="badge   ms-auto text-light" style="background-color:#1e1d1d;font-size:14px;" ><?php


   
$totalcollstr = mysqli_query($db,"SELECT SUM(COLLAMT) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$month' AND YEAR(COLLDATE) = '$year' AND TELLCODE ='$inionline'  ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$mtcoll = $tcoll['totalcoll'];
}



echo number_format($mtcoll/100, 2,'.',',');
 ?></span>
                          </div>
                          <div class="small text-medium " style="">Arrears Collected 
                          <span class="badge   ms-auto " style="font-size:14px;background-color:white;color:black;" ><?php


   
$totalcollstr = mysqli_query($db,"SELECT SUM(COLL02) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$month' AND YEAR(COLLDATE) = '$year' AND TELLCODE ='$inionline'  ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$mtcoll = $tcoll['totalcoll'];
}
echo number_format($mtcoll/100, 2,'.',',');
 ?></span>
                          </div>
                          </td>
              
                        
                      
                   


                        <?php 

}


                        ?>
                             </tr>
                        </span>


                    
                      </tbody>
                    </table>

                    
                  </div>

</ul>


















      
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
    </script>

  </body>
</html>
<input type="hidden" id="telini" value="<?php echo$user; ?>">
<script>


  $(document).ready(function()

{

$("#clickdo").off('click').click( function(){
alert("d pa tapos");
//window.location.href = 'disco.php';
});
$("#clickremit").off('click').click( function(){

window.location.href = 'remittance.php';
});
$("#clickcs").off('click').click( function(){

window.location.href = 'collsummary.php';
});

$("#clickact").off('click').click( function(){

window.location.href = 'useractivity.php';
});
$("#clickdm").off('click').click( function(){

window.location.href = 'disconnection_monitoring.php';
});
$("#logout").off('click').click( function(){

window.location.href = 'logout.php';
});
$("#home").off('click').click( function(){

window.location.href = 'dashboard.php';
});
function readURL(input){
if(input.files && input.files[0]){

  var reader = new FileReader();
  reader.onload = function(e){

    $('#image_upload_preview').attr('src',e.target.result);

  
  }

  reader.readAsDataURL(input.files[0]);
}



}
$("#file").off('click').click( function(){

$("#file").change(function(){

readURL(this);

});
});



$("#upload").off('click').click( function(){
  

  
    var form_data = new FormData();

   // var oFReader = new FileReader();
//oFReader.readAsDataURL(document.getElementById("file").files[0]);
   // var f = document.getElementById("file").files[0];
//var fsize = f.size||f.fileSize;
  //  if(fsize > 2000000){
    //  alert("Image File Size is very big");
   // }
  //  else{}

var ini = $("#telini").val();


    form_data.append("file", document.getElementById('file').files[0]);
   form_data.append("ini",ini);
      
  
     

    $.ajax({
      url:"saveprofile.php",
      method:"POST",
      data: form_data ,
   timeout: 0,
      contentType: false,
      cache: false,
      processData: false,
      success:function(success){

console.log(success);
      $("#profileres").html(success);

    //$('#image_upload_preview').attr('src', " ");

      }

    });


  });



});
</script>

