<?php
include 'con.php';


$acc =  $_POST["acc"];
$ini =  $_POST["ini"];
$aname =  $_POST["aname"];
$or =  $_POST["or"];
 date_default_timezone_set('Asia/Manila');
$dateinset =date("Y-m-d");
$res =0;
  $info = mysqli_query($db,"SELECT NEWACTS FROM  fbilmast  WHERE NEWACTS = '$acc'  LIMIT 1");
while ($inforow = mysqli_fetch_array($info))
{
    
$res =1;

}

if($res == "1"){

    $qry = "INSERT INTO `monitoring` ( `ini`, `agent_name`, `NEWACTS`, `OR_NO`, `DATE`) VALUES ( '$ini', '$aname', '$acc', '$or', '$dateinset')";

    if($db->query($qry) === TRUE){
  
  
?>
   <div class="alert alert-success" role="alert">Successfully Added !</div>

<script> 


  $(document).ready(function()
	

{

window.location.href = 'disconnection_monitoring.php';

    });

    </script>
<?php
    }else{
        echo"<script> alert('Connection Error!'); </script>";
    }
}else{
?>


  <div class="alert alert-danger" role="alert">Invalid Account No.</div>


<?php 


}
?>