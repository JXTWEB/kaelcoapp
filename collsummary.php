<?php
include 'header.php';
$rt =  $_GET['route'];
$lastid =  $_GET['id'];
$previd =  $_GET['prev'];
if(!$lastid){
    $lastid = 0;
}

?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
  <div class="card-body  " style="padding:0;margin:0;"   data-coreui-parent="#accordionFlushExample">

  <table class="table  mb-0" style="font-size:13px;">
                    <thead>
                   
                  <tr>
			
                   <th> <b><button type="button" style="background:#ec4b88;" class="btn btn-warning  btn-sm p-2"></button> Disco </b></th>
                    <th ><b><button type="button" style="background:#37c37c;" class="btn btn-warning  btn-sm p-2"></button> Fully Paid</b></th>
                     <th ><b><button type="button" style="background:#eea604;" class="btn btn-warning  btn-sm p-2"></button>  UnPaid</b></th>
                    <th ><b><button type="button" style="background:#a619c8;" class="btn btn-warning  btn-sm p-2"></button>  Pull Out</b></th>
             
                  </tr></b>
                </thead>
</table>


   <span class="badge   m-2 p-1 text-wrap " style="color:black; background-color:#b4d2d8; text-align:left;display: block;" > 
<center> ROUTE: <?php 

echo$rt;
?>
</center>
   </span>

                      
  <?php
  if(!$rt){}else{

include 'con.php';
$count =0;
$resultmonth = mysqli_query($db,"SELECT BOOKNO, NEWACTS, CNAME, NEWMSN, CADDRESS, SEQUENCE, BILLSTAT FROM  fbilmast WHERE BOOKNO =$rt AND NEWACTS >= $lastid ORDER BY NEWACTS ASC LIMIT 20 ");

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
 //$bg1="#fde8b9";
 $bg1="#eea604";
if($rowmonth['BILLSTAT']=="D"){
    $bg1="#ec4b88";
}
if($rowmonth['BILLSTAT']=="O"){
    $bg1="#a619c8";
}

$countp=0;


$getpayment = mysqli_query($db,"SELECT LB22, NEWACTS FROM 	fbilledg  WHERE NEWACTS = $acc    ");
while ($rowpayment= mysqli_fetch_array($getpayment))
{

$lb = $rowpayment['LB22'];
}
if($lb <= 0){
      $bg1="#37c37c";
}

echo'  
               
                          <div class="card" style="border-radius:0;">
  <div class="card-header csm" data-bs-toggle="modal" data-bs-target="#ledgarea2'.$rowmonth['NEWACTS'].'" id="'.$rowmonth['NEWACTS'].'" style="background-color:white;border-radius:0;border-left:5px solid '.$bg1.'" >
      
                          <td class=""   style="width:50%;"><span  style="background-color:'.$bg1.';color:white; border-radius:5px;float:right;padding:5px;"><b>'.$acc2.'</b></span><br><b>'.$rowmonth['CNAME'].'</b><br>'.$rowmonth['CADDRESS'].'<br><b>M-'.$rowmonth['NEWMSN'].'</b> </td>
                     

  </div>';

if($lb > 0){
  echo'		
	
<div class="modal"  id="ledgarea2'.$rowmonth['NEWACTS'].'">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">

       <div class="modal-header">
     <div class="ld" id="ld'.$rowmonth['NEWACTS'].'" aria-hidden="true">
  <span class="spinner-border spinner-border-sm"  role="status" aria-hidden="true"></span>
  Loading...


</div>
      </div>

      <!-- Modal body -->
      <div class="modal-body p-1" id="ledgarea1'.$rowmonth['NEWACTS'].'">

';




echo'
      </div>
      <div class="modal-footer">
        <button type="button"  class="btn btn-secondary close" data-bs-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>

                          
                          
                          ';


}


echo'
  </div>

                          
                          
                          ';

}
  }

//echo$lastid;
  ?>
 
  <input id="previd" type="hidden" value="<?php echo $previd; ?>">
<input id="previdc" type="hidden" value="<?php echo$prevcurrentid; ?>">
<input id="nextid" type="hidden" value="<?php echo$lastid; ?>">
<input id="rt" type="hidden" value="<?php echo$rt ?>">
  
<button type="button" id="prev" style="background:#53acbd;" class="btn btn-info text-light btn-sm m-1"><b><< prev  </b> </button>
<button type="button" id="next" style="background:#53acbd; float:right;" class="btn btn-info text-light btn-sm m-1"><b> next >></b> </button>



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
     $(".ld").hide();
 $(".ledgearea1").empty();
$('select').on('change', function (e) {
    var optionSelected = $("option:selected", this);
    var valueSelected = this.value;
    


window.location.href = 'collsummary.php?route='+valueSelected;




});


$("#next").off('click').click( function(){



window.location.href = 'collsummary.php?route='+$("#rt").val()+'&id='+$("#nextid").val()+'&prv=e'+$("#previdc").val();
});


$(".close").off('click').click( function(){
     $(".ledgearea1").empty();
});
$(".csm").off('click').click( function(){

var _acc = $(this).attr("id");
   $("#ld"+_acc).show();
 $(".ledgearea1").empty();
 $.ajax({
        url:'coll_summary_func.php',
        type: 'POST',
        async : true,
        data: {acc:_acc},
        dataType: 'text',
        success: function(data){
       $("#ledgarea1"+_acc).html(data);
          console.log(data);
           
        }
      });


});

$("#prev").off('click').click( function(){


window.location.href = 'collsummary.php?route='+$("#rt").val()+'&id='+$("#previd").val()+'&prv=e'+$("#previdc").val();
});



});
    </script>

  </body>
</html>


