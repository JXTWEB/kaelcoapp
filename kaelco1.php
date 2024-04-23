
<?php
include 'header.php';
$disable='';
?>
<style>

.wrapper{
    background:white;
}
</style>
<input type="hidden" id="telini" value="<?php echo$user; ?>">
    
<input type="hidden" id="telname" value="<?php echo$username ; ?>">
   
<nav class="p-2" style="background-color:white;">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-coreui-toggle="tab" data-coreui-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-envelope-plus" viewBox="0 0 16 16">
  <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
  <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5"/>
</svg></button>
    <button class="nav-link" id="nav-profile-tab" data-coreui-toggle="tab" data-coreui-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
</svg></button>
    <button class="nav-link" id="nav-contact-tab" data-coreui-toggle="tab" data-coreui-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
</svg></button>


  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active card p-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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

$action  = $_GET['action'];
$ptype  = $_GET['ptype'];
$pause  = $_GET['pause'];
$key  = $_GET['key'];
include 'con.php';
?>
<?php if($action=="stop"){  ?>

<?php
    $month = mysqli_query($db,"SELECT MONTH  FROM `current_bill`    ");
while ($rmonth = mysqli_fetch_array($month))
{
    $monthbill = $rmonth['MONTH'];
         $currentbillmonthreverse = $year.'-'.str_pad($rmonth['MONTH'], 2, "0", STR_PAD_LEFT);
    $currentbillmonth = str_pad($rmonth['MONTH'], 2, "0", STR_PAD_LEFT).'-'.$year;

}
?>


<center>
  <h6 >CURRENT BILL MONTH <u> <?php 

    echo'<span class="" style="border-radius:10px;"><b>'. date('F-Y', strtotime($year.'-'.str_pad($monthbill, 2, "0", STR_PAD_LEFT).'-01')).'</b>';
?>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen " style="margin-left:10px;" viewBox="0 0 16 16"  data-toggle="modal" data-target="#exampleModal1">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
</svg></span> </u>
</h6> </center>
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        SELECT PREFERENTIAL CONSUMERS
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body p-1 pt-2">
      
<div class="d-flex flex-wrap" style="padding:0;">
<table class="table table-striped" style="margin:0;padding:0;  font-size:14px;  font-family: sans-serif;">
  <thead style="border-bottom:1px solid #0000002d;font-size:12px;" >
    <tr >
      <th scope="col" style="padding:0; margin:0;">Code</th>
      <th scope="col" style="padding:0; margin:0;">Name</th>
         <th scope="col" style="padding:0; margin:0;">Contact Number</th>
                  <th scope="col" style="padding:0; margin:0;">Contact Person</th>
      <th scope="col" style="padding:0; margin:0;">Email</th>
       <th scope="col" style="padding:0; margin:0;">Email Status</th>

            <th scope="col" style="padding:0; margin:0;">action</th>
    
    </tr>
  </thead>
  <tbody>
   <?php
 date_default_timezone_set('Asia/Manila');
$year =date("Y");
$resultptype = mysqli_query($db,"SELECT PTYPE  FROM `fbilmast`    GROUP BY PTYPE ORDER BY PTYPE  ");
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
$email="unregistered";
$cn ="unregistered";
$cp ="unregistered";
$sent=0;
$unsent=0;
   $info1 = mysqli_query($db,"SELECT * FROM  emails WHERE PTYPE = '$ptype2' ");
while ($row= mysqli_fetch_array($info1))
{
$email =$row['EMAILS'];
$cn =$row['CONTACT_NO'];
$cp =$row['CONTACT_ PERSON'];
if($row['RECEIVED'] ==1){
$sent =1;
}
if($row['RECEIVED'] ==0){
$unsent++;
}   

}

echo'
<tr>
<td>'.$ptype['PTYPE'] .$sent.' </td>
<td>'.$ptype1.' </td>
<td> '.$cn.'</td>
<td>'.$cp.'</td>
<td>'.$email.' </td>
<td>';

if($sent ==1 ){
echo'
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg> SOA has been sent';
}else{

    echo' <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-exclamation-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 4.697v4.974A4.5 4.5 0 0 0 12.5 8a4.5 4.5 0 0 0-1.965.45l-.338-.207z"/>
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1.5a.5.5 0 0 1-1 0V11a.5.5 0 0 1 1 0m0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
</svg> no emails has been sent ';
}

echo' </td>
<td> 
';

echo' </td>
<td> ';
if($sent ==1 ){
echo'
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg> SOA has been sent';
}else{

echo'
 <a href="http://kaelco.000.pe/Upgrade/dist/kaelco1.php?action=start&pause=1&ptype='.$ptype['PTYPE'].'" ><b> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
</svg> send soa </b> </a>';

}




echo'</td>
 </tr>
 ';
 
 
 }
}


    ?>


</tbody>
</table>
</div>



      </div>
    </div>
  </div>
 
</div>

 

<?php }
    $month = mysqli_query($db,"SELECT MONTH  FROM `current_bill`    ");
while ($rmonth = mysqli_fetch_array($month))
{
    $monthbill = $rmonth['MONTH'];
         $currentbillmonthreverse = $year.'-'.str_pad($rmonth['MONTH'], 2, "0", STR_PAD_LEFT);
    $currentbillmonth = str_pad($rmonth['MONTH'], 2, "0", STR_PAD_LEFT).'-'.$year;

}
?>
<center>
<?php if($action=="start" ){
    
    
      ?>

<h6 >CURRENT BILL MONTH <u> <?php 

    echo'<span class="" style="border-radius:10px;"><b>'. date('F-Y', strtotime($year.'-'.str_pad($monthbill, 2, "0", STR_PAD_LEFT).'-01')).'</b>';
?>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen " style="margin-left:10px;" viewBox="0 0 16 16"  data-toggle="modal" data-target="#exampleModal1">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
</svg></span> </u>
</h6>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BILL MONTH</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php  echo date('F-Y',   strtotime($year.'-'.str_pad( $monthbill+1, 2, "0", STR_PAD_LEFT).'-01'));
       
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button"  id="billmonthbtn" ptype ="<?php echo$ptype; ?>" class="btn btn-primary">UPDATE NEW BILL MONTH</button>
      </div>
    </div>
  </div>
</div>

<?php


            $info_ = mysqli_query($db,"SELECT PTYPE,DESCRIP FROM fbilpref WHERE PTYPE='$ptype' LIMIT 1 ");
while ($inforow_ = mysqli_fetch_array($info_))
{
$ptype1 = $inforow_['DESCRIP'];
}

?>
<h4 class="p-2"> <?php echo$ptype1;


function generateRandomString($length = 30) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}
  $keylink = generateRandomString();
 ?> </h4>


<a href="http://kaelco.000.pe/Upgrade/dist/kaelco1.php?action=sending&pause=0&ptype=<?php echo$ptype; ?>&key=<?php echo$keylink; ?>"class="button-62" role="button" id="sverisoa">SEND VERIFIED SOA</a>
<a href="http://kaelco.000.pe/Upgrade/dist/kaelco1.php?action=stop&pause=1"class="button-62" style="background:linear-gradient(to bottom right, #4773efba, #5afeff);" role="button">SELECT PREFERENTIAL</a>
<?php  }?>
<?php if($action=="sending" && $pause == 0){ 
    $disable ="disabled";
     ?>
<p> Sending Emails ! </p>

    <div class="box">
    
        <div class="border one"></div>
        <div class="border two"></div>
        <div class="border three"></div>
        <div class="border four"></div>

        <div class="line one"></div>
        <div class="line two"></div>
        <div class="line three"></div>
    </div>
    <?php


?>
</center>

<?php }?>



<?php
///Display total Sent EMAILS
  if($action=="sending" && $pause ==1){
$totalsent =0;
   $info1 = mysqli_query($db,"SELECT  RECEIVED, EMAILS, PTYPE FROM  emails WHERE PTYPE = '$ptype' AND RECEIVED ='1' GROUP BY EMAILS ");
while ($inforow1 = mysqli_fetch_array($info1))
{
$totalsent ++;

}

?>
<a href="http://kaelco.000.pe/Upgrade/dist/kaelco1.php?action=stop&pause=1"class="button-62 mb-2" style="background:linear-gradient(to bottom right, #4773efba, #5afeff);" role="button">SELECT PREFERENTIAL</a>

<h4 class="text-success">
<svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="currentColor" class="bi bi-envelope-check" viewBox="0 0 16 16" style="margin-top:-7px;">
  <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
  <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0m-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686"/>
</svg> EMAILS WERE SENT   </h4>

<?php   } ?>
<table class="table mb-0">
                      <thead class="fw-semibold text-disabled">
                        <tr class="align-middle">
                          <th class="text-center">
                            <svg class="icon">
                              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people"></use>
                            </svg>
                          </th>
                          <th>Consumer Name/Address</th>
               <th>Current Bill</th>
                       <th>SOA</th>
                       
                        </tr>
                      </thead>
                      <tbody>
              <!-- start display -->        

 <?php
 date_default_timezone_set('Asia/Manila');
$dateinset =date("Y-m");
  if($action=="start" || $pause ==1){
if(!$ptype){}else{
       $bcount=1;
       $verifybillmonthJS = 0;
    $info = mysqli_query($db,"SELECT * FROM fbilmast WHERE PTYPE ='$ptype' AND BILLSTAT != 'D'");
while ($inforow = mysqli_fetch_array($info))
{
 $bcount++;
     $billmonth  = $inforow['BILLMONTH']."-".$inforow['BILLYEAR'];
$acc = $inforow['NEWACTS'];
$address = $inforow['CADDRESS'];
$name = $inforow['CNAME'];
$ac_n =$acc;
if(ctype_digit($ac_n) && strlen($ac_n) == 10) {
 $ac_n = substr($ac_n, 0, 2) .'-'.
            substr($ac_n, 2, 4) .'-'.
            substr($ac_n, 6);
}
$email ='';
$setemail='sent';


if($action=="start"){
$setemail ='Registered';
}

$verifybillmonth = 'VERIFIED';
$bgi ='text-danger';

 if($billmonth == $currentbillmonth){
     $verifybillmonth = 'VERIFIED';
    
     $bgi='text-success';
 }
 if($billmonth != $currentbillmonth){
 $verifybillmonthJS++;

 }
 $sendcolor="text-secondary";
   $info1 = mysqli_query($db,"SELECT * FROM  emails WHERE NEWACTS = '$acc'   ");
while ($inforow1 = mysqli_fetch_array($info1))
{
$email =$inforow1['EMAILS'];
$emailbillmonth = $inforow1['YR_MO'];
 $sendcolor='text-success';
}



?>


  <tr class="align-middle">
                          <td class="text-center">
                            <div class="avatar avatar-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
</svg>

                            </div>
                          </td>
                          <td>
                            <div class="text-wrap"><?php  echo$name; ?></div>
                            <div class="small text-medium-emphasis text-wrap"><?php echo$address. '( <b>'.$ac_n.'</b> )' ; ?></div>
                          </td>
                        <td>  <div class="text-wrap"><?php   echo$verifybillmonth ;
                            
                         ?> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill  <?php echo $bgi; ?>" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                      </div>
                      </td>
                          <td>
                        <?php 
                       if(!$email){}else{
                        ?>  
  <div class="text-wrap"> <?php echo$setemail;  ?> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill  <?php echo $sendcolor; ?>" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></div>
<?php } ?>
                          <div class="small text-medium-emphasis text-wrap"><?php echo$email;
                          if(!$email){
                              
                        echo'
         <button class="button-63" style="height:auto;" data-toggle="modal" data-target="#exampleModal'.$bcount.'" '.$disable.' >   register email
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16"  class="bi bi-pen " style="margin-left:10px;" viewBox="0 0 16 16"  >
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
</svg>
</button>';
 echo '<div class="modal fade" id="exampleModal'.$bcount.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">REGISTER EMAIL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   		<label for="formEmail" class="d-block">
					<i class="icon" data-feather="mail"></i>
				</label>
				<input type="email" id="email'.$bcount.'" class="form-control form-control-lg thick" placeholder="E-mail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary register_c" id="'.$bcount.'" acc="'.$acc.'" ptype="'.$ptype.'" >Register</button>
      </div>
    </div>
  </div>';
?>


<!-- Button trigger modal -->




</div>
                         
                           </div>
                             <?php }?>
                          </td>
                        </tr>
                         

<?php }

}

?>


<script> 


  $(document).ready(function(){

var verify_billm ="<?php echo$verifybillmonthJS;  ?>";
if (verify_billm >= 1){
alert(verify_billm  +"Unverified Bill Month");

$("#sverisoa").css("display", "none");
}else{
$("#sverisoa").css("display", "");
}


  });

  </script>


<?php

  



}?>


<!-- sending display display -->

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
        url:'sendgmail.php',
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


       <tbody id="sendarea"> </tbody>
 
                
                      </tbody>





                    </table>


  </div>




  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0" style="background-color:white;">
  
  <table class="table mb-0">
                      <thead class="fw-semibold text-disabled">
                        <tr class="align-middle">
                          <th class="text-center">
                            <svg class="icon">
                              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people"></use>
                            </svg>
                          </th>
                          <th>Consumer Name/Address</th>
                  
                          <th>Email/Account No</th>
                       
                        </tr>
                      </thead>
                      <tbody>
                      

<?php

    $info = mysqli_query($db,"SELECT * FROM emails");
while ($inforow = mysqli_fetch_array($info))
{
    
      
$acc = $inforow['NEWACTS'];

$ac_n =$acc;
if(ctype_digit($ac_n) && strlen($ac_n) == 10) {
 $ac_n = substr($ac_n, 0, 2) .'-'.
            substr($ac_n, 2, 4) .'-'.
            substr($ac_n, 6);
}

   $info1 = mysqli_query($db,"SELECT * FROM  fbilmast  WHERE NEWACTS = $acc ");
while ($inforow1 = mysqli_fetch_array($info1))
{
$address = $inforow1['CADDRESS'];
$name = $inforow1['CNAME'];
}
?>
  <tr class="align-middle">
                          <td class="text-center">
                            <div class="avatar avatar-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
</svg>
                            </div>
                          </td>
                          <td>
                            <div class="text-wrap"><?php  echo$name; ?></div>
                            <div class="small text-medium-emphasis text-wrap"><?php echo$address; ?></div>
                          </td>
                      
                          <td>
                          
  <div class="text-wrap"><?php echo$ac_n; ?></div>
                          <div class="small text-medium-emphasis text-wrap"><?php echo$inforow['EMAILS']; ?></div>
                          </td>
                        </tr>
                         

<?php }?>



             
                      
         
                
                      </tbody>
                    </table>
  
  </div>

  
	<!--notification-->
  <div class="tab-pane fade" id="nav-notif" role="tabpanel" aria-labelledby="nav-profile-notif" tabindex="0" style="background-color:white;">
  asd

  </div>
	<!--end notification-->


  <div class="tab-pane fade p-2" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0" style="background-color:white;">
  
 <div class="container1 d-flex p-4">
	
	<!-- // SVG
					from: https://www.freepik.com/free-vector/new-message-concept-landing-page_5777076.htm 
  -------------------------------------------------------------
  -- Note: need to use inline svg to manipulate its components
  ------------------------------------------------------------>

	
	
	<!-- // FORM
  -------------------------------------------------------------
  ------------------------------------------------------------>
	
	<div class="float-start" id="form">
<div class="row">
  <div class="col-sm-6 text-start">
			<!-- Name -->
            <svg xmlns="" width="50" height="50" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
</svg> <h3>ADD NEW EMAIL </h3><div class="form-check form-switch" id="check1">
  <input class="form-check-input" id ="check" type="checkbox" id="flexSwitchCheckDefault">
  <label class="form-check-label"  for="flexSwitchCheckDefault">Register By PREFERENTIAL</label>
</div>
		<div class="form-group position-relative">
				<label for="formEmail" class="d-block">
					<i class="icon" data-feather="mail"></i>
				</label>
				<input type="email" id="email" class="form-control form-control-lg thick" placeholder="E-mail">
			</div>
<br>
		<div class="form-group position-relative">
				<label for="formEmail" class="d-block">
					<i class="icon" data-feather="mail"></i>
				</label>
				<input type="email" id="cn" class="form-control form-control-lg thick" placeholder="Contact Number">
			</div>
<br>
		<div class="form-group position-relative">
				<label for="formEmail" class="d-block">
					<i class="icon" data-feather="mail"></i>
				</label>
				<input type="email" id="cp" class="form-control form-control-lg thick" placeholder="Contact Person">
			</div>
<br>
			<!-- E-mail -->
				<div class="form-group position-relative">
				<label for="formName" class="d-block">
					<i class="icon" data-feather="user"></i>
				</label>
				<input type="text" id="acc" class="form-control form-control-lg thick" placeholder="Account No">
			</div>
	<!-- Submit btn -->
			<div class="text-center"><br>

				<button type="button" id="add" class="btn btn-primary" tabIndex="-1">Add</button>
			</div>
            <br>
	</div>


  <div class="col-sm-6 text-start">

<h3>  <svg xmlns="" width="30" height="30" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
</svg> ACCOUNT INFORMATION </h3>
<div id ="res">
<div class="input-group mb-3">
  <span class="input-group-text" style="border:0;width:120px;" id="inputGroup-sizing-default">ACOUNT NO.</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled>
</div>

<div class="input-group mb-3">
  <span class="input-group-text" style="border:0;width:120px;" id="inputGroup-sizing-default">NAME</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled>
</div>


<div class="input-group mb-3">
  <span class="input-group-text" style="border:0;width:120px;" id="inputGroup-sizing-default">ADDRESS</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled>
</div>


<div class="input-group mb-3">
  <span class="input-group-text" style="border:0;width:120px;" id="inputGroup-sizing-default">METER NO.</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled>
</div>

</div>

</div>

</div>    



		
	</div>
	
</div>
  
  
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
var _action ="!pref";

  $('#check1').off('click').click( function(){
  
 if ($("#check").is(":checked")) {
     $("#res").empty();
     $("#acc").attr("placeholder", "Enter Preferential Code");
        $("#acc").attr("maxlength", "3");
_action="pref";
  } else {
       $("#acc").attr("maxlength", "10");
           $("#acc").attr("placeholder", "Enter Account Number");
      _action ="!pref";
  }
});

$(".register_c").off('click').click( function(){
  
var _email =$("#email"+$(this).attr("id")).val();
var _acc = $(this).attr("acc");
var _ptype = $(this).attr("ptype");

$("#res").empty();
 $.ajax({
        url:'addemail.php',
        type: 'POST',
        async : true,
        data: {acc:_acc, email:_email, ptype:_ptype},
        dataType: 'text',
        success: function(data){
       $("#res").html(data);
          console.log(data);
           
        }
      });


});

$("#billmonthbtn").off('click').click( function(){
  


    
 var _ptype = $(this).attr("ptype");
alert(_ptype);
$("#res").empty();
 $.ajax({
        url:'update_current_bill.php',
        type: 'POST',
        async : true,
        data: {ptype:_ptype},
        dataType: 'text',
        success: function(data){
       $("#res").html(data);
          console.log(data);
           
        }
      });


  });
$("#add").off('click').click( function(){
  


    
   var _email =$("#email").val(); 
   var _acc =$("#acc").val(); 
      var _cn =$("#cn").val(); 
        var _cp =$("#cp").val(); 
 
$("#res").empty();
 $.ajax({
        url:'addemail.php',
        type: 'POST',
        async : true,
        data: {acc:_acc, email:_email, cn:_cn, action:_action, cp:_cp},
        dataType: 'text',
        success: function(data){
       $("#res").html(data);
          console.log(data);
           
        }
      });


  });

});

</script>
