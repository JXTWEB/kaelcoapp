


 <?php

//error_reporting(0);
include 'con.php';
$an =  $_POST["an"];
$month = $_POST["month"];



$amount = $_POST["amount"];

if(!$an || !$month || !$amount){
echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>You Have To Fill Up All Fields!</strong> 
 
</div>';
}else{



$query = "SELECT NEWACTS FROM  fbilmast  WHERE NEWACTS = $an ";

$result = $db->query($query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
  

$query1 = "SELECT NEWACTS, LY FROM  fledg  WHERE NEWACTS = $an AND LY = $month ";

$checkexist = $db->query($query1);

if ($checkexist) {
    if (mysqli_num_rows($checkexist) > 0) {

$sql = "UPDATE fledg SET LY = $month, LA = $amount  WHERE NEWACTS = $an AND LY = $month ";

if ($db->query($sql) === TRUE) {
  echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Successfully Updated !</strong> 
 
</div>';


  echo'<script>
  
  $("#month").focus(); 
   </script>';
} else {
  echo "Error updating record: " . $conn->error;
}



    }else{
$sql1 = "INSERT INTO fledg (NEWACTS, LY, LA)
VALUES ('$an', '$month', '$amount')";

if ($db->query($sql1) === TRUE) {
  echo "New record created successfully";
  echo'<script>
  
  $("#month").focus(); 
   </script>';
} else {
  echo "Error: " . $sql1 . "<br>" . $db->error;
}
    }
    
    }






    } else {
        echo 'UnDefined Account Number !';
    }
} else {
    echo 'Error: ' . mysqli_error();
}







}

?>