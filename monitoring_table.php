
<input type="hidden" id="ini" value="<?php echo$ini; ?>">
<script> 


  $(document).ready(function()
	

{


    $(".remove").off('click').click( function(){

var _acc = $(this).val();

var _ini = $("#ini").val();

   $("#res").empty();
       $.ajax({
        url:'monitoring_remove.php',
        type: 'POST',
        async : true,
        data: {acc:_acc},
        dataType: 'text',
        success: function(data){
       $("#res").html(data);
          console.log(data);
           
        }
      });



       $.ajax({
        url:'monitoring_table.php',
        type: 'POST',
        async : true,
        data: {ini:_ini},
        dataType: 'text',
        success: function(data){
       $("#res1").html(data);
          console.log(data);
           
        }
      });
});


});


</script>