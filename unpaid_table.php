

<?php

include 'con.php';
$an =  $_POST["an"];

$id=  $_POST["id"];
$del =  $_POST["del"];



if($del == 1){
    $sql = "DELETE FROM fledg WHERE id =$id ";

if ($db->query($sql) === TRUE) {
  echo "Record Successfully Removed !";
  $del =0;
} else {
  echo "Error deleting record: " . $conn->error;
}
}


$sql = "SELECT * FROM fledg WHERE NEWACTS = $an ";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row

  while($row = mysqli_fetch_assoc($result)) {
         $amount = preg_replace('/[.,]/', '', $row['LA']);
         $month = $row['LY']."01";
         $id= $row['id'];
      $total +=$amount;
  echo"
<tr>

<td  >".$row['NEWACTS']."</td>
<td>". date("M-Y", strtotime($month))."</td>
<td  >".number_format($amount/100, 2,'.',',')."</td>
<td> <button type='button' class='ed btn btn-dark' amount='".$amount."' id = '".$id."'  mont='".$row['LY']."' style='color:#39f; '>


<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pen' viewBox='0 0 16 16'>
  <path d='m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z'/>
</svg>

</button> 
</td>

</tr>


";
  }
}
echo'<tr>


<td  ><h5>TOTAL : <b>'.number_format($total/100, 2,'.',',').'</h4></b> </h5></td>
<td></td>
<td></td>
<td  ></td>

</tr>';


?>


<script> 


  $(document).ready(function()
	

{


      $('.ed').off('click').click( function(event){
$("#month").val($(this).attr("mont"));
$('.del').attr("id", ($(this).attr("id"));
});




});


</script>
