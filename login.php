<!-- Font Awesome -->

<!-- Google Fonts -->

<script>
alert("Kaelco App is temporarily closed for security enhancement purposes. We apologize for any inconvenience caused and appreciate your patience");


</script>
<?php

include 'con.php';
$computerId = $_SERVER['HTTP_USER_AGENT'].$_SERVER['LOCAL_ADDR'].$_SERVER['LOCAL_PORT'].$_SERVER['REMOTE_ADDR'];
$computerId =  preg_replace('/\s+/', '', $computerId);


$lstat = mysqli_query($db,"SELECT * FROM `online_status` WHERE device = '$computerId'");

while ($stat = mysqli_fetch_array($lstat))
{
    

session_destroy();
session_start();
$_SESSION['activeuser'] = $stat['ini'];
    $_SESSION['start'] = date("M d, Y h:i:sa", strtotime('+3 minutes', $time));
     $_SESSION['mode'] = "unrestrict";
   echo '<script>
    window.location.href = "http://kaelco.000.pe/Upgrade/dist/dashboard.php";	</script>';
   
}
error_reporting(0);
session_start();

//$user = $_SESSION['activeuser'];

//if(!$user){

//}else{
   //     echo '<script>
  //  window.location.href = "http://kaelco.000.pe/Upgrade/dist/dashboard.php";	</script>';
//}


?>
<head><title> Jeff-xt-web </title>
  <link rel="icon" type="image/x-icon" href="KaelcoLogo.jpg"> </head>
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css"
  rel="stylesheet"
/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
 
<div class="card text-center m-4">
 <div class="card-header"> <img class="avatar-img"   src="KaelcoLogo.jpg" width="150" alt="user@email.com"></div>
<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
      aria-controls="pills-login" aria-selected="true" style="font-size:15px;" >Kalinga-Apayao Electric Cooperative, Inc.</a>
  </li>

</ul>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




<!-- Pills navs -->

<!-- Pills content -->

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>NOTE :</strong> Entry Code ('INITIAL + KAELCO CODE') 

</div>
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form>
   


      <!-- Email input -->

      </div>

      <!-- Password input -->
      <div class="form-outline mb-4">
        <input type="password" id="loginPassword" class="form-control" />
        <label class="form-label"  for="loginPassword">Entry Code</label>
      </div>

      <!-- 2 column grid layout -->
   

  

      <!-- Submit button -->
      <button type="button" id="loginbutton" class="btn btn-primary btn-block mb-4">Sign in</button>


    </form>

<span id="res"> </span>

  </div>
</div>
</div>



<script> 


  $(document).ready(function()
	

{

 $('.dropdown-item').off('click').click( function(event){
 $('#userlabel').empty();
$('#usertype').val($(this).attr("value"));
 });

  $('#loginbutton').off('click').click( function(event){
var entry_ =  $('#loginPassword').val();
var ust_ = $('#usertype').val();

 $.ajax({
        url:'loginfunction.php',
        type: 'POST',
        async : true,
        data: {entry:entry_},
        dataType: 'text',
        success: function(data){
       $("#res").html(data);
          console.log(data);
           
        }
      });
});

});

</script>