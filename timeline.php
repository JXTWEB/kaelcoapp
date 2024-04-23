<?php
include 'header.php';
//echo"<script> alert('new feature (->change profile<-)  ada isuna ayan  3 bar icon left side naka hide suna nu han nga naka update jy google chrome you ! paki update yu lattan ijy playstore thanks !')</script>";
?>
<?php if($user =="JCB"){}else{ ?>
   <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

      <div class="body flex-grow-1 px-2">
       <div class="alert  alert-dismissible fade show" role="alert">
<iframe src="https://www.facebook.com/plugins/video.php?height=322&href=https%3A%2F%2Fweb.facebook.com%2Fjeff000.me%2Fvideos%2F328765806323941%2F&show_text=false&width=560&t=0" width="300" height="322" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
  <a ="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </a>


</div> -->
<?php } ?>
  <div class="row m-2">
  
            <div class="col-sm-6 col-lg-4 card p-1" >






<?php
$huser =  $_GET['huser'];

include 'con.php';
$montset=     date("F");
    $month=     date("m");
    $year =  date("Y");

  ?>
     
            <?php $pp = "profile/20211221-Ivana-Alawi.jpg";
            
            $result = mysqli_query($db,"SELECT * FROM profile WHERE ini = $huser ");
while ($pp_row = mysqli_fetch_array($result))
{

$pp = $pp_row['url'];
} ?>
  <h5 class="card-header " style="background-color:white;margin:0;">
                    <?php
       
$result = mysqli_query($db,"SELECT * FROM ftellers WHERE TELINI = $huser ");
while ($tel = mysqli_fetch_array($result))
{

$username = $tel['TELLNAME'];

}


echo$username;

           ?> 
           </h5>
<img src="<?php echo$pp; ?>" style="border:none; width:100%;" height="300"    alt="..." class="img">





   


 



<!-- Modal -->
 <div class="alert alert-warning" role="alert  style="border-radius:none;">

                      
    <p> Total Collection For the Month Of <?php echo $montset; ?> 
    <span class="badge  ms-auto w-100 p-2" style="color:black; margin:0; font-size:15px; text-align:left; background-color:#eedbb5;" >
<?php


   
$totalcollstr = mysqli_query($db,"SELECT SUM(COLLAMT) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$month' AND YEAR(COLLDATE) = '$year' AND TELLCODE =$huser  ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$mtcoll = $tcoll['totalcoll'];
}
echo number_format($mtcoll/100, 2,'.',',');
 ?>
</span>
Collection Area
 <span class="badge  ms-auto w-100 p-2" style="color:black; margin:0; font-size:15px; text-align:left; background-color:#eedbb5;" >

<?php




   
$totalcollstr = mysqli_query($db,"SELECT * FROM list_of_agent_for_import WHERE INI = $huser  ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$mtcoll = $tcoll['ADDRESS'];
}
echo $mtcoll;
 ?>
 </span>
Surcharge Collected
 <span class="badge  ms-auto w-100 p-2" style="color:black; margin:0; font-size:15px; text-align:left; background-color:#eedbb5;" >
  <?php


   
$totalcollstr = mysqli_query($db,"SELECT SUM(COLL03) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$month' AND YEAR(COLLDATE) = '$year' AND TELLCODE =$huser  ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$mtcoll = $tcoll['totalcoll'];
}
echo number_format($mtcoll/100, 2,'.',',');
 ?>
</span>

Arrears Collected
 <span class="badge  ms-auto w-100 p-2" style="color:black; margin:0; font-size:15px; text-align:left; background-color:#eedbb5;" >
<?php


   
$totalcollstr = mysqli_query($db,"SELECT SUM(COLL02) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$month' AND YEAR(COLLDATE) = '$year' AND TELLCODE =$huser  ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$mtcoll = $tcoll['totalcoll'];
}
echo number_format($mtcoll/100, 2,'.',',');
 ?>
 </span>
    </p>








</div>






</div><div class="col-sm-6 col-lg-8 card">

<!-- Modal -->  <h5 class="card-header " style="background-color:white;margin:0;"><b>COLLECTION HISTORY </b><h5>
 <div class="alert overflow-auto"   style="border-radius:none;height:200px;">

     <table class="table table-striped" border="0"> 
                   
                  
                        
<?php


   
$totalcollstr = mysqli_query($db,"SELECT * FROM `ftotcoll`  WHERE  TELLCODE =$huser ORDER BY COLLDATE DESC  ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$mtcoll = $tcoll['COLLAMT'];
echo'   <tr">
<td style="border:none;width:20%">'.date("F d, Y ", strtotime($tcoll['COLLDATE'])).'</td> 
<td style="border:none;width:20%"><b>'.number_format($mtcoll/100, 2,'.',',').'</b></td> 


</tr>
 ';

}

 ?>


</table>






</div>
  <h5 class="card-header " style="background-color:white;margin:0;"><b>COLLECTION CHART </b><h5>


  <div class="card-body p-1 accordion-collapse "   id="ledgarea" data-coreui-parent="#accordionFlushExample">

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<canvas id="myChart" style="width:100%;max-width:100%; fonts-size:8px;"></canvas>

<script>


const d = new Date();
let year = d.getFullYear();
const xValues = ["","Jan "+year, "Feb "+year, "Mar "+year, "Apr "+year, "May "+year, "Jun "+year, "Jul "+year,"Aug "+year, "Sep "+year, "Oct "+year, "Nov "+year, "Dec "+year];
const yValues = [<?php 

include 'con.php';

    $month=     date("m");
    $year =  date("Y");

   for ($x=0; $x<= 12; $x++){
$totalcollstr = mysqli_query($db,"SELECT SUM(COLLAMT) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$x' AND YEAR(COLLDATE) = '$year' AND TELLCODE =$huser");
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
<input type="hidden" id="telini" value="<?php echo$user; ?>">
<script>


  $(document).ready(function()

{



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

