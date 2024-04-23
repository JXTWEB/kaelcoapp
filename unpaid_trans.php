<!DOCTYPE html><!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io/product/free-bootstrap-admin-template/
* Copyright (c) 2023 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
--><!-- Breadcrumb-->
<html lang="en">
  <head>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">


 
    <!-- Vendors styles-->
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">


      </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky m-1 p-1">

        <div class="container-fluid">

          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
   
  Kalinga-Apayao Electric Cooperative, Inc.
          Callagdao, Bulanao, Tabuk City Kalinga
          </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg></a>

          <ul class="header-nav ms-3">
      
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
           
                <div class="avatar avatar-md"><img class="avatar-img" src="Kaelco Logo.jpg" alt="user@email.com"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Account</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                  </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                  </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                  </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                  </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Settings</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                  </svg> Profile</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                  </svg> Settings</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
              </li>
              <li class="breadcrumb-item active"><span>KAELCO LEDGER</span></li>
            </ol>
          </nav>
        </div>
      </header>

      <div class="body flex-grow-1 px-3">
       
  <div class="row">
            <div class="col-sm-6 col-lg-4 p-1">


<div class="card">
  <div class="card-header">
ADD UNPAID BILLS
  </div>
  <div class="card-body">

 
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">ACT. #</span>
  <input type="number" class="form-control" id="an" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" tabindex="1">
</div>



<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">MONTH</span>
  <input type="text" class="form-control" id="month" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" tabindex="3">
</div>


<div class="input-group mb-3 p-1">
  <span class="input-group-text">&#8369;</span>
  <span class="input-group-text">0.00</span>
  <input type="text" class="form-control" id="amount" aria-label="Dollar amount (with dot and two decimal places)" tabindex="4">
</div>



<button type='button' amount='".$amount."'  mont='".$row['LY']."' id='' class='del btn btn-dark' style='color:#e86464'>

<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>

  <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>
</svg>

</button>

    <span id="res"></span>
  </div>

  
</div>



</div><div class="col-sm-6 col-lg-8 p-1">


<div class="card">
  <div class="card-header">
SUMMARY
  </div>
  <div class="card-body">

<table class="table table-striped">

  <tbody>
   
           <tr>
			
               
               
                    <th >Account No.</th>
                    <th>Year-Month</th>
                    <th >Amount</th>
                         <th >Action</th>
                  </tr>
                </thead>
        
        
	
			         <tbody id="showtable">
			  
                </tbody>
</table>

</div>
</div>


</div></div>

      </div>
      <footer class="footer">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">JEFF TEMPLATE</a> © 120995.</div>
        <div class="ms-auto">DEVELOPER<a href="https://coreui.io/docs/">RANDEL JEFF D> DEL PRADO</a></div>
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
    <script>
    </script>

  </body>
</html>


<script> 


  $(document).ready(function()
	

{
     $("#an").attr('maxlength','10');

$(document).keyup(function(e) {
    if (e.key === "Enter")
    {

   $("#showtable").empty();
   $("#showtable").append('<div class="d-flex align-items-center"> <strong>Loading...</strong> <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div></div>');
      $("#res").empty();
var _an = $('#an').val();
var _month = $('#month').val();
var _amount = $('#amount').val();

 $.ajax({
        url:'unpaid_function.php',
        type: 'POST',
        async : true,
        data: {an:_an, month:_month, amount:_amount},
        dataType: 'text',
        success: function(data){
              $("#showtable").empty();
       $("#res").html(data);
          console.log(data);
           
        }
      });



 $.ajax({
        url:'unpaid_table.php',
        type: 'POST',
        async : true,
        data: {an:_an},
        dataType: 'text',
        success: function(data){
       $("#showtable").html(data);
          console.log(data);
           
        }
      });


         }else  if (e.key === "Escape")
    {
 $('#month').val("");
$('#amount').val("");
    }
});





      $('.del').off('click').click( function(event){

   
   


var _id =$(this).attr("id");

alert(_id);
var _del  = 1;
 $("#showtable").empty();
$("#showtable").append('<div class="d-flex align-items-center"> <strong>Loading...</strong> <div class="spinner-border ml-auto" role="status" aria-hidden="true"></div></div>');
 $.ajax({
        url:'unpaid_table.php',
        type: 'POST',
        async : true,
        data: {id:_id, del:_del},
        dataType: 'text',
        success: function(data){
            
       $("#showtable").html(data);
          console.log(data);
         
        }
      });
});





});


</script>


