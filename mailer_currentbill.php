<style>

/* CSS rules are kept repetitive so that you can get CSS rules for each button easily :) */

* {
  user-select: none;
  -webkit-tap-highlight-color: transparent;
}

*:focus {
  outline: none;
}

#app-cover {
  display: table;
  width: 600px;
  margin: 80px auto;
  counter-reset: button-counter;
}


.toggle-button-cover {
  display: table-cell;
  position: relative;
  width: 350px;
  height: 140px;
  box-sizing: border-box;
}

.button-cover {
  height: 100px;
  margin: 20px;
  background-color: #fff;
  box-shadow: 0 10px 20px -8px #c5d6d6;
  border-radius: 4px;
}

.button-cover:before {
  counter-increment: button-counter;
  content: counter(button-counter);
  position: absolute;
  right: 0;
  bottom: 0;
  color: #d7e3e3;
  font-size: 12px;
  line-height: 1;
  padding: 5px;
}

.button-cover,
.knobs,
.layer {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.button {
  position: relative;
  top: 50%;
  width: 85px;
  height: 36px;
  margin: -20px auto 0 auto;
  overflow: hidden;
}

.button.r,
.button.r .layer {
  border-radius: 100px;
}

.button.b2 {
  border-radius: 2px;
}

.checkbox {
  position: relative;
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
  opacity: 0;
  cursor: pointer;
  z-index: 3;
}

.knobs {
  z-index: 2;
}

.layer {
  width: 100%;
  background-color: #ebf7fc;
  transition: 0.3s ease all;
  z-index: 1;
}


/* Button 3 */
#button-3 .knobs:before {
  content: "YES";
  position: absolute;
  top: 4px;
  left: 4px;
  width: 40px;
  height: 30px;
  color: #fff;
  font-size: 10px;
  font-weight: bold;
  text-align: center;
  line-height:1.5;
  padding: 9px 4px;
  background-color: #03a9f4;
  border-radius: 50%;
  transition: 0.3s ease all, left 0.3s cubic-bezier(0.18, 0.89, 0.35, 1.15);
}

#button-3 .checkbox:active + .knobs:before {
  width: 46px;
  border-radius: 100px;
}

#button-3 .checkbox:checked:active + .knobs:before {
  margin-left: -26px;
}

#button-3 .checkbox:checked + .knobs:before {
  content: "NO";
  left: 42px;
  background-color: #f44336;
}

#button-3 .checkbox:checked ~ .layer {
  background-color: #fcebeb;
}


.checkbox{
    padding:10px;
}

</style>
<div class="row">
<div class="col-md-12 mb-2 mt-4">


<div class="btn-group">
<a href="http://kaelco.000.pe/Upgrade/dist/mailer.php?tran=currentbill" class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-attachment text-primary mr-1"></i>CURRENT BILL </a>
<a href="http://kaelco.000.pe/Upgrade/dist/mailer.php?tran=controls" class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-attachment text-primary mr-1"></i>MANAGE SENDING EMAILS </a>

</div>


</div>
</div>


<?php
 //$trans   = $_GET['tran'];
echo$trans;
?>

<?php
if ($trans == "currentbill"){
date_default_timezone_set('Asia/Manila');
$year =date("Y");
        $month = mysqli_query($db,"SELECT MONTH  FROM `current_bill`    ");
while ($rmonth = mysqli_fetch_array($month))
{
    $monthbill = $rmonth['MONTH'];
       
}

?>

<h1 class="pt-4" ><u> <?php 

    echo'<span class="" style="border-radius:10px;"><b>'. date('F-Y', strtotime($year.'-'.str_pad($monthbill, 2, "0", STR_PAD_LEFT).'-01')).' </b>';
?><svg xmlns="http://www.w3.org/2000/svg" data-bs-toggle="modal" data-bs-target="#exampleModal" width="28" height="28" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" >
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>
</span> </u>
</h1>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BILL MONTH</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php  echo date('F-Y',   strtotime($year.'-'.str_pad( $monthbill+1, 2, "0", STR_PAD_LEFT).'-01'));
       
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="billmonthbtn">UPDATE NEXT BILL</button>
      </div>
    </div>
  </div>
</div>
<div id="res1"> </div>
<div class="sender-details">

<div class="details">





</div>
</div>

<?php

}else{
?>

<div id="app-cover">

 
    <div class="toggle-button-cover">
      <div class="button-cover">
        <div class="button r" id="button-3">
          <input type="checkbox" class="checkbox" />
          <div class="knobs"></div>
          <div class="layer"></div>
        </div>
      </div>
    </div>
  </div>
  
</div>


<?php
}
?>
<script>

  $(document).ready(function()
	

{


$("#billmonthbtn").off('click').click( function(){
  


var _ptype="";
$("#res1").empty();
 $.ajax({
        url:'update_current_bill.php',
        type: 'POST',
        async : true,
        data: {ptype:_ptype},
        dataType: 'text',
        success: function(data){
       $("#res1").html(data);
          console.log(data);
           
        }
      });


  });
    });
</script>