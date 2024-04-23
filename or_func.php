
<?php


include 'con.php';
//$db1 = mysqli_connect("localhost", "kaelco_buckup", "iSAJm3ZTxrR", "kaelco_buckup");
//if (!$db1) {
 // die("Connection failed: " . mysqli_connect_error());
//}

$or =  $_POST["or"];

//$or =  $_GET["or"];
$maxor = $or +49;

//for($y =$or;$y <= $maxor ;$y++){
include 'con.php';
$find =0;

$resultmonth1 = mysqli_query($db,"SELECT * FROM fbilledg  ");
while ($rowpayment = mysqli_fetch_array($resultmonth1))
{

for($x =1;$x <= 22 ;$x++){





if($rowpayment['LT'.$x] =="P"){

if($rowpayment['LR'.$x] == $or){
$find =1;
 $date = $rowpayment['LD'.$x];
 $dr = $rowpayment['LR'.$x];
 $initfbil_collectedby  = substr($rowpayment['LE'.$x] ,0,3);
 $nitfbil_lenght = strlen($rowpayment['LE'.$x]);
$result2 = mysqli_query($db,"SELECT * FROM ftellers WHERE TELINI = '$initfbil_collectedby'  ");
while ($tel2 = mysqli_fetch_array($result2))
{

$name_coll = $tel2['TELLNAME'];
$name_pos = $tel2['TELLNAME'];
}
 


    if($nitfbil_lenght == 7){
        $initfbil_postedby= substr($rowpayment['LE'.$x],-3);
 $initfbil_collectedby  = substr($rowpayment['LE'.$x] ,0,3);
$result = mysqli_query($db,"SELECT * FROM ftellers WHERE TELINI = '$initfbil_postedby'  ");
while ($tel = mysqli_fetch_array($result))
{

$name_pos = $tel['TELLNAME'];
}

$result1 = mysqli_query($db,"SELECT * FROM ftellers WHERE TELINI = '$initfbil_collectedby'  ");
while ($tel1 = mysqli_fetch_array($result1))
{

$name_coll = $tel1['TELLNAME'];
}

}

}
	



}}
}
if($find ==1){
    mysqli_close($db);
?>

<div class="card" style="width: 18rem;">

  <div class="card-body">
      <p class="card-text" style ="padding:0; margin:0;">Collector/Agent/Deputies/Teller</p>
    <h5 class="card-title"><?php echo$name_coll;  ?></h5>

  </div>
  <ul class="list-group list-group-flush">
   <li class="list-group-item">OR: <b><?php  echo " ".$dr; ?></b></li>
    <li class="list-group-item">Date Posted:<b><?php echo' '.$date;  ?>  </b></li>
   
    <li class="list-group-item">Posted By:<b> <?php echo" ".$name_pos; ?></b></li>
  </ul>
  <div class="card-body">
    
  </div>
</div>
</div>

  <script>

  $(document).ready(function()
	

{
  


      $(".spinner").css("display", "none");
      

 
    
         
 

});

  
    </script>
';
<?php
}if($find ==0){

?>
 <script>

  $(document).ready(function()
	

{
  


      $(".spinner").css("display", "none");
      

 
    
         
 

});

  
    </script>
    NOT FOUND!

<?php

}
//}





//$showtables = mysqli_query($db1,"SELECT table_name, engine FROM information_schema.tables WHERE table_type = 'BASE TABLE' AND table_schema='kaelco_buckup' ORDER BY table_name ASC  ");

//while ($table=mysqli_fetch_array($showtables)) {
  
//$ttb =($table[0]);

//$ttb."<br>";

//$resultmonth1 = mysqli_query($db1,"SELECT * FROM $ttb  ");





//}






?>