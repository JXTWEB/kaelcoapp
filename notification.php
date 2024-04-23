
<?php
include 'header.php';
$disable='';
?>
<style>

.wrapper{
    background:white;
}
</style>
<style>

.box {

    height:50px;
    width:40px;
    animation: box 5s infinite linear;
}

.border {
    background:#007298;
    position:absolute;
}

.border.one {
    height:4px;
    top:0;
    left:0;
    animation: border-one 5s infinite linear;
}

.border.two {
    top:0;
    right:0;
    height:100%;
    width:4px;
    animation: border-two 5s infinite linear;
}

.border.three {
    bottom:0;
    right:0;
    height:4px;
    width:100%;
    animation: border-three 5s infinite linear;
}

.border.four {
    bottom:0;
    left:0;
    height:100%;
    width:4px;
    animation: border-four 5s infinite linear;
}

.line {
    height:4px;
    background:#007298;
    position:absolute;
    width:0%;
    left:25%;
}

.line.one {
    top:25%;
    width:0%;
    animation: line-one 5s infinite linear;
}

.line.two {
    top:45%;
    animation: line-two 5s infinite linear;
}

.line.three {
    top:65%;
    animation: line-three 5s infinite linear;
}

@keyframes border-one {
    0%   {width:0;}
    10%  {width:100%;}
    100% {width:100%;}
}

@keyframes border-two {
    0%   {height:0;}
    10%  {height:0%;}
    20%  {height:100%;}
    100% {height:100%;}
}

@keyframes border-three {
    0%   {width:0;}
    20%  {width:0%;}
    30%  {width:100%;}
    100% {width:100%;}
}

@keyframes border-four {
    0%   {height:0;}
    30%  {height:0%;}
    40%  {height:100%;}
    100% {height:100%;}
}

@keyframes line-one {
    0%   {left:25%;width:0;}
    40%  {left:25%;width:0%;}
    43%  {left:25%;width:50%;}
    52%  {left:25%;width:50%;}
    54%  {left:25%;width:0% }
    55%  {right:25%;left:auto;}
    63%  {width:10%;right:25%;left:auto;}
    100% {width:10%;right:25%;left:auto;}
}

@keyframes line-two {
    0%   {width:0;}
    42%  {width:0%;}
    45%  {width:50%;}
    53%  {width:50%;}
    54%  {width:0% }
    60%  {width:50%}
    100% {width:50%;}
}

@keyframes line-three {
    0%   {width:0;}
    45%  {width:0%;}
    48%  {width:50%;}
    51%  {width:50%;}
    52%  {width:0% }
    100% {width:0%;}
}

@keyframes box {
    0%   {opacity:1;margin-left:0px;height:50px;width:40px;}
    55%  {margin-left:0px;height:50px;width:40px;}
    60%  {margin-left:0px;height:35px;width:50px;}
    74%  {msthin-left:0;}
    80%  {margin-left:-50px;opacity:1;}
    90% {height:35px;width:50px;margin-left:50px;opacity:0;}
    100% {opacity:0;}
}



.button-62 {
  background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
  border: 0;
  border-radius: 12px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 500;
  line-height: 2.5;
  outline: transparent;
  padding: 0 1rem;
  text-align: center;
  text-decoration: none;
  transition: box-shadow .2s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
}

.button-62:not([disabled]):focus {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}

.button-62:not([disabled]):hover {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}

.button-63 {
  background: linear-gradient(to bottom right, #47d8ef, #5aff6e);
  border: 0;
  border-radius: 12px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 500;
  line-height: 2.5;
  outline: transparent;
  padding: 0 1rem;
  text-align: center;
  text-decoration: none;
  transition: box-shadow .2s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
}

.button-63:not([disabled]):focus {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}

.button-63:not([disabled]):hover {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}
</style>
<style>


#form {
width:100%;
	
	.title {
		font-family: 'Pacifico', cursive;
		color: #212529;
		font-size: 2.5rem;
	}
	
  .form-control {
    background-color: #f2f6f8;
	
    border: none;
 width:100%:
		
    &.thick {
      height: 3.3rem;
    
    }
		
		&:focus {
			background-color: #f2f6f8;
			border: none;
			box-shadow: 0px 7px 5px rgba(0, 0, 0, 0.11);
		}
  }
	
	.message .form-control {
			padding: .5rem 1.8rem;
	}
	
  ::placeholder {
    font-family: 'Quicksand', sans-serif;
	
    font-size: 1.1rem;
    color: #838788;

    left: 0;
  }
	
  input,
  textarea {
		font-family: 'Quicksand', sans-serif;
    color: #212529;

    border-radius:0;
  }
	
  .icon {
    color: #57565c;
    height: 1.3rem;
    position: absolute;
    left: 1.5rem;
    top: 1.1rem;
  }
}

.btn.btn-primary {
  font-family: 'Quicksand', sans-serif;
	font-weight: bold;
  height: 2.5rem;
  line-height: 2.5rem;
  padding: 0 3rem;
  border: 0;

background:linear-gradient(#5bb7a5 0%, #1e5799 100%);
  background-size: 300% 100%;
  transition: all 0.3s ease-in-out;
}


.input-group-text{
      background-image:linear-gradient(131deg, #ffd340, #ff923c, #ff923c, #ff923c);
  background-size: 300% 100%;
  transition: all 0.3s ease-in-out;
  font-weigth:bolder;
}
.btn.btn-primary:hover:enabled {
  box-shadow: 0 0.5em 0.5em -0.4em #ff923cba;
  background-size: 100% 100%;
  transform: translateY(-0.15em);
}

.gmail{
  margin:40px auto;
  background:#E41F1A;
  width:300px;
  height:200px;
  border-radius:40px;
  position:relative;
  box-shadow:0 0 10px 3px black;
}
.gmail:after{
  content:'';
  position:absolute;
  left:40px;
  top:55px;
  border-bottom:85px solid #E8E6D6;
  border-left:110px solid #E8E6D6;
  border-right:110px solid #9B9C91;
  border-top:60px solid transparent;
  width:0;
}
.gmail:before{
  content:'';
  position:absolute;
  left:35px;
  top:0px;
  border-top:65px solid #E8E6D6;
  border-left:115px solid transparent;
  border-right:115px solid transparent;
  width:0;
}

</style>

<?php

 date_default_timezone_set('Asia/Manila');
$dateinset =date("F d, Y");
$pause  = $_GET['pause'];
$action  = $_GET['action'];

?>
<input type="hidden" id="telini" value="<?php echo$user; ?>">
    
<input type="hidden" id="telname" value="<?php echo$username ; ?>">
   
<nav class="p-2" style="background-color:white;">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">

    <button class="nav-link" id="nav-profile-tab" data-coreui-toggle="tab" data-coreui-target="#nav-notif-list" type="button" role="tab" aria-controls="nav-notif-list" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
  <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z"/>
  <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
</svg></button>
    <button class="nav-link" id="nav-send-not" data-coreui-toggle="tab" data-coreui-target="#nav-send" type="button" role="tab" aria-controls="nav-sendt" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
  <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
</svg></button>

   <button class="nav-link" id="nav-profile-notif" data-coreui-toggle="tab" data-coreui-target="#nav-notif" type="button" role="tab" aria-controls="nav-notif" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
</svg></button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">

  <div class="tab-pane fade p-2" id="nav-notif-list" role="tabpanel" aria-labelledby="nav-notif-list" tabindex="0" style="background-color:white;">
 <h5>LIST OF CONUSUMER 2 DAYS AND ABOVE BEFORE THE DISCONNECTION DATE  </h5>
<table class="table mb-0">
                      <thead class="fw-semibold text-disabled">
                        <tr class="">
                          <th >
                           NEWACTS
                          </th>
                          <th>Consumer Name/Address</th>
               <th>Current Bill</th>
                       <th>Due Date</th>
                         <th>Days Gap</th>
                        </tr>
                      </thead>
                      <tbody>

<?php

include 'con.php';


   $info1 = mysqli_query($db,"SELECT  fbilmast.NEWACTS as facc , fbilmast.CURRENTBIL as bill, fbilmast.CNAME as name, fbilmast.DUEDATE as duedate, fbilmast.BILLSTAT, emails.NEWACTS as eacc FROM emails INNER JOIN fbilmast WHERE fbilmast.NEWACTS = emails.NEWACTS AND fbilmast.BILLSTAT ='A' ");
while ($row = mysqli_fetch_array($info1))
{
//echo$row['duedate']."<br>";
$dateinset;
$date1 = "2024-02-27";
$date2 = $row['duedate'];

$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$bg="white";
if(strtotime($date2) < strtotime($date1)){
$days ="above due date";
$bg="#ff9600ad";
}
echo"<tr style ='background-color:".$bg.";'>";
echo"<td>".$row['facc']."</td> ";
echo"<td>".$row['name']."</td> ";
echo"<td>". number_format($row['bill']/100, 2,'.',',')."</td> ";
echo"<td>". date('F d, Y', strtotime($row['duedate']))."</td> ";
echo"<td>".$days."</td> ";
echo"</tr>";
//echo $days."<br>".$date1.")(".$date2."<br>";



}



?>
</tbody>
</table>


  </div>


  <div class="tab-pane fade p-2" id="nav-send" role="tabpanel" aria-labelledby="nav-profile-notif" tabindex="0" style="background-color:white;">
       <?php

  if($action=="stop" && $pause ==1){

      
?>

<a href="http://kaelco.000.pe/Upgrade/dist/notification.php?action=sending&pause=0"class="button-62" role="button">START NOTIFY MEMBER CONSUMER</a>

<?php
  }
?>
<center>
<?php if($action=="sending" && $pause == 0){ 
    $disable ="disabled";
     ?>
<p> Sending Notification ! </p>

    <div class="box">
    
        <div class="border one"></div>
        <div class="border two"></div>
        <div class="border three"></div>
        <div class="border four"></div>

        <div class="line one"></div>
        <div class="line two"></div>
        <div class="line three"></div>
    </div>
    <div id="sendarea"> </div>
    <?php

}
?>
</center>
     <?php

  if($action=="sending" && $pause ==0){

      
?>


<script> 


  $(document).ready(function(){

 setInterval(function () {
        
         // $('#sendarea').empty();   
         var _ptype ="<?php echo$ptype; ?>";
         var _key ="<?php echo$key; ?>";
          $.ajax({
        url:'sendnotification.php',
        type: 'POST',
        async : true,
        data: {ptype:_ptype, key:_key},
        dataType: 'text',
        success: function(data){
      // $("#sendarea").html(data);
          $("#sendarea").append(data);
          console.log(data);
           
        }
      });
         
         
  } , 1000);


  });
    </script>

      



<?php } ?>


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

    <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/main.js"></script>
    <script>
    </script>

  </body>
</html>


<script> 


  $(document).ready(function()
	

{




$("#add").off('click').click( function(){
  


    
   var _email =$("#email").val(); 
   var _acc =$("#acc").val(); 
$("#res").empty();
 $.ajax({
        url:'addemail.php',
        type: 'POST',
        async : true,
        data: {acc:_acc, email:_email},
        dataType: 'text',
        success: function(data){
       $("#res").html(data);
          console.log(data);
           
        }
      });


  });

});

</script>
