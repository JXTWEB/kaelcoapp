<?php
include 'header.php';

?>

      <div class="body flex-grow-1 px-2 p-2">
   
<?php 
$db = mysqli_connect("localhost", "kaelco_buckup", "iSAJm3ZTxrR", "kaelco_buckup");
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
$idcount=0;
$showtables = mysqli_query($db,"SELECT table_name, engine FROM information_schema.tables WHERE table_type = 'BASE TABLE' AND table_schema='kaelco_buckup' ORDER BY table_name ASC  ");

while ($table=mysqli_fetch_array($showtables)) {
  $idcount++;
$ttb =($table[0]);
?>
<input type ="hidden" id="db<?php echo$idcount; ?>" d_date="<?php echo  date("M-Y", strtotime(substr($ttb, -6).'01')); ?>" value="<?php echo substr($ttb, -6); ?>">

<?php
}

$acc =  $_GET['id'];
$type =  $_GET['type'];


?>
<input type="hidden" id="type" value="<?php echo$type ?>">
<input type="hidden" id="acc" value="<?php echo$acc ?>">
<input type="hidden"  id="tb" value="<?php echo substr($ttb, -6); ?>">
<input type="hidden" id="current_tb" value="<?php echo$idcount; ?>">
<input type="hidden" id="last_tb" value="<?php echo$idcount; ?>">
<div class="card" style="border-radius:0;">
<span class="m-2">
    <div id="ldpaymentarea">  </div>
<button type="button" id="clickmark" style="background:#53acbd;color:white;" class="btn btn-info  btn-sm m-1" > <b> mark unpaid bills </b>  </button>


</span>
<span class="m-2">

<button type="button" id="prev" style="background:#53acbd;" class="btn btn-info text-light btn-sm m-1" > <b> << </b>  </button>
<input type="text" style ="text-align:center;border:none;background:transparent; width:auto; " class="m1" id="tb1" value="<?php echo  date("M-Y", strtotime(substr($ttb, -6).'01')); ?>" disabled>
<button type="button" id="next" style="background:#53acbd;" class="btn btn-info text-light btn-sm m-1"><b> >> </b> </button>



</span>


  <div class="card-header" data-coreui-toggle="collapse" data-coreui-target="#ledgarea" aria-expanded="false" aria-controls="flush-collapseOne" >
<span style ="position:relative;color:#157f91;><i  style="position:absolute;" class="material-icons" >history</i></span> <span style="position:absolute;left:45;color:#157f91;"><b>LEDGER</b>(Back Up)</span>  <span>  




</span>


  </div>
  <div class="card-body p-1 accordion-collapse "   id="ledgarea" data-coreui-parent="#accordionFlushExample">

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
        
        
	
			 
			         <tbody id="res">
			  
                </tbody>

			<div id="ld">
  <span class="spinner-border spinner-border-sm"  role="status" aria-hidden="true"></span>
  Loading... 


</div>
 


</table>

</div>
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


<script> 


  $(document).ready(function()
	

{
    if(type == "mark"){

    $("#ldpaymentarea").empty();
 $.ajax({
     url: 'loadpayment.php',
    type: 'POST',
    data: {acc:_acc, tb:_tb },
 dataType: 'text',
 async : true,
    success: function(data){
    $("#ldpaymentarea").html(data);
     console.log(data);
   
     }
 }); 
}
var _acc = $("#acc").val();
var type = $("#type").val();

var _tb = $("#tb").val();
var _url;
_url = "backup_funct_mark.php";
if(type == "unmark"){
    _url = "backup_funct.php";

    
}

  $("#ld").show();
 $.ajax({
     url: _url,
    type: 'POST',
    data: {acc:_acc, tb:_tb },
 dataType: 'text',
 async : true,
    success: function(data){
    $("#res").html(data);
     console.log(data);
       $("#ld").hide();
     }
 });

$("#prev").off('click').click( function(){
    
  $("#ld").show();
       $("#res").empty();
var adtbcount = parseInt($("#current_tb").val())-1;
var last_tb = $("#last_tb").val();
if(adtbcount < last_tb ){
    $("#next").show();
}
if(adtbcount <= 1 ){
   $("#prev").hide();
}
$("#current_tb").val(adtbcount);
var selected_tb = $("#db"+adtbcount).val();
var d_date = $("#db"+adtbcount).attr("d_date");

 $.ajax({
     url:_url,
    type: 'POST',
    data: {acc:_acc, tb:selected_tb },
 dataType: 'text',
 async : true,
    success: function(data){
    $("#res").html(data);
     console.log(data);
      $("#tb1").val(d_date);
             $("#ld").hide();
     }
 });
});
$("#next").hide();
$("#next").off('click').click( function(){
    
  $("#ld").show();
      $("#res").empty();
    var last_tb = $("#last_tb").val();
var adtbcount = parseInt($("#current_tb").val())+1;
if(adtbcount >= last_tb ){
    $("#next").hide();
}
if(adtbcount > 1 ){
   $("#prev").show();
}
$("#current_tb").val(adtbcount);
var selected_tb = $("#db"+adtbcount).val();
var d_date = $("#db"+adtbcount).attr("d_date");
var d_date = $("#db"+adtbcount).attr("d_date");

$.ajax({
     url: _url,
    type: 'POST',
    data: {acc:_acc, tb:selected_tb },
 dataType: 'text',
 async : true,
    success: function(data){
    $("#res").html(data);
     console.log(data);
      $("#tb1").val(d_date);
             $("#ld").hide();
     }
 });
});

$("#clickmark").off('click').click( function(){
window.location.href = 'backup.php?id='+$("#b_id").val()+'&type=mark';

    });


$("#clickunpaid").off('click').click( function(){
window.location.href = 'backup.php?id='+$("#b_id").val()+'&type=unpaid';

    });

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
</script>
