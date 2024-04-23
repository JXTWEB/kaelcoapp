
<?php
include 'headerdark.php';

$mode = $_SESSION['mode'];

if($mode == "restrict"){
        echo ' <script> 
    window.location.href = "http://kaelco.000.pe/Upgrade/dist/dashboard.php"; </script>';

}
?>


<input type="hidden" id="telini" value="<?php echo$user; ?>">
    
<input type="hidden" id="telname" value="<?php echo$username ; ?>">
   

     
  <div class="row " style="paddingt:2px; margin:0;" >
            <div class="card col-sm-4 " style="padding:0;margin:0;border-radius:0; border:0;" >



  <div class="card-header"  style="background:background: rgb(33,33,45);background: linear-gradient(0deg, rgba(33,33,45,1) 4%, rgba(57,124,120,1) 51%, rgba(33,33,45,1) 100%);color:#acf4e0;border-radius:0;">

<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
  <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018"/>
  <path d="M13 6.5a6.47 6.47 0 0 1-1.258 3.844q.06.044.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11"/>
</svg> <span style="position:absolute;left:45; text-shadow: 3px 3px 5px rgba(20, 0, 0, 1);  font-family: Copperplate, Papyrus, fantasy;"><b>Search Form</b></span> 


  </div>
  <div class="card-body"  style=" background-color:#21212d;">
  <fieldset class="row ">
                 
                  <div class="col-6 p-1">
                    <div class="form-check ">
                      <input class="form-check-input" style="background-color:#72998e;color:black;"  type="radio" name="gridRadios" id="gridRadios1" value="account" checked>
                      <label class="form-check-label" style="color:#acf4e0;" for="gridRadios1">
               Account No.
                      </label>
                    </div>
                  

                  </div>
         <div class="col-6 p-1">
                    <div class="form-check">
                      <input class="form-check-input" style="background-color:#72998e;" type="radio" name="gridRadios" id="gridRadios2" value="name">
                      <label class="form-check-label" style="font-size:15px;color:#acf4e0;" for="gridRadios2">
               Name/Meter No.
                      </label>
                    </div>
        
                </fieldset>
 
<div class="input-group m-1 mb-3 p-1" style="background:background: rgb(33,33,45);background: linear-gradient(0deg, rgba(33,33,45,1) 4%, rgba(57,124,120,1) 51%, rgba(33,33,45,1) 100%);color:#acf4e0;border-radius:0;color:white; border:2px solid #86c5d1;border-radius:5px;" >

  <input type="text" class="form-control"id="search" style="border:none; background-color:#72998e;color:#e3fff5;text-shadow: -6px 1px 6px rgba(0,0,0,0.6);" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" tabindex="1"> <i class="material-icons" style="font-size:36px">search</i>
</div>




  </div>

  <div class="card-header"  style="background:background: rgb(33,33,45);background: linear-gradient(0deg, rgba(33,33,45,1) 4%, rgba(57,124,120,1) 51%, rgba(33,33,45,1) 100%);color:#acf4e0;border-radius:0;">

<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
  <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5"/>
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
</svg> <span style="position:absolute;left:45; text-shadow: 3px 3px 5px rgba(20, 0, 0, 1);  font-family: Copperplate, Papyrus, fantasy;">Account Information</b></span> 


  </div>
          <div class="card-body " style="padding:0;">  <div id="resname"></div> </div>





  <div class="card-header"  style="background:background: rgb(33,33,45);background: linear-gradient(0deg, rgba(33,33,45,1) 4%, rgba(57,124,120,1) 51%, rgba(33,33,45,1) 100%);color:#acf4e0;border-radius:0;">

<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16">
  <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z"/>
  <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5"/>
</svg> <span style="position:absolute;left:45; text-shadow: 3px 3px 5px rgba(20, 0, 0, 1);  font-family: Copperplate, Papyrus, fantasy;">Unpaid Bills</b></span> 


  </div>
          <div class="card-body " style="padding:0;">  <div id="unpaidarea" class="accordion-collapse " data-coreui-parent="#accordionFlushExample"></div> </div>








</div><div class="card col-sm-8 pl-2 " style="padding:0;margin:0;border-radius:0;border:0;">

  <div class="card-header"  style="background:background: rgb(33,33,45);background: linear-gradient(0deg, rgba(33,33,45,1) 4%, rgba(57,124,120,1) 51%, rgba(33,33,45,1) 100%);color:#acf4e0;border-radius:0;">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
  <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7 7 0 0 0-.985-.299l.219-.976q.576.129 1.126.342zm1.37.71a7 7 0 0 0-.439-.27l.493-.87a8 8 0 0 1 .979.654l-.615.789a7 7 0 0 0-.418-.302zm1.834 1.79a7 7 0 0 0-.653-.796l.724-.69q.406.429.747.91zm.744 1.352a7 7 0 0 0-.214-.468l.893-.45a8 8 0 0 1 .45 1.088l-.95.313a7 7 0 0 0-.179-.483m.53 2.507a7 7 0 0 0-.1-1.025l.985-.17q.1.58.116 1.17zm-.131 1.538q.05-.254.081-.51l.993.123a8 8 0 0 1-.23 1.155l-.964-.267q.069-.247.12-.501m-.952 2.379q.276-.436.486-.908l.914.405q-.24.54-.555 1.038zm-.964 1.205q.183-.183.35-.378l.758.653a8 8 0 0 1-.401.432z"/>
  <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z"/>
  <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5"/>
</svg> <span style="position:absolute;left:45; text-shadow: 3px 3px 5px rgba(20, 0, 0, 1);  font-family: Copperplate, Papyrus, fantasy;">Account Information</b></span> 


  </div>
  <div class="card-body p-1 accordion-collapse " style="background-color:#72998e;"   id="ledgarea" data-coreui-parent="#accordionFlushExample">

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
     <a class="nav-link p-2 btn m-1"   style="float:left;background:background: rgb(33,33,45);background: linear-gradient(0deg, rgba(33,33,45,1) 4%, rgba(57,124,120,1) 51%, rgba(33,33,45,1) 100%);color:#acf4e0;border-radius:0;color:white; border:2px solid #86c5d1;border-radius:5px;" id="b_btn"> Go To Back Up<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
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
     url: 'kaelco_searchdark.php',
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
        url:'infodark.php',
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
