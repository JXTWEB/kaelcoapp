<?php


$xml=simplexml_load_file("http://ip-api.com/xml/ipaddress");
echo $xml->RegionName;

?>


<?php
$computerId = $_SERVER['HTTP_USER_AGENT'].$_SERVER['LOCAL_ADDR'].$_SERVER['LOCAL_PORT'].$_SERVER['REMOTE_ADDR'];
echo$computerId;
?>



<?php
    session_start();
    echo "<h3> PHP List All Session Variables</h3>";
    foreach ($_SESSION as $key=>$val)
    echo $key." ".$val."<br/>";

echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
    
?>