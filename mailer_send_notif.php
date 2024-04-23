<style>

/* CSS rules are kept repetitive so that you can get CSS rules for each button easily :) */

* {
  user-select: none;
  -webkit-tap-highlight-color: transparent;
}

*:focus {
  outline: none;
}

#app-cover {
  display: table;
  width: 600px;
  margin: 80px auto;
  counter-reset: button-counter;
}


.toggle-button-cover {
  display: table-cell;
  position: relative;
  width: 350px;
  height: 140px;
  box-sizing: border-box;
}

.button-cover {
  height: 100px;
  margin: 20px;
  background-color: #fff;
  box-shadow: 0 10px 20px -8px #c5d6d6;
  border-radius: 4px;
}

.button-cover:before {
  counter-increment: button-counter;
  content: counter(button-counter);
  position: absolute;
  right: 0;
  bottom: 0;
  color: #d7e3e3;
  font-size: 12px;
  line-height: 1;
  padding: 5px;
}

.button-cover,
.knobs,
.layer {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

.button {
  position: relative;
  top: 50%;
  width: 85px;
  height: 36px;
  margin: -20px auto 0 auto;
  overflow: hidden;
}

.button.r,
.button.r .layer {
  border-radius: 100px;
}

.button.b2 {
  border-radius: 2px;
}

.checkbox {
  position: relative;
  width: 100%;
  height: 100%;
  padding: 0;
  margin: 0;
  opacity: 0;
  cursor: pointer;
  z-index: 3;
}

.knobs {
  z-index: 2;
}

.layer {
  width: 100%;
  background-color: #ebf7fc;
  transition: 0.3s ease all;
  z-index: 1;
}


/* Button 3 */
#button-3 .knobs:before {
  content: "YES";
  position: absolute;
  top: 4px;
  left: 4px;
  width: 40px;
  height: 30px;
  color: #fff;
  font-size: 10px;
  font-weight: bold;
  text-align: center;
  line-height:1.5;
  padding: 9px 4px;
  background-color: #03a9f4;
  border-radius: 50%;
  transition: 0.3s ease all, left 0.3s cubic-bezier(0.18, 0.89, 0.35, 1.15);
}

#button-3 .checkbox:active + .knobs:before {
  width: 46px;
  border-radius: 100px;
}

#button-3 .checkbox:checked:active + .knobs:before {
  margin-left: -26px;
}

#button-3 .checkbox:checked + .knobs:before {
  content: "NO";
  left: 42px;
  background-color: #f44336;
}

#button-3 .checkbox:checked ~ .layer {
  background-color: #fcebeb;
}


.checkbox{
    padding:10px;
}
* {
	border: 0;
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}
:root {
	--hue: 223;
	--bg: hsl(var(--hue),10%,90%);
	--fg: hsl(var(--hue),10%,10%);
	--trans-dur: 0.4s;

}

.switch,
.switch__input,
.switch__handle-sides,
.switch__handle-side,
.switch__handle-labels,
.switch__handle-label,
.switch__handle-texture {
	display: block;
}
.switch,
.switch__input {
	cursor: pointer;
	-webkit-tap-highlight-color: transparent;
}
.switch {

	position: relative;
	width: 3em;
	height: 3em;
}
.switch__input {
	background-color: hsl(var(--hue),10%,95%);
	border-radius: 0.25em;
	box-shadow:
		0.125em 0.125em 0.125em hsl(0,0%,100%) inset,
		-0.125em -0.125em 0.125em hsl(var(--hue),10%,85%) inset,
		0.125em 0.125em 0.375em hsl(var(--hue),10%,70%);
	outline: transparent;
	position: relative;
	width: 100%;
	height: 100%;
	transition:
		background-color var(--trans-dur),
		box-shadow var(--trans-dur);
	-webkit-appearance: none;
	appearance: none;
}
.switch__input:before {
	border-radius: inherit;
	box-shadow: 0 0 0 max(0.125em,1px) hsla(var(--hue),90%,50%,0);
	content: "";
	display: block;
	position: absolute;
	inset: 0;
	transition: box-shadow 0.15s linear;
}
.switch__input:focus-visible:before {
	box-shadow: 0 0 0 max(0.125em,1px) hsla(var(--hue),90%,50%,1);
}
.switch__handle,
.switch__handle-sides,
.switch__handle-side,
.switch__handle-labels,
.switch__handle-label {
	position: absolute;
}
.switch__handle,
.switch__handle-label {
	transition: transform var(--trans-dur) cubic-bezier(0.65,0,0.36,1.6);
}
.switch__handle,
.switch__handle-sides,
.switch__handle-texture {
	border-radius: 0.125em;
}
.switch__handle {
	box-shadow: 0.25em 0.25em 0.25em hsla(var(--hue),10%,10%,0.4);
	top: 10%;
	left: 10%;
	width: 40%;
	height: 80%;
}
.switch__handle-sides,
.switch__handle-labels,
.switch__handle-texture {
	width: 100%;
	height: 100%;
}
.switch__handle-sides,
.switch__handle-side {
	background-color: hsl(var(--hue),10%,85%);
	transition:
		background-color var(--trans-dur),
		transform var(--trans-dur) cubic-bezier(0.65,0,0.36,1.6);
}
.switch__handle-sides {
	--side-on: hsl(123,90%,40%);
	background-image: linear-gradient(90deg,transparent 50%,var(--side-on) 50%);
	overflow: hidden;
}
.switch__handle-side {
	background-image: linear-gradient(90deg,var(--side-on) 50%,transparent 50%);
	transform: translateX(-50%);
	width: 200%;
	height: 100%;
}
.switch__handle-labels {
	transform-style: preserve-3d;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}
.switch__handle-label {
	backface-visibility: hidden;
	font-size: 0.6em;
	text-shadow: 0 0 0.125em hsla(var(--hue),10%,10%,0.3);
	line-height: 1;
	top: 50%;
	left: 50%;
	text-align: center;
	text-transform: uppercase;
	transform: translate(-50%,-50%) rotateZ(90deg) rotateX(0) translateZ(0.55rem);
}
.switch__handle-label + .switch__handle-label {
	color: hsl(0,0%,100%);
	text-shadow: 0 0 0.125em hsla(0,0%,100%,0.3);
	transform: translate(-50%,-50%) rotateZ(90deg) rotateX(180deg) translateZ(0.55rem);
}
.switch__handle-texture {
	background-image:
		linear-gradient(
			90deg,
			hsla(0,0%,100%,0),
			hsla(0,0%,100%,0.3) 20%,
			hsla(0,0%,100%,0) 40%,
			hsla(0,0%,0%,0) 50%,
			hsla(0,0%,0%,0.4)
		);
	box-shadow:
		0 0.0625em 0.0625em hsla(0,0%,100%,0.3) inset,
		0 -0.0625em 0.0625em hsla(0,0%,0%,0.3) inset;
	transform: translateZ(0);
}
.switch__input:checked ~ .switch__handle {
	transform: translateX(100%);
}
.switch__input:checked ~ .switch__handle .switch__handle-side {
	transform: translateX(0);
}
.switch__input:checked ~ .switch__handle .switch__handle-label {
	transform: translate(-50%,-50%) rotateZ(90deg) rotateX(180deg) translateZ(0.55rem);
}
.switch__input:checked ~ .switch__handle .switch__handle-label + .switch__handle-label {
	transform: translate(-50%,-50%) rotateZ(90deg) rotateX(360deg) translateZ(0.55rem);
}
.switch__label {
	overflow: hidden;
	position: absolute;
	width: 1px;
	height: 1px;
}

/* Dark theme */
@media (prefers-color-scheme: dark) {
	:root {
		--bg: hsl(var(--hue),10%,30%);
		--fg: hsl(var(--hue),10%,90%);
	}
	.switch__handle-sides,
	.switch__handle-side {
		background-color: hsl(var(--hue),10%,45%);
	}
	.switch__handle-label {
		text-shadow: 0 0 0.125em hsla(var(--hue),10%,90%,0.3);
	}
	.switch__input {
		background-color: hsl(var(--hue),10%,35%);
		box-shadow:
			0.125em 0.125em 0.125em hsl(var(--hue),10%,50%) inset,
			-0.125em -0.125em 0.125em hsl(var(--hue),10%,25%) inset,
			0.125em 0.125em 0.375em hsl(var(--hue),10%,20%);
	}
}

#load {

  width:600px;
  height:36px;
  left:50%;
  top:12%;
  position:absolute;
  margin-left:-300px;
  overflow:visible;
  -webkit-user-select:none;
  -moz-user-select:none;
  -ms-user-select:none;
  user-select:none;
  cursor:default;
}

#load div {
  position:absolute;
  width:20px;
  height:36px;
  opacity:0;
  font-weight:bolder;
  font-family:Helvetica, Arial, sans-serif;
  animation:move 2s linear infinite;
  -o-animation:move 2s linear infinite;
  -moz-animation:move 2s linear infinite;
  -webkit-animation:move 2s linear infinite;
  transform:rotate(180deg);
  -o-transform:rotate(180deg);
  -moz-transform:rotate(180deg);
  -webkit-transform:rotate(180deg);
  color:#35C4F0;
}

#load div:nth-child(2) {
  animation-delay:0.2s;
  -o-animation-delay:0.2s;
  -moz-animation-delay:0.2s;
  -webkit-animation-delay:0.2s;
}
#load div:nth-child(3) {
  animation-delay:0.4s;
  -o-animation-delay:0.4s;
  -webkit-animation-delay:0.4s;
  -webkit-animation-delay:0.4s;
}
#load div:nth-child(4) {
  animation-delay:0.6s;
  -o-animation-delay:0.6s;
  -moz-animation-delay:0.6s;
  -webkit-animation-delay:0.6s;
}
#load div:nth-child(5) {
  animation-delay:0.8s;
  -o-animation-delay:0.8s;
  -moz-animation-delay:0.8s;
  -webkit-animation-delay:0.8s;
}
#load div:nth-child(6) {
  animation-delay:1s;
  -o-animation-delay:1s;
  -moz-animation-delay:1s;
  -webkit-animation-delay:1s;
}
#load div:nth-child(7) {
  animation-delay:1.2s;
  -o-animation-delay:1.2s;
  -moz-animation-delay:1.2s;
  -webkit-animation-delay:1.2s;
}

@keyframes move {
  0% {
    left:0;
    opacity:0;
  }
	35% {
		left: 41%; 
		-moz-transform:rotate(0deg);
		-webkit-transform:rotate(0deg);
		-o-transform:rotate(0deg);
		transform:rotate(0deg);
		opacity:1;
	}
	65% {
		left:59%; 
		-moz-transform:rotate(0deg); 
		-webkit-transform:rotate(0deg); 
		-o-transform:rotate(0deg);
		transform:rotate(0deg); 
		opacity:1;
	}
	100% {
		left:100%; 
		-moz-transform:rotate(-180deg); 
		-webkit-transform:rotate(-180deg); 
		-o-transform:rotate(-180deg); 
		transform:rotate(-180deg);
		opacity:0;
	}
}

@-moz-keyframes move {
	0% {
		left:0; 
		opacity:0;
	}
	35% {
		left:41%; 
		-moz-transform:rotate(0deg); 
		transform:rotate(0deg);
		opacity:1;
	}
	65% {
		left:59%; 
		-moz-transform:rotate(0deg); 
		transform:rotate(0deg);
		opacity:1;
	}
	100% {
		left:100%; 
		-moz-transform:rotate(-180deg); 
		transform:rotate(-180deg);
		opacity:0;
	}
}

@-webkit-keyframes move {
	0% {
		left:0; 
		opacity:0;
	}
	35% {
		left:41%; 
		-webkit-transform:rotate(0deg); 
		transform:rotate(0deg); 
		opacity:1;
	}
	65% {
		left:59%; 
		-webkit-transform:rotate(0deg); 
		transform:rotate(0deg); 
		opacity:1;
	}
	100% {
		left:100%;
		-webkit-transform:rotate(-180deg); 
		transform:rotate(-180deg); 
		opacity:0;
	}
}

@-o-keyframes move {
	0% {
		left:0; 
		opacity:0;
	}
	35% {
		left:41%; 
		-o-transform:rotate(0deg); 
		transform:rotate(0deg); 
		opacity:1;
	}
	65% {
		left:59%; 
		-o-transform:rotate(0deg); 
		transform:rotate(0deg); 
		opacity:1;
	}
	100% {
		left:100%; 
		-o-transform:rotate(-180deg); 
		transform:rotate(-180deg); 
		opacity:0;
	}
}
</style>
<div class="row">
<div class="col-md-12 mb-2 mt-4">


<div class="btn-group">
<a href="http://kaelco.000.pe/Upgrade/dist/mailer.php?tran=send_notif&trans_next=notif" class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-attachment text-primary mr-1"></i>Daily Disconnection Notice </a>
<a href="http://kaelco.000.pe/Upgrade/dist/mailer.php?tran=send_notif&trans_next=sending_notif" class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-attachment text-primary mr-1"></i>Sending Disconnection Notice </a>

</div>


</div>
</div>
<div class="attachments-sections pcon2 overflow-auto">
<?php

$trans_next = $_GET['trans_next'];

if($trans_next == "notif"){

?>
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

 date_default_timezone_set('Asia/Manila');
$dateinset =date("F d, Y");

$action  = $_GET['trans_next'];

//echo$action;
   $info1 = mysqli_query($db,"SELECT  fbilmast.NEWACTS as facc , fbilmast.CURRENTBIL as bill, fbilmast.CNAME as name, fbilmast.DUEDATE as duedate, fbilmast.BILLSTAT, emails.NEWACTS as eacc FROM emails INNER JOIN fbilmast WHERE fbilmast.NEWACTS = emails.NEWACTS AND fbilmast.BILLSTAT ='A' ");
while ($row = mysqli_fetch_array($info1))
{
//echo$row['duedate']."<br>";
$dateinset;
$date1 = $dateinset;
$date2 = $row['duedate'];
   $acc2 =$row['facc'];
if(ctype_digit($acc2) && strlen($acc2) == 10) {
$acc2 = substr($acc2, 0, 2) .'-'.
            substr($acc2, 2, 4) .'-'.
            substr($acc2, 6);
}
$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$bg="white";
if(strtotime($date2) < strtotime($date1)){


}
 $days_set=$days;
 
 if($days <=2){
   $color="";
    //$bg="#ff9600ad";
 
if($days <=0){
   $color="white";
    $bg=" #ec8651";
    $days_set ="Meet the due date";
}

echo"<tr style ='background-color:".$bg.";color:".$color.";'>";
echo"<td>".$acc2."</td> ";
echo"<td>".$row['name']."</td> ";
echo"<td>". number_format($row['bill']/100, 2,'.',',')."</td> ";
echo"<td>". date('F d, Y', strtotime($row['duedate']))."</td> ";
echo"<td>".$days_set."</td> ";
echo"</tr>";
//echo $days."<br>".$date1.")(".$date2."<br>";



}
}
}else{

?>

	<div class="row">
<label class="switch col-1 m-1" style="width:15px;">

<input class="switch__input" type ="hidden" value="" id ="checkval">
	<input class="switch__input" value ="0" type="checkbox" role="switch">
	<span class="switch__handle">
		<span class="switch__handle-sides">
			<span class="switch__handle-side"></span>
		</span>
		<span class="switch__handle-labels">
        			<span class="switch__handle-label" aria-hidden="true">START</span>
			<span class="switch__handle-label"  aria-hidden="true">STOP</span>

		</span>
		<span class="switch__handle-texture"></span>
	</span>
	<span class="switch__label">Power</span>
</label>
<span class="col-5" >Start Sending Notification</span>
</div>
<div id="load">


  <div>G</div>
  <div>N</div>
  <div>I</div>
  <div>D</div>
  <div>N</div>
  <div>E</div>
  <div>S</div>
</div>



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
                      </tbody>
                      </tbody>
<?php



}

?>

</tbody>
</table>


<style>

.button {
	/* 	design the outer circle */
	width: 150px;
	height: 150px;
	border-radius: 50%;
	border: 1px solid #ddd;
	box-shadow: 0 0 5px 0px #888;

	/* 	required to position children elements */
	position: relative;

	/* 	required to center elements*/
	display: grid;
	place-items: center;
}

.button::before {
	/* 	pseudo-elements don't display if content property is not declared */
	content: "";

	/* 	design the inner-ring */
	width: 50%;
	height: 50%;
	border: 10px solid #eee;
	border-radius: 50%;
	position: absolute;
}

.light {
	/* 	design the vertical light */
	height: 30%;
	width: 10px;
	background: #eee;
	border-radius: 10px;

	/* 	position the light correctly */
	position: absolute;
	top: 20px;

	/* 	required to give white-space to inner-ring */
	box-shadow: 0 0 0 10px #fff;
}

.button:hover {
	cursor: pointer;
}

.button:active {
	box-shadow: 0 0 10px 0px #888 inset;
}

.button:active .light {
	background: lightgreen;
}

.button:active::before {
	border-color: lightgreen;
}
.on{
background: lightgreen;
}

/*=========================
GENERAL CODE FOR CENTERING ELEMENTS ON THE PAGE.
UNRELATED TO THIS TUTORIAL.
===========================*/

</style>
