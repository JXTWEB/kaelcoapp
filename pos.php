<?php

error_reporting(0);
session_start();

$user = $_SESSION['activeuser'];
$start = $_SESSION['start'];
if(!$user){
    echo ' <script>
    window.location.href = "http://kaelco.000.pe/Upgrade/dist/login.php";	</script>';
}
$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){

}

//header('Location: http://detectmobilebrowser.com/mobile');
?>


<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
 <title> Jeff-xt-web </title>
  <link rel="icon" type="image/x-icon" href="Kaelco Logo.jpg">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>


        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

        <script src="src/images-grid.js"></script>
        <link rel="stylesheet" href="src/images-grid.css">

    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
   

   <style>
#mbar {
    display:none;
}
    #kal{
  
        color:white;
}

#kal1{
  color:#138084;
}
#pdate2{display:none;}
@media only screen and (max-width: 600px) {
  body {
.header-toggler, .header-brand, #user, #set {

display:none;
    
}
iframe {
    height:auto;
}
#mbar{
    display:Block;
}
#kal{
    font-size:15px;
        color:#138084;
        background-color:white;
}

#kal1{
    font-size:12px;
        color:white;
}
.header{
    background-color:#157f91;
    padding:0;
    margin:none;
    border:none;

}
.dimg{
    padding:10px;
}

#pdate2{display:block;}
#pdate1{display:none;}

  }

  
}
@media only screen and (max-width: 438px) {
     body {

    //display:none;
    #kal{
    font-size:10px;
        color:white;
}

#kal1{
    font-size:9px;
        color:white;
}


}
}


   </style>
  </head>
  <body>

     <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
  <div class="row " >

<?php

include 'con.php';
$montset=     date("F");
    $month=     date("m");
    $year =  date("Y");

  ?>
            <div class="col-6 " >
<img src="profile/20211221-Ivana-Alawi.jpg" style="border:5px solid black"   alt="..." class="img-thumbnail">
  </div>
    <div class="col-6 "style="padding:0;  float:left;">
<p style="font-size:12px;"> Total Collection For the Month Of <?php echo $montset; ?>
 <br>
<span class="badge  bg-warning ms-auto" style="font-size:13px;color:black;" >
<?php


   
$totalcollstr = mysqli_query($db,"SELECT SUM(COLLAMT) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$month' AND YEAR(COLLDATE) = '$year' AND TELLCODE ='$user'  ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$mtcoll = $tcoll['totalcoll'];
}
echo number_format($mtcoll/100, 2,'.',',');
 ?>
</span><br>

</p>

</div>
  <div class="col-5 m-2 ">
  <p style="font-size:14px;"> 
   <span class="badge  bg-secondary ms-auto" style="font-size:10px;margin-bottom:-2px;padding:2px;padding-left:5px;padding-right:5px;color:black;margin-bottom:4px;"  >Active User </span>
 
        <br><span style="font-size:11px;line-height:11px;">
                     <?php
       
$result = mysqli_query($db,"SELECT * FROM ftellers WHERE TELINI = '$user' ");
while ($tel = mysqli_fetch_array($result))
{

$username = $tel['TELLNAME'];

}


echo$username;

           ?>  </span>

<br>
<span class="badge  bg-secondary ms-auto" style="font-size:10px;margin-bottom:-2px;padding:2px;padding-left:5px;padding-right:5px;color:black; margin-bottom:4px;margin-top:5px;">
Collection Area
</span>
<br><span style="font-size:11px;line-height:11px;">
<?php




   
$totalcollstr = mysqli_query($db,"SELECT * FROM list_of_agent_for_import WHERE INI = '$user'  ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$mtcoll = $tcoll['ADDRESS'];
}
echo $mtcoll;
 ?>
</span>
</p>
</div>

 <div class="col-5 m-2 ">
 <span class="badge  bg-secondary ms-auto" style="font-size:10px;margin-bottom:-2px;padding:2px;padding-left:5px;padding-right:5px;color:black;"  >Surcharge Collected</span>
 
        <br>
               <?php


   
$totalcollstr = mysqli_query($db,"SELECT SUM(COLL03) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$month' AND YEAR(COLLDATE) = '$year' AND TELLCODE ='$user'  ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$mtcoll = $tcoll['totalcoll'];
}
echo number_format($mtcoll/100, 2,'.',',');
 ?>
<br>
<span class="badge  bg-secondary ms-auto" style="font-size:10px;margin-bottom:-2px;padding:2px;padding-left:5px;padding-right:5px;color:black;"  >Arrears Collected</span>
 
        <br>
               <?php


   
$totalcollstr = mysqli_query($db,"SELECT SUM(COLL02) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$month' AND YEAR(COLLDATE) = '$year' AND TELLCODE ='$user'  ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$mtcoll = $tcoll['totalcoll'];
}
echo number_format($mtcoll/100, 2,'.',',');
 ?>
<br>
 </div>


</div>
  

  
   
  
     
        <p class="nav-title p-2 bg-dark">LIST OF ACTIVE USER</p>

   <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item">
      

           
     
            

    
<div class="table-responsive nav-item" >
                    <table class="table  mb-0">
                      <thead class="table-light fw-semibold">

 

                  
                      <tbody>
                  <?php 
           date_default_timezone_set('Asia/Manila');
if(strtotime(date("M d, Y h:i:sa"))>=strtotime($start)){

 $del = "DELETE FROM online WHERE ini='$user'";

if ($db->query($del) === TRUE) {
//echo$user;
       // echo '<script>
  //  window.location.href = "http://kaelco.000.pe/Upgrade/dist/login.php";	</script>';
}
}



if(!$user){

}else{

$querycheck = "SELECT * FROM online WHERE ini = '$user'";

$resultcheck = $db->query($querycheck);

if ($resultcheck) {
    if (mysqli_num_rows($resultcheck) > 0) {
    
    } else {
          $qry = "INSERT INTO `online` (`ini`) VALUES ('$user') ";

    if($db->query($qry) === TRUE){
    
}
    }
} 

 

}





$resultonline = mysqli_query($db,"SELECT * FROM online  ");
while ($telonline = mysqli_fetch_array($resultonline))
{

$inionline= $telonline['ini'];

$resultname = mysqli_query($db,"SELECT * FROM ftellers WHERE TELINI = '$inionline' ");
while ($telname = mysqli_fetch_array($resultname))
{

$onlinename = $telname['TELLNAME'];

}
if($inionline == $user){

}else{


}




                  ?>
                        <tr class="align-middle " style="color:#ebedef; border-bottom:1px solid #4f5d73;">
                          <td class="text-center"  style="color:#ebedef;">  <span><b> <?php echo$list; ?> </b></span>
                            <div class="avatar "><img class="avatar-img" src="Kaelco Logo.jpg" alt="user@email.com"></div>
                          
                          </td>
                          <td  style="color:#ebedef;width:50%;">
                          
                            <div class="small text-medium " style="font-size:12px;"><?php echo$onlinename; ?> </div>
                          </td>
                     
                          <td style ="width:10%;">
                   

                                
                               <button type="button" class="btn btn-success position-relative m-1 " style="font-size:12px;color:white; padding:1px; padding-bottom:1px; padding-top:1px; padding-left:4px;padding-right:4px;">
online

</button>
                            
                          </td>
                    
                      
                        </tr>


                        <?php 

}


                        ?>
                        </span>


                    
                      </tbody>
                    </table>

                    
                  </div>

</ul>




            </ul>

     


      </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky  p-1" style="z-index:1;  ">

        <div class="container-fluid">
       


<ul class="header-nav ">
   <li class="nav-item">
   
   <button style="border:none;background:none;" class="p-2" id="mbar" type="button"  onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()" >
         
        
    
<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
</svg>  </button>
    </li>
            <li class="nav-item">
            
            <a class="nav-link" style="margin:0;padding-right:0;" >  <div class="avatar avatar-md"><img class="avatar-img"  style="box-shadow: inset 0.2em 0.2em 0.2em 0 rgba(255,255,255,0.5), inset -0.2em -0.2em 0.2em 0 rgba(0,0,0,0.5);" src="Kaelco Logo.jpg" alt="user@email.com"></div></a></li>
             
            <li class="nav-item"><a class="nav-link" ><span class="badge id="kal"  ms-auto p-1" style="background-color:#138084;color:white;" ><b>Kalinga-Apayao Electric Cooperative, Inc.</span><br><span class="p-1" id="kal1" >Callagdao, Bulanao, Tabuk City, Kalinga </b></span>
         
            </a>
            
            </li>

   <!--
                   <li class="nav-item" id="user"><a class="nav-link">Users</a></li>
            <li class="nav-item" id="set"><a class="nav-link">Settings</a></li>-->
          </ul>
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
 
          </button><a class="header-brand d-md-none">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href=""></use>
            </svg></a>

          <ul class="header-nav ms-3">
      
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
               <!--
                <div class="avatar avatar-md"><img class="avatar-img" src="Kaelco Logo.jpg" alt="user@email.com"></div> Vendors styles-->
                
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Account</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                  </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                  </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                  </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Settings</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                  </svg> Profile</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                  </svg> Settings</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
        
      </header>
  
            




<div class="card" style="border-radius:0;">
  <div class="card-header" data-coreui-toggle="collapse" data-coreui-target="#actarea" aria-expanded="false" aria-controls="flush-collapseOne" >
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
  <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
</svg> <span style="position:absolute;left:45;color:#157f91;"><b>DISCONNECTION MONITORING</b></span> 




<input type="hidden" id ="user" value="<?php echo $user; ?>">

<input type="hidden" id ="name" value="<?php echo $username; ?>">






          <div class="row">








          <div class="col-sm-5 mb-3 mt-3">
      


           <div class="alert alert-warning" role="alert">Full Paid lang t Mabalin Nga ikkaten T Disconnection Order !</div>
            <input type="number"  maxlength ="12"  class=" form-control" readonly="true" placeholder="Enter Account No." id="acc">
<input type="number" maxlength ="12" placeholder="Enter OR No."   class="form-control mt-2 mb-2" id="or">
   <span id="res"></span>
   
          <button   id="discobtn" style="  background-color: #157f91;color:white;float:right;margin:0;border:none;"  class="btn   btn-secondary  w-25 mt-2">ADD</button>
</div>


    <!--
class="easy-put easy-get form-control"
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
        crossorigin="anonymous">
</script>
<script src="js_num/easy-numpad.js"></script>
<link rel="stylesheet" href="css_num/easy-numpad.css">


-->




     

          </div>
   

       


 <div class="col-sm-5">
 
<table class="table table-striped" >


     <thead>
                  <tr>
			
              
              
                    
                    <th>Name</th>
                    <th >Or No.</th>
                      <th >Action</th>
                  </tr>
                </thead>
        
        
	
			         <tbody id="res1">
		<?php
 date_default_timezone_set('Asia/Manila');
$dateinset =date("Y-m-d");

include 'con.php';


$resultmonth = mysqli_query($db,"SELECT * FROM 	monitoring WHERE ini = '$user' AND  DATE = '$dateinset'   ");
while ($rowmonth = mysqli_fetch_array($resultmonth))
{
    $acc =$rowmonth['NEWACTS'];
  // $info = mysqli_query($db,"SELECT CNAME FROM  fbilmast  WHERE NEWACTS = '$acc'  LIMIT 1");
//while ($inforow = mysqli_fetch_array($info))
//{
    
//$cname = $inforow['CNAME'];

//}
echo"

<tr>



<td >".$rowmonth['NEWACTS']."</td>
<td  >".$rowmonth['OR_NO']."</td>

<td  > <button    style='color:white; float:right;' value='".$rowmonth['NEWACTS']."' class='remove btn   btn-danger  '><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
  <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>
  <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
</svg> </button>

     </td>
</tr>
";

}



?>
                </tbody>

</table>













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
$("#or").trigger("focus");

    $("#discobtn").off('click').click( function(){
var _ini = $("#user").val();
var _aname = $("#name").val();

var _or = $("#or").val();
var _acc = $("#acc").val();

if(!_or && !_acc){
    alert("You Have to Fill Up All Fields");
}else{
   $("#res").empty();
 $.ajax({
        url:'monitoring_func.php',
        type: 'POST',
        async : true,
        data: {acc:_acc, ini:_ini, aname:_aname, or:_or, acc:_acc},
        dataType: 'text',
        success: function(data){
       $("#res").html(data);
          console.log(data);
           
        }
      });




}

});


 $(".remove").off('click').click( function(){

var _acc = $(this).val();



   $("#res").empty();
       $.ajax({
        url:'monitoring_remove.php',
        type: 'POST',
        async : true,
        data: {acc:_acc},
        dataType: 'text',
        success: function(data){
       $("#res").html(data);
          console.log(data);
           
        }
      });

});
});
</script>