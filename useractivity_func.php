<?php

    $play.= "
   <script>
       $('<audio></audio>').attr({
    'src':'audio/not.mp3',
    'volume':0.2,
    loop: false,
   preload: true,
    'autoplay':'false'
}).appendTo('#audioarea');
   
   </script>
   
   ";
  // echo$play;
include 'con.php';
  $info = mysqli_query($db,"SELECT * FROM  user_activity  ORDER BY id DESC LIMIT 100 ");
while ($inforow = mysqli_fetch_array($info))
{
      $load++;

$action = $inforow['action'];
$date = $inforow['date_'];
  echo '
  
  <ol class="list-group list-group">
 
';
echo'
 <li class="list-group-item d-flex justify-content-between align-items-start mt-1">
    <div class="ms-2 me-auto">
      <div ></div>
'.$action.'
    </div>
    <span class="badge = rounded-pill" style=" background-color:#157f91;">'.date("M d, Y h:i:sa", strtotime($date)).'</span>
  </li>

';


echo"</ol>";

}

?>