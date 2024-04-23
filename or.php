<?php
include 'header.php';

?>


<style>
.spinner {
    display:none;
   width: 56px;
   height: 56px;
 
   border-radius: 50%;
   -webkit-mask: radial-gradient(farthest-side,#0000 40%,#474bff 41%);
   background: linear-gradient(0deg ,rgba(71,75,255,0.5) 50%,rgba(71,75,255,1) 0) center/4.5px 100%,
        linear-gradient(90deg,rgba(71,75,255,0.25) 50%,rgba(71,75,255,0.75) 0) center/100% 4.5px;
   background-repeat: no-repeat;
   animation: spinner-d3o0rx 1s infinite steps(12);
}

.spinner::before,
.spinner::after {
   content: "";
   grid-area: 1/1;
   border-radius: 50%;
   background: inherit;
   opacity: 0.915;
   transform: rotate(30deg);
}

.spinner::after {
   opacity: 0.83;
   transform: rotate(60deg);
}

@keyframes spinner-d3o0rx {
   100% {
      transform: rotate(1turn);
   }
}



</style>

<div class="card" style="border-radius:0;">
  <div class="card-header" data-coreui-toggle="collapse" data-coreui-target="#actarea" aria-expanded="false" aria-controls="flush-collapseOne" >
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
  <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
</svg> <span style="position:absolute;left:45;color:#157f91;"><b>SEARCH OR</b></span> 

         <div class="col-sm-5 mb-3 mt-3">
      
<input type="number" maxlength ="12" placeholder="Enter OR No."    class="form-control mt-2 mb-2" id="or">

<button type="button" id="find" style="background:#53acbd;" class="btn btn-info text-light btn-sm m-1">VERIFY OR</button>


  </div>
  <div class="card-body p-1 accordion-collapse "  id="actarea1"   data-coreui-parent="#accordionFlushExample">





</div>
<div class="spinner"></div>














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

        $("#find").off('click').click( function(){

   $("#actarea1").empty();

      $(".spinner").css("display", "block");
      
      $(".spinner").css("display", "grid");
       var _or = $('#or').val(); 
    
      $.ajax({
        url:'or_func.php',
        type: 'POST',
        async : true,
        data: {or:_or},
        dataType: 'text',
        success: function(data){
       $("#actarea1").html(data);
          console.log(data);
           
        }
      });
         
 

  });
});

  
    </script>

  </body>
</html>


