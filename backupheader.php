<?php

error_reporting(0);
session_start();

$user = $_SESSION['activeuser'];
$start = $_SESSION['start'];

if( $user == "MU1" || $user == "KG1" ){

  echo ' <script>
 window.location.href = "http://kaelco.000.pe/Upgrade/dist/login.php";	</script>';
}


//if($user == "TBG"){
  //  echo ' <script>
 //window.location.href = "https://web.facebook.com/jeff000.me";	</script>';
//}
if(!$user){

  
    echo ' <script>
    window.location.href = "http://kaelco.000.pe/Upgrade/dist/login.php";	</script>';
}

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){

}
//header('Location: http://detectmobilebrowser.com/mobile');
?>
<style>

code {
  font-family: source-code-pro, Menlo, Monaco, Consolas, "Courier New",
    monospace;
}

.nft{
  user-select:none;

 
  border: 1px solid #ffffff22;
  background-color: #282c34;
  background: linear-gradient(0deg, rgba(40,44,52,1) 0%, rgba(17,0,32,.5) 100%);
  box-shadow: 0 7px 20px 5px #00000088;
  border-radius: .7rem;

  -webkit-backdrop-filter: blur(7px);

  transition: .5s all;
  hr{
    width: 100%;
    border: none;
    border-bottom: 1px solid #88888855;
    margin-top: 0;
  }
  ins{
    text-decoration: none;
  }
  .main{
    display: flex;
    flex-direction: column;
    width: 90%;
    padding: 1rem;
    .tokenImage{
      border-radius: .5rem;
      max-width: 100%;
      height: 250px;
      object-fit: cover;
    }
    .description{
      margin: .5rem 0;
      color: #a89ec9;
    }
    .tokenInfo{
      display: flex;
      justify-content: space-between;
      align-items: center;
      .price{
        display: flex;
        align-items: center;
        color: #ee83e5;
        font-weight: 700;
        ins{
          margin-left: -.3rem;
          margin-right: .5rem;
        }
      }
      .duration{
        display: flex;
        align-items: center;
        color: #a89ec9;
        margin-right: .2rem;
        ins{
          margin: .5rem;
          margin-bottom: .4rem;
        }
      }
    }
    .creator{
      display: flex;
      align-items: center;
      margin-top: .2rem;
      margin-bottom: -.3rem;
      ins{
        color: #a89ec9;
        text-decoration: none;
      }
      .wrapper{
        display: flex;
        align-items: center;
        border: 1px solid #ffffff22;
        padding: .3rem;
        margin: 0;
        margin-right: .5rem;
        border-radius: 100%;
        box-shadow: inset 0 0 0 4px #000000aa;
        img{
          border-radius: 100%;
          border: 1px solid #ffffff22;
          width: 2rem;
          height: 2rem;
          object-fit: cover;
          margin: 0;
        }
      }
    }
  }
  ::before{
    position: fixed;
    content: "";
    box-shadow: 0 0 100px 40px #ffffff08;
    top: -10%;
    left: -100%;
    transform: rotate(-45deg);
    height: 60rem;
    transition: .7s all;
  }
  &:hover{
    border: 1px solid #ffffff44;
    box-shadow: 0 7px 50px 10px #000000aa;
    transform: scale(1.015);
    filter: brightness(1.3);
    ::before{
      filter: brightness(.5);
      top: -100%;
      left: 200%;
    }
  }
}

.bg{
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  h1{
    font-size: 20rem;
    filter: opacity(0.5);
  }
}

#body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen",
    "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue",
    sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  background-color: rgb(22, 20, 24);
  color: #eee;
  user-select: none;
}
</style>

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
 
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
   
<title> Jeff-xt-web </title>
  <link rel="icon" type="image/x-icon" href="Kaelco Logo.jpg">
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UPLOAD PROFILE </h5>
 
      </div>
      <div class="modal-body">
          <input type="file" name ="file" class="form-control mb-2"id="file"  accept="image/*" >
        
<image src ="" class="img-fluid" id="image_upload_preview" width="463" height ="300" >

<span id="profileres"> </span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="upload" class="btn btn-secondary">Save changes</button>
      </div>
    </div>
  </div>
</div>
     <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
     
   <div class="table-responsive nav-item  bg-dark" style="font-size:11px;border-bottom:2px solid #1e1d1d">
            <table class="table  mb-0" border="0"> 
                   
                  
                      <tr style="">
                      <td style ="width:40%;color:white;border:none;"> 
<center>                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-camera " viewBox="0 0 16 16">
  <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4z"/>
  <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5m0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
</svg> </center>
<button type="button" class="btn btn-secondary position-relative w-40 " data-toggle="modal" data-target="#exampleModal" style="font-size:9px;background:transparent; border:none;color:white;margin:0;"  >  <b>Change Profile </b></button></td>

                      <td style="color:white;border:none;"> 
                      
                      <center><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"   fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
</svg></center>
                      <button type="button" class="btn btn-secondary position-relative " id="home"style="font-size:9px;background:transparent; border:none;color:white;margin:0;" > <b>Home </b></button></td> 

                      <td style="color:white;border:none;"> 
                      
                      <center><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"  fill="currentColor" class="bi bi-box-arrow-right " viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
</svg></center>
                      <button type="button" class="btn btn-secondary position-relative " id="logout"style="font-size:9px;background:transparent; border:none;color:white;margin:0;" > <b>Log Out </b></button></td>                   
                     </tr>
             
             </table>

</div>
  <div class="row " >

<?php

include 'con.php';
$montset=     date("F");
    $month=     date("m");
    $year =  date("Y");

  ?>
            <div class="col-6 " >
            <?php $pp = "profile/20211221-Ivana-Alawi.jpg";
        
            $result = mysqli_query($db,"SELECT * FROM profile WHERE ini = '$user' ");
while ($pp_row = mysqli_fetch_array($result))
{

$pp = $pp_row['url'];
} ?>
<img src="<?php echo$pp; ?>" style="border:none; width:100%;" height="80"    alt="..." class="img">
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
 

</div>
  


<!-- Modal -->

    <div class="table-responsive nav-item" style="font-size:11px;">
            <table class="table  mb-0" border="0"> 
                   
                  
                      <tr style="border:none;color:white;">

<td style="border:none;">
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
</td>


<td style="border:none;">
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
 <?php


   
$totalcollstr = mysqli_query($db,"SELECT SUM(COLL02) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$month' AND YEAR(COLLDATE) = '$year' AND TELLCODE ='$user'  ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$mtcoll = $tcoll['totalcoll'];
}
echo number_format($mtcoll/100, 2,'.',',');
 ?>

 </td>

                      </tr>


            </table>


<div id="body">

 
  <div class="nft">
    <div class='main'>
      <img class='tokenImage' src="<?php echo$pp; ?>" alt="NFT" />
      <h2>Kibertopiks #4269</h2>
      <p class='description'>Our Kibertopiks will give you nothing, waste your money on us.</p>
      <div class='tokenInfo'>
        <div class="price">
          <ins>◘</ins>
          <p>0.031 ETH</p>
        </div>
        <div class="duration">
          <ins>◷</ins>
          <p>11 days left</p>
        </div>
      </div>
      <hr />
      <div class='creator'>
        asd
      </div>
    </div>
  </div>
</div>


</div>




  
     
        <p class="nav-title p-2  text-center" style="font-size:12px;background-color:#1e1d1d; margin:0;">PORTALS</p>
      
<div class="table-responsive nav-item" >
                    <table class="table  mb-0">
               

 

                  
                      <tbody>

      <tr class="align-middle " style="color:#ebedef; font-size:12px; border-bottom:1px solid #4f5d73;">
                          <td id="clickcs"  style="color:#ebedef;width:5%;"> 
COLLECTION SUMMARY
                          </td>


                          </tr>
                              <tr class="align-middle " style="color:#ebedef; font-size:12px; border-bottom:1px solid #4f5d73;">

                                                    <td id="clickact"  style="color:#ebedef;width:5%;"> 
DAILY USER ACTIVITY
                          </td> </tr>


                              <tr class="align-middle " style="color:#ebedef; font-size:12px; border-bottom:1px solid #4f5d73;">

                                                    <td  id="clickremit" style="color:#ebedef;width:5%;"> 
REMITTANCE MONITORING
                          </td> </tr>


                          <tr class="align-middle " style="color:#ebedef; font-size:12px; border-bottom:1px solid #4f5d73;">

                                                    <td id="clickdm" style="color:#ebedef;width:5%;"> 
DISCONNECTION MONITORING
                          </td> </tr>




</table>
                     </div> 
   
                  <?php 
                  function convertExponentialToDecimal($number) {

  $full_string = $number;

  $is_exponential = preg_match('/^\$?[+-]?\d+(\.\d+)?[Ee][+-]?\d+$/i', $full_string ); // check if the number is in exponential notation
  if ($is_exponential) {
    
      $decimal = sprintf("%.20f", $full_string );
      $decimal = bcmul($decimal, '1', 20);
      $decimal = rtrim($decimal, '0');
      $decimal = rtrim($decimal, '.');

  } else {
      $decimal = (float)$full_string;
  }

  return $decimal;

}


?>
        




         
     


      </div>
      <marquee style="background-color:black;color:white; font-size:13px;" ><?php

  

  $info = mysqli_query($db,"SELECT * FROM  user_activity  ORDER BY id DESC LIMIT 100 ");
while ($inforow = mysqli_fetch_array($info))
{
      $load++;

$action = $inforow['action'];
$date = $inforow['date_'];

echo $action.'- - - ';



}

?></marquee>
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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </header>


