<?php
include 'header.php';

?>




<div class="card" style="border-radius:0;">
  <div class="card-header" data-coreui-toggle="collapse" data-coreui-target="#actarea" aria-expanded="false" aria-controls="flush-collapseOne" >
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
  <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
</svg> <span style="position:absolute;left:45;color:#157f91;"><b>DAILY USER ACTIVITY</b></span> 


  </div>
  <div class="card-body p-1 accordion-collapse "  id="actarea"   data-coreui-parent="#accordionFlushExample">

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

        $("#home").off('click').click( function(){

window.location.href = 'dashboard.php';
});

     $("#actarea").empty();
 setInterval(function () {
          $('#audioarea').empty();   
         
          $.ajax({
        url:'useractivity_func.php',
        type: 'POST',
        async : true,
        data: {acc:"ac"},
        dataType: 'text',
        success: function(data){
       $("#actarea").html(data);
       
          console.log(data);
           
        }
      });
         
         
  } , 5000);

  });
    </script>

  </body>
</html>


