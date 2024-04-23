<?php
include 'header.php';
//echo"<script> alert('new feature (->change profile<-)  ada isuna ayan  3 bar icon left side naka hide suna nu han nga naka update jy google chrome you ! paki update yu lattan ijy playstore thanks !')</script>";
?>
<?php if($user =="JCB"){}else{ ?>
   <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

      <div class="body flex-grow-1 px-2">
       <div class="alert  alert-dismissible fade show" role="alert">
<iframe src="https://www.facebook.com/plugins/video.php?height=322&href=https%3A%2F%2Fweb.facebook.com%2Fjeff000.me%2Fvideos%2F328765806323941%2F&show_text=false&width=560&t=0" width="300" height="322" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
  <a ="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </a>


</div> -->
<?php } ?>
  <div class="row ">
  
            <div class="col-sm-6 col-lg-4 p-1">


<div class="card" style="border-radius:0;">



 <div class="card-header">
<span style ="position:relative;color:#157f91;><i  style="position:absolute;" class="material-icons" >account_box</i></span> <span style="position:absolute;left:45;color:#157f91;"><b>LEDGER </span> 

<div class="alert alert-warning mt-2" role="alert" >
CURRENT COLLECTION UPDATE:<b> 02/01/2024 11:51 AM  </b>
<br>
COLLECTION UPDATE SCHED: 12:00 - 1:00 PM  and 6:40 - 7:00 PM
</div> 

<a class="nav-link" href='http://kaelco.000.pe/Upgrade/dist/kaelco.php'  style="float:right;color:#bc4c00;"> Go To Ledger <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg></b> </a>
  </div>
          <div class="card-body " style="padding:0;">      </div>

</div>



<div class="card" style="border-radius:0;">
  <div class="card-header" data-coreui-toggle="collapse" data-coreui-target="#ledgarea1" aria-expanded="false" aria-controls="flush-collapseOne" >
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
  <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
</svg> <span style="position:absolute;left:45;color:#157f91;"><b>TOP HIGHEST COLLECTION</b>(Click Here)</span> 


  </div>
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
                             <span class="badge  bg-warning ms-auto" style="font-size:14px;color:black;" >  <?php  echo number_format($totalcol/100, 2,'.',','); ?></span>
                          </td>
                       
                      
                        </tr>
                        
   <?php } ?>

                    
                      </tbody>
                    </table>

                    
                  </div></div>





<div class="card" style="border-radius:0;">
  <div class="card-header" data-coreui-toggle="collapse" id="clickact" data-coreui-target="#actarea" aria-expanded="false" aria-controls="flush-collapseOne" >
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
  <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
</svg> <span style="position:absolute;left:45;color:#157f91;"><b>DAILY USER ACTIVITY</b>(Click Here)</span> 


  </div>
  </div>


<div class="card" style="border-radius:0;">
  <div class="card-header" data-coreui-toggle="collapse" id="clickremit" data-coreui-target="#actarea" aria-expanded="false" aria-controls="flush-collapseOne" >
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
  <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
</svg> <span style="position:absolute;left:45;color:#157f91;"><b>REMITTANCE MONITORING</b>(Click Here)</span> 


  </div>
  </div>



<div class="card" style="border-radius:0;">
  <div class="card-header" data-coreui-toggle="collapse" id="clickdm" data-coreui-target="#actarea" aria-expanded="false" aria-controls="flush-collapseOne" >
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
  <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
</svg> <span style="position:absolute;left:45;color:#157f91;"><b>DISCO MONITORING</b>(Click Here)</span> 


  </div>
  </div>


<div class="card" style="border-radius:0;">
  <div class="card-header" data-coreui-toggle="collapse" id="clickdo" data-coreui-target="#actarea" aria-expanded="false" aria-controls="flush-collapseOne" >
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
  <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
</svg> <span style="position:absolute;left:45;color:#157f91;"><b>DISCO ORDER</b>(Click Here)</span> 


  </div>
  </div>




<div class="card" style="border-radius:0;">
  <div class="card-header" data-coreui-toggle="collapse" id="clickcs" data-coreui-target="#actarea" aria-expanded="false" aria-controls="flush-collapseOne" >
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
  <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
</svg> <span style="position:absolute;left:45;color:#157f91;"><b>COLLECTION SUMMARY</b>(Click Here)</span> 


  </div>
  </div>


<div class="card" style="border-radius:0;">
  <div class="card-header" data-coreui-toggle="collapse" data-coreui-target="#scdarea" aria-expanded="false" aria-controls="flush-collapseOne" >
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
  <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
</svg> <span style="position:absolute;left:45;color:#157f91;"><b>SCHED. OF REMITTANCE FOR TODAY</span> 


  </div>
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
</div></div>








</div>
</div><div class="col-sm-6 col-lg-8 p-1">


<div class="card" style="border-radius:0;">
  <div class="card-header" data-coreui-toggle="collapse" data-coreui-target="#ledgarea" aria-expanded="false" aria-controls="flush-collapseOne" >
<span style ="position:relative;color:#157f91;><i  style="position:absolute;" class="material-icons" >history</i></span> <span style="position:absolute;left:45;color:#157f91;"><b>COLLECTION CHART </b>(Click Here)</span> 


  </div>
  <div class="card-body p-1 accordion-collapse "   id="ledgarea" data-coreui-parent="#accordionFlushExample">

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<canvas id="myChart" style="width:100%;max-width:100%; fonts-size:8px;"></canvas>

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
</div>
</div>






<div class="col-sm-12 col-lg-12 p-1">




<div class="row g-0  m-1"style="background:transparent;">


<div class="card-body ">
<h3 > NEWS AND UPDATES </h3>
<div class="mb-3">

  <input type="Text" class="form-control" id="exampleFormControlInput1" placeholder="Your Tittle">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"> </label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="What's on your  mind ?"></textarea>
</div>

<button type="button" class="btn btn-info text-light btn-sm" style="float:right;">POST</button>

<label class="pl-2" for='file'>
  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
  <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4z"/>
  <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
</svg>
</label>

<form action="demo_form.asp" style='display: none;'>
    <input type="ftex" name="pic" accept=".gif,.jpg,.png,.tif|image/*" id='file1'>

</form>
</div>
<div class="gallery"></div>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>



<?php

include 'con.php';



$result= mysqli_query($db,"SELECT * FROM POST   ");
while ($post = mysqli_fetch_array($result))
{



$postid=$post['id'];
$date=$post['Date'];
 ?>
<div class="card col-md-12 mt-1 p-1">
  <div class="row g-0">
  
    <div class="col-md-12">
      <div class="card-body" >
        <h6 class="card-title"> <div class="avatar avatar-md">   <img class="avatar-img" height="2" src="Kaelco Logo.jpg" alt="user@email.com"></div><?php  echo$post['Tittle'];  ?></h6>
        <p class="card-text"><?php  echo$post['Content'];  ?></p>
        <p class="card-text" id="pdate1"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
      </div>
    </div>
      <div class="dimg col-md-12 " >

  <div class="imgarea<?php echo$postid; ?>" val=" <?php echo$postid; ?>"></div>
    </div>
     <p class="card-text p-1 " id="pdate2"  style="float:right;"><small class="text-body-secondary mr-2"  style="float:right;"><?php 
     $datetime1 = new DateTime(date("Y-m-d h:i:sa ", strtotime($date)));
    // echo date("Y-m-d h:i:sa ");
$datetime2 = new DateTime(date("Y-m-d h:i:sa "));
$interval = $datetime1->diff($datetime2);
if($interval->format('%d')> 0){
   echo  $interval->format('%d')." Days ago";
}else{
echo  $interval->format('%d')." Hours ".$interval->format('%i')." Minutes ago"; 
  }  ?></small></p>
  </div>
</div>

</div>



        <script>




            var images<?php echo$postid ;?> = [
              <?php


$result1= mysqli_query($db,"SELECT * FROM img  WHERE post_id = '$postid' ");
while ($postimg = mysqli_fetch_array($result1))
{
echo "'".$postimg['url']."', ";

}

              ?>
            ];
 

            $(function() {

               $(".imgarea"+<?php echo$postid ;?>).imagesGrid({
                    images: images<?php echo$postid ;?>
                });
              
               

            });

        </script>
<?php

}

?>








</div>


















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

