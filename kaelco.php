
<?php
include 'header.php';



$mode = $_SESSION['mode'];

if($mode == "restrict"){
        echo ' <script> 
    window.location.href = "http://kaelco.000.pe/Upgrade/dist/dashboard.php"; </script>';

}

?>
      

<input type="hidden" id="telini" value="<?php echo$user; ?>">
    
<input type="hidden" id="telname" value="<?php echo$username ; ?>">
   

     
  <div class="row " style="paddingt:2px; margin:0;">
            <div class="card col-sm-4 " style="padding:0;margin:0;border-radius:0; border:0;">



  <div class="card-header">

<span style ="position:relative;color:#157f91;><i  style="position:absolute;" class="material-icons" >account_balance_wallet</i></span> <span style="position:absolute;left:45;color:#157f91;"><b>SEARCH FORM</b></span> 


  </div>
  <div class="card-body">
  <fieldset class="row ">
                 
                  <div class="col-6 p-1">
                    <div class="form-check ">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="account" checked>
                      <label class="form-check-label" for="gridRadios1">
               Account No.
                      </label>
                    </div>
                  

                  </div>
         <div class="col-6 p-1">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="name">
                      <label class="form-check-label" style="font-size:15px;" for="gridRadios2">
               Name/Meter No.
                      </label>
                    </div>
        
                </fieldset>
 
<div class="input-group m-1 mb-3 p-1" style="background-color:#ebedef;border:none;" >

  <input type="text" class="form-control"id="search" style="border:none; background-color:#e7ebf1f2;" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" tabindex="1"> <i class="material-icons" style="font-size:36px">search</i>
</div>




  </div>


 <div class="card-header">
<span style ="position:relative;color:#157f91;><i  style="position:absolute;" class="material-icons" >account_box</i></span> <span style="position:absolute;left:45;color:#157f91;"><b>ACCOUNT INFORMATION</b></span> 


  </div>
          <div class="card-body " style="padding:0;">  <div id="resname"></div> </div>





 <div class="card-header " data-coreui-toggle="collapse" data-coreui-target="#unpaidarea" aria-expanded="false" aria-controls="flush-collapseOne">
<span style ="position:relative;color:#157f91;><i  style="position:absolute;" class="material-icons" >account_box</i></span> <span style="position:absolute;left:45;color:#157f91;"><b>UNPAID BILLS </b>(Click Here)</span> 


  </div>
          <div class="card-body " style="padding:0;">  <div id="unpaidarea" class="accordion-collapse " data-coreui-parent="#accordionFlushExample"></div> </div>








</div><div class="card col-sm-8 pl-2 " style="padding:0;margin:0;border-radius:0;border:0;">


  <div class="card-header" data-coreui-toggle="collapse" data-coreui-target="#ledgarea" aria-expanded="false" aria-controls="flush-collapseOne" >
<span style ="position:relative;color:#157f91;><i  style="position:absolute;" class="material-icons" >history</i></span> <span style="position:absolute;left:45;color:#157f91;"><b>LEDGER</b>(Click Here)</span> 


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
     <a class="nav-link p-2 btn m-1"   style="float:left;Background-color:#53acbd;color:white;" id="b_btn"> Go To Back Up<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
</svg></b> </a>
<br>
			<div id="ld" style="float:right;">
  <span class="spinner-border spinner-border-sm"  role="status" aria-hidden="true"></span>
  Loading...


</div>
 


</table>

</div>




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

    <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/main.js"></script>
    <script>
    </script>

  </body>
</html>


<script> 


  $(document).ready(function()
	

{


 var _ini  =  $("#telini").val();
 var _name  =  $("#telname").val();

	 $("#search").attr('maxlength','10');
  $("#daroute").hide();
 $("#search").attr('type', 'number');
  $("#ld").hide();

$('input[name="gridRadios"]').off('click').click( function(event){
$('#ld').hide();
 $("#res").empty();
 $("#resname").empty();
 $("#search").val("");
 
       $("#unpaidarea").empty();
 	var search_byt = $('input[name="gridRadios"]:checked').val();
if(search_byt == "name"){
 $("#search").attr('type', 'text');
}else{
 $("#search").attr('type', 'number');
}
      
});

$(document).keyup(function(e) {
     if (e.key === "Escape") { // escape key maps to keycode `27`
$("#search").val("");
 $('#audioarea').remove();   
    }
});

$("#search").keyup(function(){


 $("#ld").show();

    	var _search_by = $('input[name="gridRadios"]:checked').val();
 $("#res").empty();
 $("#resname").empty();
    var _acc = $(this).val(); 



    if(_search_by == "name"){

   $("#search").attr('maxlength','20');
 $.ajax({
        url:'info.php',
        type: 'POST',
        async : true,
        data: {search_by:_search_by, acc:_acc},
        dataType: 'text',
        success: function(data){
       $("#resname").html(data);
          console.log(data);
           
        }
      });

}else{
 
	 $("#search").attr('maxlength','10');

if(this.value.length == 10){

 $('#audioarea').empty();   
   
 $.ajax({
     url: 'kaelco_search.php',
    type: 'POST',
    data: {acc:_acc, ini:_ini, name:_name },
 dataType: 'text',
 async : true,
    success: function(data){
    $("#res").html(data);
     console.log(data);
      
     }
 });

 $("#resname").empty();
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





       $("#unpaidarea").empty();
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


}
}
});

$("#home").off('click').click( function(){

window.location.href = 'dashboard.php';
});

$("#b_btn").off('click').click( function(){

window.location.href = 'backup.php?id='+$("#b_id").val()+'&type=unmark';
});
$("#logout").off('click').click( function(){

window.location.href = 'logout.php';
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
