<?php
include 'header.php';
$rt =  $_GET['route'];
$lastid =  $_GET['id'];
if(!$lastid){
    $lastid = 0;
}

?>



<div class="card" style="border-radius:0;">
  <div class="card-header" data-coreui-toggle="collapse" data-coreui-target="#actarea" aria-expanded="false" aria-controls="flush-collapseOne" >
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
  <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
</svg> <span style="position:absolute;left:45;color:#157f91;"><b>DISCO ORDER</b></span> 

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
   <span class="badge   p-2 text-wrap " style="color:black; background-color:#b4d2d8; text-align:left;display: block;" > 
<center> ROUTE: <?php 

echo$rt;
?>
</center>
   </span>
<table class="table  mb-0" style="font-size:13px;">
                    <thead>
                   
                  <tr>
			
                   <th width="5%"> <b>AC_N </b></th>
                    <th ><b>NAME/ADDRESS/METER NO</b></th>
                    <th ><b>A/R</b></th>
                 
                  </tr></b>
                </thead>

                  
                      <tbody id="actarea" >
                      
  <?php
  if(!$rt){}else{

include 'con.php';
$resultmonth = mysqli_query($db,"SELECT BOOKNO, NEWACTS, CNAME, NEWMSN, CADDRESS, SEQUENCE FROM  fbilmast WHERE BOOKNO =$rt  ORDER BY SEQUENCE LIMIT 20 ");

while ($rowmonth = mysqli_fetch_array($resultmonth))
{
    $lastid =$rowmonth['SEQUENCE'];
$acc =$rowmonth['NEWACTS'];
$arrears=0;
$current=0;
$bal = 0;
$resultacr = mysqli_query($db,"SELECT NEWACTS, LB22, LB21, LA22 FROM 	fbilledg WHERE NEWACTS = $acc ");
while ($acr = mysqli_fetch_array($resultacr))
{



$arrears = $acr['LB21'] ;

$current = $acr['LA22'] ;
$bal = $acr['LB22'] ;


}
if($bal < 0){
  $bal=0;
}

if($bal >100){
echo'  <tr class=" " >
                          <td class=""   style="width:5%;">'.substr($rowmonth['NEWACTS'], 6).' </td>
                          <td class=""   style="width:50%;">'.$rowmonth['CNAME'].'/'.$rowmonth['CADDRESS'].'/<b>M-'.$rowmonth['NEWMSN'].'</b> </td>
                          <td class=""   style="width:45%;">
                       Current:<br><b> '.number_format($current/100, 2,'.',',').'</b>
                       <br>
                         Arrears:<br><b> '.number_format($arrears/100, 2,'.',',').'</b>
                          
                          </td>
                          
                          
                          
                          ';

}
}
  }

echo$lastid;
  ?>

<input id="nextid" type="hidden" value="<?php echo$lastid; ?>">
<input id="rt" type="hidden" value="<?php echo$rt ?>">
  <script>
   $("#ld").hide();
   </script>

        </tbody>
</table>

<button type="button" id="prev" style="background:#53acbd;" class="btn btn-info text-light btn-sm m-1"><b> PREV  </b> </button>
<button type="button" id="next" style="background:#53acbd;" class="btn btn-info text-light btn-sm m-1"><b> NEXT  </b> </button>

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

window.location.href = 'disco.php?route='+valueSelected;




});


$("#next").off('click').click( function(){

alert($("#rt").val());

alert($("#nextid").val());

window.location.href = 'disco.php?route='+$("#rt").val()+'&id='+$("#nextid").val();
});


  // Let's check if the browser supports notifications
  if (!("Notification" in window)) {
    alert("This browser does not support desktop notification");
  }

  // Let's check whether notification permissions have already been granted
  else if (Notification.permission === "granted") {
    // If it's okay let's create a notification
    var notification = new Notification("Hi there!");
  }

  // Otherwise, we need to ask the user for permission
  else if (Notification.permission !== "denied") {
    Notification.requestPermission().then(function (permission) {
      // If the user accepts, let's create a notification
      if (permission === "granted") {
        var notification = new Notification("Hi there!");
      }
    });
  }

  // At last, if the user has denied notifications, and you 
  // want to be respectful there is no need to bother them any more.

});
    </script>

  </body>
</html>


