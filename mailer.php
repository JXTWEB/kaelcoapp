<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php


 include 'con.php';
 $action  = $_GET['action'];
  $trans   = $_GET['tran'];
$ptype  = $_GET['ptype'];
$pause  = $_GET['pause'];
$key  = $_GET['key'];
$linkemail  = $_GET['email'];
$cn  = $_GET['cn'];
$cp  = $_GET['cp'];
$pname  = $_GET['pname'];
  $stat   = $_GET['stat'];
?>

<title>KAELCO SOA MAILER</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <link href="css/mailer.css" rel="stylesheet">
</head>
<body>
<link rel="stylesheet" href="//cdn.materialdesignicons.com/3.7.95/css/materialdesignicons.min.css">
<div class="container2 " style="padding:5px;">
<div class="content-wrapper ">
<div class="email-wrapper wrapper">
<div class="row align-items-stretch " style="margin:10%;margin-top:0;margin-bottom:0;">
<div class="mail-sidebar d-none d-lg-block col-md-2 pt-3 bg-white" <?php if($trans =="send_soa"){}else{echo'style="border-right:1px solid #eeeeee"';}  ?>  >
<div class="menu-bar">
<ul class="menu-items">
<li class="compose mb-1" style="position:relative;">
<img class="avatar-img"  style="box-shadow: inset 0.2em 0.2em 0.2em 0 rgba(255,255,255,0.5), inset -0.2em -0.2em 0.2em 0 rgba(0,0,0,0.5);  z-index:100; width:100px;margin:auto;" src="KaelcoLogo.jpg" alt="user@email.com"
</li>

<?php 
if(!$trans){
    $trans ="send_soa";
}
if($trans =="send_soa"){
echo'<li class="bg-light">';
}else{
    echo'<li>';
} ?>
<a href="http://kaelco.000.pe/Upgrade/dist/mailer.php?tran=send_soa"><i class="mdi mdi-upload"></i> Send SOA</a><span class="badge badge-pill badge-danger">3</span></li>
<?php 

if($trans =="send_notif"){
echo'<li class="bg-light">';
}else{
    echo'<li>';
} ?>


<a href="http://kaelco.000.pe/Upgrade/dist/mailer.php?tran=send_notif"><i class="mdi mdi-share"></i> SOA Notifier</a></li>
<?php 

if($trans =="contacts"){
echo'<li class="bg-light">';
}else{
    echo'<li>';
} ?>


<a href="http://kaelco.000.pe/Upgrade/dist/mailer.php?tran=contacts"><i class="mdi mdi-file-outline"></i>Contact's</a><span class="badge badge-pill badge-warning">4</span></li>
<?php 
if($trans =="currentbill"){
echo'<li class="bg-light">';
}else{
    echo'<li>';
} ?>


<a href="http://kaelco.000.pe/Upgrade/dist/mailer.php?tran=currentbill"><i class="mdi mdi-file-outline"></i>Update Current Bill</a><span class="badge badge-pill badge-warning">4</span></li>


<!--<li>

<a href="#"><i class="mdi mdi-delete"></i> Trash</a></li> --->
</ul>
<div class="wrapper">
<div class="online-status d-flex justify-content-between align-items-center">
<p class="chat"> Contact Information<span class="mdi mdi-card-account-mail-outline"></span></p> </div>
</div>
<ul class="profile-list">
<li class="profile-list-item h2" > <a href="#" > <span class="pro-pic" ><img src="" alt></span><div class="user" ><p class="u-name" >Contact Person</p><p class="u-designation"> <?php echo$cp;?> </p></div> </a></li>
<li class="profile-list-item"> <a href="#"> <span class="pro-pic"><img src="" alt></span><div class="user"><p class="u-name">Contact No.</p><p class="u-designation"><?php echo$cn;?></p></div> </a></li>
<li class="profile-list-item"> <a href="https://mail.google.com/mail/?view=cm&fs=1&from=kaelcofinancedepartment@gmail.com&to=<?php echo $linkemail;  ?>" > <span class="pro-pic"><img src="" alt></span><div class="user"><p class="u-name">Email</p><p class="u-designation"><?php echo $linkemail;  ?></p></div> </a></li>

</ul>
</div>
</div>
<?php if($trans =="send_soa"  ){?>
<div class="mail-list-container col-md-3 pt-4 pb-4 border-right bg-white">
<div class="border-bottom pb-4 mb-3 px-3">
<div class="form-group">
<input class="form-control w-100" type="search" placeholder="Search Preferential type/descript." id="search">
</div>
</div>
<div class="pcon overflow-auto"> 
 <?php


 date_default_timezone_set('Asia/Manila');
$year =date("Y");
$resultptype = mysqli_query($db,"SELECT * FROM `fbilpref`");
while ($ptype = mysqli_fetch_array($resultptype))
{
    if(!$ptype['PTYPE']){

    }else{
        $ptype2 = $ptype['PTYPE'];

            $info_ = mysqli_query($db,"SELECT PTYPE,DESCRIP FROM fbilpref WHERE PTYPE='$ptype2' LIMIT 1 ");
while ($inforow_ = mysqli_fetch_array($info_))
{
$ptype1 = $inforow_['DESCRIP'];
}
$email="";
$cn ="unregistered";
$cp1 ="unregistered";
$sent=0;
$unsent=0;
   $info1 = mysqli_query($db,"SELECT * FROM  gmail WHERE PTYPE = '$ptype2' ");
while ($row= mysqli_fetch_array($info1))
{
$email =$row['EMAIL'];
$cn =$row['CONTACT_NO'];
$cp1 =$row['CONTACT_PERSON'];



}

   $info = mysqli_query($db,"SELECT * FROM  emails WHERE PTYPE = '$ptype2' ");
while ($row= mysqli_fetch_array($info))
{
$status = $row['RECEIVED'];
}

$checkcolor  = '#4af549';
    $alink = 'href="http://kaelco.000.pe/Upgrade/dist/mailer.php?action=start&pause=1&ptype='.$ptype['PTYPE'].'&email='.$email.'&cp='.$cp1.'&cn='.$cn.'&pname='.$ptype1.'&tran='.$trans.'&stat='.$status.'"' ;
if($sent ==1){
    $checkcolor  = 'black';
    $alink = '' ;
}

if (!$email){
    $email="uregistered email";
      $checkcolor  = '#ff0068';
}

echo'


 <a  '. $alink.' class="mail-list" style ="color:black;">
<div class="form-check">  <svg xmlns="" width="16" height="16" fill="currentColor" class="form-check-input bi bi-envelope-plus " viewBox="0 0 16 16" style="color:#cb4c4c;" >
  <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z" />
  <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5" />
</svg>   <i class="input-helper" ></i></label></div>
<div class="content">

<p class="message_text"> <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-envelope-plus" viewBox="0 0 16 16">
<svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill"  style="color:#bdbdb7;" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
</svg> <b>  '.$ptype2.'</b></p>
<p class="sender-name">'.$ptype1.'<br>'.$email.'</p>

</div>
<div class="details">
<span class="mdi mdi-checkbox-marked-circle" style ="color:'.$checkcolor.';"></span>

</div>
</a>

 ';
 
 
 }
}


$ptype  = $_GET['ptype'];
    ?>


</div>



</div>



<?php
}
?>
<div class="mail-view d-none d-md-block col-md-9 col-lg-7 bg-white">
<?php if($trans =="send_soa" ){?>
<?php
include 'mailer_send_soa.php';

}if($trans =="send_notif" ){
    include 'mailer_send_notif.php';
}if($trans =="contacts" ){
 
      include 'mailer_contact.php';
}if($trans =="currentbill" || $trans =="controls" ){
 include 'mailer_currentbill.php';
  
}


?>




</div>
</div>
</div>
</div>
</div>

</script>
</body>
</html>
<script>
  $(document).ready(function(){
$("#search").keyup(function(){
    $(".pcon").empty();
var _name = $(this).val();
 $.ajax({
     url: 'search_pref.php',
    type: 'POST',
    data: {name:_name},
 dataType: 'text',
 async : true,
    success: function(data){
    $(".pcon").html(data);
     console.log(data);
      
     }
 });

});

$(".u_c_btn").off('click').click( function(){

var _email = $('#'+$(this).val()+'email').val();
var _cp = $('#'+$(this).val()+'cp').val();
var _cn = $('#'+$(this).val()+'cn').val();
var _ptype = $('#'+$(this).val()+'ptype').val();
var _desc = $('#'+$(this).val()+'desc').val();

$('#'+$(this).val()+'area').empty();
var btnid =$(this).val();
 $.ajax({
     url: 'update_email.php',
    type: 'POST',
    data: {email:_email, cp:_cp, cn:_cn, ptype:_ptype, desc:_desc},
 dataType: 'text',
 async : true,
    success: function(data){
$('#'+btnid+'area').html(data);
     console.log(data);
      
     }
 });

});
$("#remailbtn").off('click').click( function(){
var _email = $("#email_input").val();
var _cp = $("#cp").val();
var _cn = $("#cn").val();
var _ptype = $("#ptype").val();

if(!$("#email_input").val() || !_cn || !_cp ){
    alert("You Have To Fill Up All Fiels");
}else{
     $("#registerarea").empty();
 $.ajax({
     url: 'register_email.php',
    type: 'POST',
    data: {email:_email, cp:_cp, cn:_cn, ptype:_ptype},
 dataType: 'text',
 async : true,
    success: function(data){
    $("#registerarea").html(data);
     console.log(data);
      
     }
 });

}

});
 $("#load").empty();



var _switch = 0;
var interval = null;

  

$(".switch__input").off('click').click( function(){
_switch++;
if (_switch >1){
    _switch = 0;
}


if(_switch == 1){
  interval = setInterval(function () {
  // console.log(_switch);
      $("#load").append("<div>G</div><div>N</div><div>I</div><div>D</div><div>N</div><div>E</div><div>S</div>");
     
     }, 1000);
}else{
     $("#load").empty();
     clearInterval(interval);
}


});

});

    </script>