<?php
include 'headerdark.php';
//echo"<script> alert('Madama Update KO!')</script>";

?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<style>

</style>




<div style="    background-color:#21212d;">

<div style="position:relative; height:150px; background-image: url('profile/ai-generated-7945706.png'); text-align:center; background-repeat: no-repeat; background-size: cover;text-shadow: 4px 4px 8px rgba(0,0,0,0.85);font-weight:bolder;  -webkit-mask: -webkit-gradient(linear, center top, center bottom, color-stop(0.00, rgba(0, 0, 0, 1)), color-stop(0.35, rgba(0, 0, 0, 1)), color-stop(0.50, rgba(0, 0, 0, 1)), color-stop(0.65, rgba(0, 0, 0, 1)), color-stop(1.00, rgba(0, 0, 0, 0)));">
<h5 style="margin:0; margin-top:2%;"><a style="color:#6ff904;margin:0;"  href="https://drive.google.com/file/d/1y6SKX2uQ0LLK9wAmdU_BcXMFAjJ9mLTs/view?usp=sharing"> CLICK HERE ! TO DOWNLOAD KAELCO APP VERSION HERE ! </a> </h5>
<div class="alert  "  style="background:transparent;margin:0; margin-top:-5px;" role="alert" >

 <?php if($mode == "unrestrict"){ ?> <a id="badge"  href="http://kaelco.000.pe/Upgrade/dist/kaelco.php"  target="_blank">
  <img  src="KaelcoLogo.jpg"  /> <?php } ?>

    <div class="name text-wrap "style="background:transparent;color:#6ff904; border:1px solid #6ff904" id="name1" style="font-size:10px;">CURRENT COLL. UPDATE:<b> 03/04/2024 12:30 PM  </b></div>
    <div class="name text-wrap " style="background:transparent;color:#6ff904; border:1px solid #6ff904" id="name1" style="font-size:10px;"><b>
    COLLECTION UPDATE SCHED: 8:00am-1:00pm   </b></div>
  <?php if($mode == "unrestrict"){ ?>  <div class="name" style="background:transparent;color:#6ff904; border:1px solid #6ff904"><b>
Go To Ledger <svg xmlns="http://www.w3.org/2000/svg" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg></b> 
    </div> <?php } ?>
<?php if($mode == "unrestrict"){ ?></a>    <?php }?>
</div> 
</div>
<style>


p, #td{
    font-family:var(--bs-font-sans-serif);
background: #3d3b3c;
background: linear-gradient(to right, #CF823A 0%, #2BBCCF 100%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;

}
tr{
    
    background:#1f1d29;
}
.name{

    background-color:#3d3b3c;
}
#badge{
        color:#aaaaad;
}
</style>


 <div class="nav-title   text-center p-1 " style="font-size:12px;background:background: rgb(33,33,45);background: linear-gradient(0deg, rgba(33,33,45,1) 4%, rgba(57,124,120,1) 51%, rgba(33,33,45,1) 100%);margin:0;color:#acf4e0;">TOP HIGHTEST COLLECTION</div>
 

    
<div class="table-responsive nav-item mt-1 mb-1" >
                    <table class="table  mb-0">
                    



         <tr class="align-middle " style="border-bottom:1px solid #d8dbe0; width:auto;">
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

$resultcoll = mysqli_query($db,"SELECT TELLCODE, COLLDATE, SUM(COLLAMT) AS totalcoll , SUM(CNTRTOT) AS totalbill   FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$month' AND YEAR(COLLDATE) = '$year'  GROUP BY TELLCODE ORDER BY SUM(COLLAMT) DESC LIMIT 15");
while ($coll = mysqli_fetch_array($resultcoll))
{

       
$gtbill = $coll['totalbill'];
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
 
                          <td class="text-center p-1 box"   style="width:300px;  background:#1f1d29;border:3px solid #353736;border-radius:10px;">
  <?php if($list == 1 || $list == 2 || $list == 3) {
if($list ==1){$listset = "1st"; $lbg ="linear-gradient(#b7aa5b 0%, #282f37 100%);";} 
if($list ==2){$listset = "2nd";   $lbg ="linear-gradient(#bfbdb1 0%, #282f37 100%);"; } 
if($list ==3){$listset = "3rd";  $lbg ="linear-gradient(#b17f49 0%, #282f37 100%)";} 
       ?><div class="ribbon blue" ><span  style="background:<?php 
       echo$lbg; ?>"><?php echo$listset; ?></span></div> <?php }?>
                                                   <div class="badge badge-primary text-wrap " style="width: 6rem;color:#37957b;font-weight:light; font-size:8px;"> TOP <?php echo$list; ?> HIGHTEST</div>
<br>
<div class="badge badge-primary text-wrap w-100"  id="td" style="width: 6rem;color:#636f83;font-weight:light; font-size:10px;"> Total OF <?php echo$gtbill; ?> Bills Collected </div>
<br>
                                           
                           <a id="badge"  href="timeline.php?huser='<?php echo$tellini; ?>'" target="_blank">
  <img  src="<?php echo$pp2;  ?>"  />

    <div class="name" id="name" style="color:#aaaaad;"><?php 
 
 
 echo$name;


  ?></div>
    <div class="name" id="name"style="color:#aaaaad;" >Total Collection
    <br><b>
     <?php




echo number_format($totalcol/100, 2,'.',',');
 ?></b></div>

</a>    
                 
                                                     <span style="font-size:11px;"  id="td" >Percentage Of total Collection For the Month OF <?php echo $montset; ?>          <b><?php  $per = convertExponentialToDecimal($new_width);
  echo substr( $per, 0, 3);
 ?>% </b></span> 
                            <div class="progress progress-thin mt-1">
                          
                              <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo convertExponentialToDecimal($new_width); ?>%" aria-valuenow="<?php echo convertExponentialToDecimal($new_width); ?>" aria-valuemin="0" aria-valuemax="<?php echo floor($totalWidth); ?>"></div>
                            </div>
                            </div>
                          </td>
                         
                        
     
                        
   <?php } ?>
</tr>
                    
                      </tbody>
                    </table>
                    </div>

                    
      




 <div class="nav-title   text-center p-1 " style="font-size:12px;background:background: rgb(33,33,45);background: linear-gradient(0deg, rgba(33,33,45,1) 4%, rgba(57,124,120,1) 51%, rgba(33,33,45,1) 100%);margin:0;color:#acf4e0;">TOP 5 HIGHTEST COLLECTION - COLLECTOR</div>
 

    
<div class="table-responsive nav-item mt-1 mb-1" >
                    <table class="table  mb-0">
                    



         <tr class="align-middle " style="border-bottom:1px solid #d8dbe0; width:auto;">
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



$resultcoll = mysqli_query($db,"SELECT TELLCODE, COLLDATE, SUM(COLLAMT)  AS totalcoll, SUM(CNTRTOT) AS totalbill  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$month' AND YEAR(COLLDATE) = '$year'  GROUP BY TELLCODE ORDER BY SUM(COLLAMT) DESC ");
while ($coll = mysqli_fetch_array($resultcoll))
{
$gtbill = $coll['totalbill'];
$tellini = $coll['TELLCODE'];
$resultcoll1 = mysqli_query($db,"SELECT * FROM onlineaccount WHERE INI = '$tellini' AND TYPE='collector' LIMIT 5");
while ($coll1 = mysqli_fetch_array($resultcoll1))
{
    $list++;

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

if($list <= 5 ) {
?>
 
                           <td class="text-center p-1 box"   style="width:300px;  background:#1f1d29;border:3px solid #353736;border-radius:10px;">
  <?php if($list == 1 || $list == 2 || $list == 3) {
if($list ==1){$listset = "1st"; $lbg ="linear-gradient(#b7aa5b 0%, #282f37 100%);";} 
if($list ==2){$listset = "2nd";   $lbg ="linear-gradient(#bfbdb1 0%, #282f37 100%);"; } 
if($list ==3){$listset = "3rd";  $lbg ="linear-gradient(#b17f49 0%, #282f37 100%)";} 
       ?><div class="ribbon blue" ><span  style="background:<?php 
       echo$lbg; ?>"><?php echo$listset; ?></span></div> <?php }?>
                                                   <div class="badge badge-primary text-wrap " style="width: 6rem;color:#37957b;font-weight:light; font-size:8px;"> TOP <?php echo$list; ?> HIGHTEST</div>
<br>
<div class="badge badge-primary text-wrap w-100"  id="td" style="width: 6rem;color:#636f83;font-weight:light; font-size:10px;"> Total OF <?php echo$gtbill; ?> Bills Collected </div>
<br>
                                           
                           <a id="badge"  href="timeline.php?huser='<?php echo$tellini; ?>'" target="_blank">
  <img  src="<?php echo$pp2;  ?>"  />

    <div class="name" id="name" style="color:#aaaaad;"><?php 
 
 
 echo$name;


  ?></div>
    <div class="name" id="name"style="color:#aaaaad;" >Total Collection
    <br><b>
     <?php




echo number_format($totalcol/100, 2,'.',',');
 ?></b></div>

</a>    
                 
                                                     <span style="font-size:11px;"  id="td" >Percentage Of total Collection For the Month OF <?php echo $montset; ?>          <b><?php  $per = convertExponentialToDecimal($new_width);
  echo substr( $per, 0, 3);
 ?>% </b></span> 
                            <div class="progress progress-thin mt-1">
                          
                              <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo convertExponentialToDecimal($new_width); ?>%" aria-valuenow="<?php echo convertExponentialToDecimal($new_width); ?>" aria-valuemin="0" aria-valuemax="<?php echo floor($totalWidth); ?>"></div>
                            </div>
                            </div>
                          </td>
                         
                        
                         
                        
     
                        
   <?php } }}?>
</tr>             
              
                      </tbody>
                    </table>
                    </div>











 
    <div class="nav-title   text-center p-1 " style="font-size:12px;background:background: rgb(33,33,45);background: linear-gradient(0deg, rgba(33,33,45,1) 4%, rgba(57,124,120,1) 51%, rgba(33,33,45,1) 100%);margin:0;color:#acf4e0;">TOP 8 HIGHTEST COLLECTION - AGENT AND DEPUTIES</div>
    
<div class="table-responsive nav-item mt-1 mb-1" >
                    <table class="table  mb-0">
                    



         <tr class="align-middle " style="border-bottom:1px solid #d8dbe0; width:auto;">
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

   $gtbill=0;

$resultcoll = mysqli_query($db,"SELECT TELLCODE, COLLDATE, SUM(COLLAMT) AS totalcoll, SUM(CNTRTOT) AS totalbill    FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$month' AND YEAR(COLLDATE) = '$year'  GROUP BY TELLCODE ORDER BY SUM(COLLAMT) DESC ");
while ($coll = mysqli_fetch_array($resultcoll))
{



$gtbill = $coll['totalbill'];

$tellini = $coll['TELLCODE'];
$resultcoll1 = mysqli_query($db,"SELECT * FROM onlineaccount WHERE INI = '$tellini' AND TYPE='agent' LIMIT 8");
while ($coll1 = mysqli_fetch_array($resultcoll1))
{
    $list++;

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
if($list <= 8 ) {

?>
       <td class="text-center p-1 box"   style="width:300px;  background:#1f1d29;border:3px solid #353736;border-radius:10px;">
  <?php if($list == 1 || $list == 2 || $list == 3) {
if($list ==1){$listset = "1st"; $lbg ="linear-gradient(#b7aa5b 0%, #282f37 100%);";} 
if($list ==2){$listset = "2nd";   $lbg ="linear-gradient(#bfbdb1 0%, #282f37 100%);"; } 
if($list ==3){$listset = "3rd";  $lbg ="linear-gradient(#b17f49 0%, #282f37 100%)";} 
       ?><div class="ribbon blue" ><span  style="background:<?php 
       echo$lbg; ?>"><?php echo$listset; ?></span></div> <?php }?>
                                                   <div class="badge badge-primary text-wrap " style="width: 6rem;color:#37957b;font-weight:light; font-size:8px;"> TOP <?php echo$list; ?> HIGHTEST</div>
<br>
<div class="badge badge-primary text-wrap w-100"  id="td" style="width: 6rem;color:#636f83;font-weight:light; font-size:10px;"> Total OF <?php echo$gtbill; ?> Bills Collected </div>
<br>
                                           
                           <a id="badge"  href="timeline.php?huser='<?php echo$tellini; ?>'" target="_blank">
  <img  src="<?php echo$pp2;  ?>"  />

    <div class="name" id="name" style="color:#aaaaad;"><?php 
 
 
 echo$name;


  ?></div>
    <div class="name" id="name"style="color:#aaaaad;" >Total Collection
    <br><b>
     <?php




echo number_format($totalcol/100, 2,'.',',');
 ?></b></div>

</a>    
                 
                                                     <span style="font-size:11px;"  id="td" >Percentage Of total Collection For the Month OF <?php echo $montset; ?>          <b><?php  $per = convertExponentialToDecimal($new_width);
  echo substr( $per, 0, 3);
 ?>% </b></span> 
                            <div class="progress progress-thin mt-1">
                          
                              <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo convertExponentialToDecimal($new_width); ?>%" aria-valuenow="<?php echo convertExponentialToDecimal($new_width); ?>" aria-valuemin="0" aria-valuemax="<?php echo floor($totalWidth); ?>"></div>
                            </div>
                            </div>
                          </td>
                         
                        
     
                        
   <?php }} }?>
</tr>             
              
                      </tbody>
                    </table>
                    </div>





 <div class="nav-title   text-center p-1 " style="font-size:12px;background:background: rgb(33,33,45);background: linear-gradient(0deg, rgba(33,33,45,1) 4%, rgba(57,124,120,1) 51%, rgba(33,33,45,1) 100%);margin:0;color:#acf4e0;">LIST OF AGENT, DEPUTIES AND COLLECTOR</div>

           
     
            

    
<div class="table-responsive nav-item mt-1 mb-1" >
                    <table class="table  mb-0">
                    



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


//echo $gtcoll;
//var_dump($gtcoll);

$resultonline = mysqli_query($db,"SELECT * FROM online ORDER BY id DESC ");
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
              
                           <td class="text-center p-1 box"   style="width:300px;  background:#1f1d29;border:3px solid #353736;border-radius:10px;">
  <?php if($list == 1 || $list == 2 || $list == 3) {
if($list ==1){$listset = "1st"; $lbg ="linear-gradient(#b7aa5b 0%, #282f37 100%);";} 
if($list ==2){$listset = "2nd";   $lbg ="linear-gradient(#bfbdb1 0%, #282f37 100%);"; } 
if($list ==3){$listset = "3rd";  $lbg ="linear-gradient(#b17f49 0%, #282f37 100%)";} 
       ?><div class="ribbon blue" ><span  style="background:<?php 
       echo$lbg; ?>"><?php echo$listset; ?></span></div> <?php }?>
                                                   <div class="badge badge-primary text-wrap " style="width: 6rem;color:#37957b;font-weight:light; font-size:8px;"> TOP <?php echo$list; ?> HIGHTEST</div>
<br>
<div class="badge badge-primary text-wrap w-100"  id="td" style="width: 6rem;color:#636f83;font-weight:light; font-size:10px;"> Total OF <?php echo$gtbill; ?> Bills Collected </div>
<br>
                                           
                           <a id="badge"  href="timeline.php?huser='<?php echo$tellini; ?>'" target="_blank">
  <img  src="<?php echo$pp1;  ?>"  />

    <div class="name" id="name" style="color:#aaaaad;"><?php 
 
 
 echo$onlinename;


  ?></div>
    <div class="name" id="name"style="color:#aaaaad;" >Total Collection
    <br><b>
     <?php




echo number_format($telcol/100, 2,'.',',');
 ?></b></div>

</a>    
                 
                                                     <span style="font-size:11px;"  id="td" >Percentage Of total Collection For the Month OF <?php echo $montset; ?>          <b><?php  $per = convertExponentialToDecimal($new_width);
  echo substr( $per, 0, 3);
 ?>% </b></span> 
                            <div class="progress progress-thin mt-1">
                          
                              <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo convertExponentialToDecimal($new_width); ?>%" aria-valuenow="<?php echo convertExponentialToDecimal($new_width); ?>" aria-valuemin="0" aria-valuemax="<?php echo floor($totalWidth); ?>"></div>
                            </div>
                            </div>
                          </td>
                
                         
                        
                      
                   


                        <?php 

}


                        ?>
                      
                    
          </tr>             
              
                      </tbody>
                    </table>
                    </div>



  <div class="nav-title   text-center p-1 " style="font-size:12px;background:background: rgb(33,33,45);background: linear-gradient(0deg, rgba(33,33,45,1) 4%, rgba(57,124,120,1) 51%, rgba(33,33,45,1) 100%);margin:0;color:#acf4e0;">SCHED. OF REMITTANCE FOR TODAY</div>
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



  <div class="nav-title   text-center p-1 " style="font-size:12px;background:background: rgb(33,33,45);background: linear-gradient(0deg, rgba(33,33,45,1) 4%, rgba(57,124,120,1) 51%, rgba(33,33,45,1) 100%);margin:0;color:#acf4e0;">COLLECTION CHART</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<canvas id="myChart" style="width:100%;max-width:100%; background-color:#21212d; fonts-size:8px;"></canvas>

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














      
      <footer class="footer"><span id="audioarea"></span>
        <div><a href="http://randeljeffdelprado95.epizy.com/">Full Stack WEB</a><a href="http://randeljeffdelprado95.epizy.com/">DEV</a> © 120995.</div>
        <div class="ms-auto"><a href="https://web.facebook.com/jeff000.me">JXT-WEB</a></div>
      </footer>
    </div>
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
$("#clickor").off('click').click( function(){

window.location.href = 'or.php';
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

