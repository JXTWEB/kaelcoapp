<?php
include 'header.php';

?>




<div class="card" style="border-radius:0;">
  <div class="card-header" data-coreui-toggle="collapse" data-coreui-target="#actarea" aria-expanded="false" aria-controls="flush-collapseOne" >
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
  <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
</svg> <span style="position:absolute;left:45;color:#157f91;"><b>REMITTANCE MONITORING</b></span> 


  </div>
  <div class="card-body p-1 accordion-collapse "  id="actarea"   data-coreui-parent="#accordionFlushExample">

  <table class="table  mb-0">
                      <thead class="table-light fw-semibold">

 

                  
                      <tbody>
                  <?php 
 
   $month=     date("m");
    $year =  date("Y");

$resultonline = mysqli_query($db,"SELECT * FROM list_of_agent_for_import  ");
while ($telonline = mysqli_fetch_array($resultonline))
{

$inionline= $telonline['INI'];

$resultname = mysqli_query($db,"SELECT * FROM ftellers WHERE TELINI = '$inionline' ");
while ($telname = mysqli_fetch_array($resultname))
{

$onlinename = $telname['TELLNAME'];

}




            $pp1 = "profile/20211221-Ivana-Alawi.jpg";
            $result = mysqli_query($db,"SELECT * FROM profile WHERE ini = '$inionline' ");
while ($pp_row = mysqli_fetch_array($result))
{

$pp1 = $pp_row['url'];
}



                  ?>
              
                        <tr class="align-middle " style="">
                          <td class="text-center"   style="color:#ebedef;width:5%;">  <span><b> <?php echo$list; ?> </b></span>
                            <div class="avatar ">     <a href="timeline.php?huser='<?php echo$inionline; ?>'"><img class="img" src="<?php echo$pp1;  ?>" alt="user@email.com"  style="border-radius:50%;"  height="38" width="40" ></a></div>
                          
                          </td>
                          <td  style="width:50%;">
                          
                            <div class="small text-medium " ><b><?php echo$onlinename; ?> </b> <br>
                           <span >Remittance For the Month OF <?php echo $montset; ?></span> 
     
                  
                          </td>
              
                          <td style ="width:50%;">
                        
<?php 



   $tremit =0;
   $dateremit = "";
$totalcollstr = mysqli_query($db,"SELECT * FROM `ftotcoll`  WHERE  TELLCODE = '$inionline'  AND MONTH(COLLDATE) = '$month' AND YEAR(COLLDATE) = '$year' ORDER BY COLLDATE DESC  ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$mtcoll = $tcoll['COLLAMT'];
$tremit++;
$dateremit = date("F d, Y ", strtotime($tcoll['COLLDATE']));

}

?>

                          <span class="badge   p-2 text-wrap " style="color:black; font-size:12px;background-color:<?php if($tremit == 0){echo'#ebbd5f';}else{echo'#b4d2d8';} ?>; text-align:left;display: block;" > <?php if($tremit ==0){echo"Tawagan U ta Umay Agremit hehe"; }else{ ?> Remit Collection for  <?php

echo$tremit." times <br>";
echo "Date OF Last Remittance (". $dateremit.")";

                          }

?></span>
                          </div>
                        

                                
                              <!--    <button type="button" class="btn btn-success position-relative m-1 " style="font-size:12px;color:white; padding:1px; padding-bottom:1px; padding-top:1px; padding-left:4px;padding-right:4px;"> 
online

</button>-->
                            
                          </td>
                    
                      
                        </tr>


                        <?php 

}


                        ?>
                        </span>


                    
                      </tbody>
                    </table>


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

    </script>

  </body>
</html>


