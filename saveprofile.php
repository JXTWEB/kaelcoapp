<?php

include 'con.php';
    $ini =$_POST["ini"];
    	$newFilename =$_FILES["file"]["name"];
 	$location = 'profile/' . $newFilename.rand();  
 
    $exist = 0;
$result = mysqli_query($db,"SELECT * FROM profile WHERE ini = '$ini' ");
while ($tel = mysqli_fetch_array($result))
{
$geturl = $tel['url'];

 $exist = 1;
}
if($exist == 0){
     $qry = "INSERT INTO profile (`url`, `ini`) VALUES ('$location', '$ini') ";

if($db->query($qry) === TRUE){
	 if (move_uploaded_file($_FILES["file"]["tmp_name"], $location)){


echo"<script> window.location.href = 'dashboard.php'; </script>";



	 }
 


}
}else{
    $sql = "UPDATE profile SET url='$location' WHERE ini='$ini'";

if ($db->query($sql) === TRUE) {
 
 if(unlink($geturl)){  
if (move_uploaded_file($_FILES["file"]["tmp_name"], $location)){echo"<script> window.location.href = 'dashboard.php'; </script>"; }  

} 

}

}


echo$location;

?>