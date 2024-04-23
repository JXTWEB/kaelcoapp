<!DOCTYPE html>
<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<body>





<canvas id="myChart" style="width:100%;max-width:90%"></canvas>

<script>


const d = new Date();
let year = d.getFullYear();
const xValues = ["Jan "+year, "Feb "+year, "Mar "+year, "Apr "+year, "May "+year, "Jun "+year, "Jul "+year,"Aug "+year, "Sep "+year, "Oct "+year, "Nov "+year, "Dec "+year];
const yValues = [<?php 

include 'con.php';

    $month=     date("m");
    $year =  date("Y");
   for ($x=0; $x<= 12; $x++){
$totalcollstr = mysqli_query($db,"SELECT SUM(COLLAMT) AS totalcoll  FROM `ftotcoll`  WHERE MONTH(COLLDATE) = '$x' AND YEAR(COLLDATE) = '$year' ");
while ($tcoll = mysqli_fetch_array($totalcollstr))
{
$gtcoll = $tcoll['totalcoll'];



}

echo $gtcoll.", ";
   }

?>];
const barColors = ['#ff0000', '#7FFFD4', '#FF7F50', '#7FFF00', '#483D8B', '#FF1493', '#7B68EE', '#B0E0E6', '#F5DEB3', '#40E0D0', '#87CEEB', '#FF0000'];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Collection For The Month January To December "+year
    }, tooltips: {
         callbacks: {
            label: function(t, d) {
                var totalcol = t.yLabel.toString();
var formattedNumber = (totalcol / 100).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
           var totalcol2 = t.xLabel.toString();
var formattedNumber2 = (totalcol2 / 100).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");

               var xLabel = formattedNumber2;
               var yLabel =  formattedNumber;
               return  yLabel;
            }
         }},    scales: {
         yAxes: [{
            ticks: {


               callback: function(value, index, yValues) {
                                var totalcol1 = value;
var formattedNumber1 = (totalcol1 / 100).toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
              
                     return formattedNumber1;
                
               }
            }
         }]
      }
  }, 
});

</script>

</body>
</html>
