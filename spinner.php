<?php
include 'header.php';

?>
<style>

.wrapper{
    background-color:black;
}
.draw_side_pannel{
background-color:black;
right:0;
width:40%;
height:100%;
    position:absolute;
}
</style>



<div class="card" style="border-radius:0; background-color:#49505a;">
  <div class="card-header" data-coreui-toggle="collapse" data-coreui-target="#actarea" aria-expanded="false" aria-controls="flush-collapseOne" >
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
  <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5z"/>
</svg> <span style="position:absolute;left:45;color:white;"><b>KAELCO RAFFLE DRAW</b></span> 


  </div>
</div>

<div class="wrapper d-flex flex-column min-vh-100 min-vw-50" style="background-color:#616b7af2;position:relative;">

<div class="draw_side_pannel">
asd
</div>


<script src="https://cdn-script.com/ajax/libs/jquery/1.6.2/jquery.js"></script>

<!--<input type="button" value="Click Me" rel="button_reason_someOtherBadCode" /> -->

 <div id="venues" style="float: left"><ul  /></div>

<div id="wheel"  style="position:absolute; left:0;">
    <canvas id="canvas" width="1000" height="600"></canvas>
</div>

<div id="stats">
    <div id="counter"></div>
</div>



<script>
  $('#venues').css("display","none");
// Helpers
shuffle = function(o) {
  for (var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
  return o;
};

String.prototype.hashCode = function() {
  // See http://www.cse.yorku.ca/~oz/hash.html        
  var hash = 5381;
  for (i = 0; i < this.length; i++) {
    char = this.charCodeAt(i);
    hash = ((hash << 5) + hash) + char;
    hash = hash & hash; // Convert to 32bit integer
  }
  return hash;
}

Number.prototype.mod = function(n) {
  return ((this % n) + n) % n;
}

// List of venues. These are foursquare IDs, with the idea that eventually it'll tie in 
venues = {

<?php

   $info1 = mysqli_query($db,"SELECT * FROM `convert` WHERE COL2 IS NOT NULL AND COL3 IS NOT NULL LIMIT 198");
while ($row = mysqli_fetch_array($info1))
{
     echo' "'.$row["COL2"].'": "'.$row["COL3"].'",';
}


?>

};

$(function() {

  var venueContainer = $('#venues ul');
  $.each(venues, function(key, item) {
    venueContainer.append(
      $(document.createElement("li")).append(
        $(document.createElement("input")).attr({
          id: 'venue-' + key,
          name: item,
          value: item,
          type: 'checkbox',
          checked: true
        }).change(function() {
          var cbox = $(this)[0];
          var segments = wheel.segments;
          var i = segments.indexOf(cbox.value);

          if (cbox.checked && i == -1) {
            segments.push(cbox.value);

          } else if (!cbox.checked && i != -1) {
            segments.splice(i, 1);
          }

          segments.sort();
          wheel.update();
        })

      ).append(
        $(document.createElement('label')).attr({
          'for': 'venue-' + key
        }).text(item)))
  });

  $('#venues ul>li').tsort("input", {
    attr: "value"
  });


});

// WHEEL!
var wheel = {

  timerHandle: 0,
  timerDelay: 2,

  angleCurrent: 0,
  angleDelta: 0,

  size: 290,

  canvasContext: null,

  colors: ['#ffff00', '#ffc700', '#ff9100', '#ff6301', '#ff0000', '#c6037e',
    '#713697', '#444ea1', '#2772b2', '#0297ba', '#008e5b', '#8ac819'
  ],

  segments: [],

  seg_colors: [],
  // Cache of segments to colors
  maxSpeed: Math.PI / 16,

  upTime: 1000,
  // How long to spin up for (in ms)
  downTime: 90000,
  // How long to slow down for (in ms)
  spinStart: 0,

  frames: 0,

  centerX: 300,
  centerY: 300,

  spin: function() {

    // Start the wheel only if it's not already spinning
    if (wheel.timerHandle == 0) {
      wheel.spinStart = new Date().getTime();
      wheel.maxSpeed = Math.PI / (16 + Math.random()); // Randomly vary how hard the spin is
      wheel.frames = 0;
      wheel.sound.play();

      wheel.timerHandle = setInterval(wheel.onTimerTick, wheel.timerDelay);
    }
  },

  onTimerTick: function() {

    wheel.frames++;

    wheel.draw();

    var duration = (new Date().getTime() - wheel.spinStart);
    var progress = 0;
    var finished = false;

    if (duration < wheel.upTime) {
      progress = duration / wheel.upTime;
      wheel.angleDelta = wheel.maxSpeed * Math.sin(progress * Math.PI / 2);
    } else {
      progress = duration / wheel.downTime;
      wheel.angleDelta = wheel.maxSpeed * Math.sin(progress * Math.PI / 2 + Math.PI / 2);
      if (progress >= 1) finished = true;
    }

    wheel.angleCurrent += wheel.angleDelta;
    while (wheel.angleCurrent >= Math.PI * 2)
      // Keep the angle in a reasonable range
      wheel.angleCurrent -= Math.PI * 2;

    if (finished) {
      clearInterval(wheel.timerHandle);
      wheel.timerHandle = 0;
      wheel.angleDelta = 0;

    //  $("#counter").html((wheel.frames / duration * 1000) + " FPS");
    }

    /*
            // Display RPM
            var rpm = (wheel.angleDelta * (1000 / wheel.timerDelay) * 60) / (Math.PI * 2);
            $("#counter").html( Math.round(rpm) + " RPM" );
             */
  },

  init: function(optionList) {
    try {
      wheel.initWheel();
      wheel.initAudio();
      wheel.initCanvas();
      wheel.draw();

      $.extend(wheel, optionList);

    } catch (exceptionData) {
      alert('Wheel is not loaded ' + exceptionData);
    }

  },

  initAudio: function() {
    var sound = document.createElement('audio');
    sound.setAttribute('src', 'http://bramp.net/javascript/wheel.mp3');
    wheel.sound = sound;
  },

  initCanvas: function() {
    var canvas = $('#wheel #canvas').get(0);

    if ($.browser.msie) {
      canvas = document.createElement('canvas');
      $(canvas).attr('width', 1000).attr('height', 600).attr('id', 'canvas').appendTo('.wheel');
      canvas = G_vmlCanvasManager.initElement(canvas);
    }

    canvas.addEventListener("click", wheel.spin, true);
    wheel.canvasContext = canvas.getContext("2d");
    wheel.spinStart=0;
  },

  initWheel: function() {
    shuffle(wheel.colors);
  },

  // Called when segments have changed
  update: function() {
    // Ensure we start mid way on a item
    //var r = Math.floor(Math.random() * wheel.segments.length);
    var r = 0;
    wheel.angleCurrent = ((r + 0.5) / wheel.segments.length) * Math.PI * 2;

    var segments = wheel.segments;
    var len = segments.length;
    var colors = wheel.colors;
    var colorLen = colors.length;

    // Generate a color cache (so we have consistant coloring)
    var seg_color = new Array();
    for (var i = 0; i < len; i++)
      seg_color.push(colors[segments[i].hashCode().mod(colorLen)]);

    wheel.seg_color = seg_color;

    wheel.draw();
  },

  draw: function() {
    wheel.clear();
    wheel.drawWheel();
    wheel.drawNeedle();
  },

  clear: function() {
    var ctx = wheel.canvasContext;
    ctx.clearRect(0, 0, 1000, 800);
  },

  drawNeedle: function() {
    var ctx = wheel.canvasContext;
    var centerX = wheel.centerX;
    var centerY = wheel.centerY;
    var size = wheel.size;

    ctx.lineWidth = 1;
    ctx.strokeStyle = '#000000';
    ctx.fileStyle = '#ffffff';

    ctx.beginPath();

    ctx.moveTo(centerX + size - 40, centerY);
    ctx.lineTo(centerX + size + 20, centerY - 10);
    ctx.lineTo(centerX + size + 20, centerY + 10);
    ctx.closePath();

    ctx.stroke();
    ctx.fill();

    // Which segment is being pointed to?
    var i = wheel.segments.length - Math.floor((wheel.angleCurrent / (Math.PI * 2)) * wheel.segments.length) - 1;

    // Now draw the winning name
    ctx.textAlign = "left";
    ctx.textBaseline = "middle";
    ctx.fillStyle = 'white';
    ctx.font = "1.5em Arial";
    ctx.fillText(wheel.segments[i], centerX + size + 25, centerY);
  },

  drawSegment: function(key, lastAngle, angle) {
    var ctx = wheel.canvasContext;
    var centerX = wheel.centerX;
    var centerY = wheel.centerY;
    var size = wheel.size;

    var segments = wheel.segments;
    var len = wheel.segments.length;
    var colors = wheel.seg_color;

    var value = segments[key];

    ctx.save();
    ctx.beginPath();

    // Start in the centre
    ctx.moveTo(centerX, centerY);
    ctx.arc(centerX, centerY, size, lastAngle, angle, false); // Draw a arc around the edge
    ctx.lineTo(centerX, centerY); // Now draw a line back to the centre
    // Clip anything that follows to this area
    //ctx.clip(); // It would be best to clip, but we can double performance without it
    ctx.closePath();

    ctx.fillStyle = colors[key];
    ctx.fill();
    ctx.stroke();

    // Now draw the text
    ctx.save(); // The save ensures this works on Android devices
    ctx.translate(centerX, centerY);
    ctx.rotate((lastAngle + angle) / 2);

    ctx.fillStyle = 'white';
    ctx.fillText(value.substr(0, 20), size / 2 + 20, 0);
    ctx.restore();

    ctx.restore();
  },

  drawWheel: function() {
    var ctx = wheel.canvasContext;

    var angleCurrent = wheel.angleCurrent;
    var lastAngle = angleCurrent;

    var segments = wheel.segments;
    var len = wheel.segments.length;
    var colors = wheel.colors;
    var colorsLen = wheel.colors.length;

    var centerX = wheel.centerX;
    var centerY = wheel.centerY;
    var size = wheel.size;

    var PI2 = Math.PI * 2;

    ctx.lineWidth = 1;
    ctx.strokeStyle = 'white';
    ctx.textBaseline = "middle";
    ctx.textAlign = "center";
    ctx.font = "0.6em Arial";

    for (var i = 1; i <= len; i++) {
      var angle = PI2 * (i / len) + angleCurrent;
      wheel.drawSegment(i - 1, lastAngle, angle);
      lastAngle = angle;
    }
    // Draw a center circle
    ctx.beginPath();
    ctx.arc(centerX, centerY, 20, 0, PI2, false);
    ctx.closePath();

    ctx.fillStyle = '#ffffff';
    ctx.strokeStyle = '#000000';
    ctx.fill();
    ctx.stroke();

    // Draw outer circle
    ctx.beginPath();
    ctx.arc(centerX, centerY, size, 0, PI2, false);
    ctx.closePath();

    ctx.lineWidth = 10;
    ctx.strokeStyle = '#000000';
    ctx.stroke();
  },
}

window.onload = function() {
  wheel.init();

  var segments = new Array();
  $.each($('#venues input:checked'), function(key, cbox) {
    segments.push(cbox.value);
  });

  wheel.segments = segments;
  wheel.update();

  // Hide the address bar (for mobile devices)!
  setTimeout(function() {
    window.scrollTo(0, 1);
  }, 0);
}

$('input[rel^="button_reason"]').live('click', function(event) {
wheel.spinStart=0;
});
var action =0;

 document.body.addEventListener("keydown", wheel.spin, true);
document.body.addEventListener("keydown", function(event) {
    if (event.keyCode == 13) {
        action++;
        if(action >1){
            action=0;
        }
if(action == 0){
    wheel.spinStart=0;
}else{
    wheel.spinStart = new Date().getTime();
}
       // alert(action);
    }
});
      </script>







</div>



      
      <footer class="footer"><span id="audioarea"></span>
        <div><a href="http://randeljeffdelprado95.epizy.com/">Full Stack WEB</a><a href="http://randeljeffdelprado95.epizy.com/">DEV</a> © 120995.</div>
        <div class="ms-auto"><a href="https://web.facebook.com/jeff000.me">RANDEL JEFF D. DEL PRADO</a></div>
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="vendors/chart.js/js/chart.min.js"></script>
    <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/main.js"></script>
    

  </body>
</html>


