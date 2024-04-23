<html lang="en">
  <head>
    <base href="./">
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
 <title> Jeff-xt-web </title>
<link href="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.3.0/dist/css/coreui.min.css" rel="stylesheet" integrity="sha384-2E9/b2fZ+VJoP6eRIpzzMFkuqbh0qDkIFVLzJJwkESsdKPEwzb0n6E55enZ+Ee8V" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.3.0/dist/js/coreui.bundle.min.js" integrity="sha384-Iqk8EE7ao72xAVBuuQTEwrU5N2IdvpJER5ZzM6LxwcXHqj2WstttaOvopXziv0nU" crossorigin="anonymous"></script>
</head>
<div class="table-responsive">
                    <table class="table border mb-0">
                      <thead class="table-light fw-semibold">



<?php

function convertExponentialToDecimal($number) {

  $full_string = $number;

  $is_exponential = preg_match('/^\$?[+-]?\d+(\.\d+)?[Ee][+-]?\d+$/i', $full_string ); // check if the number is in exponential notation
  if ($is_exponential) {
    
      $decimal = sprintf("%.20f", $full_string );
      $decimal = bcmul($decimal, '1', 20);
      $decimal = rtrim($decimal, '0');
      $decimal = rtrim($decimal, '.');

  } else {
      $decimal = (float)$full_string;
  }

  return $decimal;

}
 
include 'con.php';
$totalcollstr = mysqli_query($db,"SELECT SUM(COLLAMT) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = 11 AND YEAR(COLLDATE) = 2023 ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$gtcoll = $tcoll['totalcoll'];
}

$date_string = date("F-Y");
        
  //$date_current =  date("Y-m");
$date_current = "2023-09";
$resultcoll = mysqli_query($db,"SELECT TELLCODE, COLLDATE, SUM(COLLAMT) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = 11 AND YEAR(COLLDATE) = 2023  GROUP BY TELLCODE ORDER BY SUM(COLLAMT) DESC LIMIT 10");
while ($coll = mysqli_fetch_array($resultcoll))
{
$tellini = $coll['TELLCODE'];
    $date1 = $coll['COLLDATE'];
    $totalcol = $coll['totalcoll'];
    $date1= date('Y-m', strtotime($date1));

$percentage =$totalcol;
$totalWidth =$gtcoll;
                                preg_match('/(.*\.[0-9]{2})/', $percentage, $matches);
 preg_match('/(.*\.[0-9]{2})/',$totalWidth, $matches);
echo $matches[1];  

$new_width = (int)($percentage *100)/$totalWidth ; 
//$new_width= floor( $percentage / 100.0) *$totalWidth ;

$result = mysqli_query($db,"SELECT * FROM ftellers WHERE TELINI = '$tellini'  ");
while ($tel = mysqli_fetch_array($result))
{

$name = $tel['TELLNAME'];
}

?>
 

                  
                      <tbody>
                        <tr class="align-middle">
                          <td class="text-center">
                            <div class="avatar avatar-md"><img class="avatar-img" src="Kaelco Logo.jpg" alt="user@email.com"></div>
                          </td>
                          <td>
                            <div><?php echo $name;  $totalcol;?></div>
                            <div class="small text-medium-emphasis"><span>Collection</span> | For The Month OF <?php echo$date_string ?> </div>
                          </td>
                          <td class="text-center">
                            <svg class="icon icon-xl">
                              <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-us"></use>
                            </svg>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-start">
                                <div class="fw-semibold"><?php

                                
                                 echo convertExponentialToDecimal($new_width); ?>%</div>
                              </div>
                              <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
                            </div>
                            <div class="progress progress-thin">
                              <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo convertExponentialToDecimal($new_width); ?>%" aria-valuenow="<?php echo convertExponentialToDecimal($new_width); ?>" aria-valuemin="0" aria-valuemax="<?php echo floor($totalWidth); ?>"></div>
                            </div>
                          </td>
                          <td class="text-center">
                          <?php  echo number_format($totalcol/100, 2,'.',','); ?>
                          </td>
                      
                        </tr>
                        
   <?php } ?>

                    
                      </tbody>
                    </table>

                    
                  </div>