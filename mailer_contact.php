
<div class="row">
<div class="col-md-12 mb-2 mt-4">


<div class="btn-group">
<button type="button" class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-attachment text-primary mr-1"></i>List OF Contacts </button>
<a href="http://kaelco.000.pe/Upgrade/dist/mailer.php?action=start&pause=1&ptype=<?php echo$ptype;?>&cp=<?php echo$cp;?>&cn=<?php echo$cn;?>&pname=<?php echo$pname;?>" class="btn btn-sm btn-outline-secondary"><i class="mdi mdi-delete text-primary mr-1"></i>Register Email</a>

</div>


</div>
</div>

<h5><?php 

echo$pname;

?></h5>
<div class="sender-details">

<div class="details">

<table class="table mb-0">
                      <thead class="fw-semibold text-disabled">
                        <tr class="align-middle">
                          <th class="text-center">
                     P-TYPE
                          </th>
                          <th>Preferential Description</th>
               <th>Email</th>
                       <th>Contact Person</th>
                       <th>Contact No.</th>
                         <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
             


    <?php

    $info = mysqli_query($db,"SELECT * FROM `gmail`");
while ($inforow = mysqli_fetch_array($info))
{
    $ptype = $inforow['PTYPE'];
            $info_ = mysqli_query($db,"SELECT PTYPE,DESCRIP FROM fbilpref WHERE PTYPE='$ptype' LIMIT 1 ");
while ($inforow_ = mysqli_fetch_array($info_))
{
$ptype1 = $inforow_['DESCRIP'];
}
?>


  <tr class="align-middle" id ="<?php echo$ptype; ?>area" >
                          <td class="text-center"><?php echo$ptype; ?></td>
                          <td ><?php echo$ptype1; ?></td>
                          <td ><?php echo$inforow['EMAIL'];  ?></td>
                          <td class="text-center"><?php echo$inforow['CONTACT_PERSON'];  ?></td>
                          <td class="text-center"><?php echo$inforow['CONTACT_NO'];  ?> </td>                                                                                                        
                         <td class="text-center">
<a href ="http://kaelco.000.pe/Upgrade/dist/mailer_remove_contact.php?id=<?php echo$inforow['id'] ?>" >
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill text-danger" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/>
</svg> </a>
<a data-bs-toggle="modal" data-bs-target="#<?php echo$ptype; ?>exampleModal">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square text-primary" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg>
</a>
</td>   
  </tr>                        



<!-- Modal -->
<div class="modal fade" id="<?php echo$ptype; ?>exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title fs-5" id="exampleModalLabel"><?php echo$ptype1; ?></h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" style="border:none;" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
</svg></button>
      </div>
      <div class="modal-body">
      <div class="form-group row p-2 " id ="register">
      <p class=" w-50 col-4">PTYPE</p>
<input class="form-control  col-8" type="search" style="border-radius:0;" value="<?php echo$ptype; ?>" placeholder="Enter Contact Person" id="<?php echo$ptype; ?>ptype" disabled>
      <p class=" w-50 col-4">Description</p>
<input class="form-control  col-8" type="search" style="border-radius:0;" value="<?php echo$ptype1; ?>" placeholder="Enter Contact Person" id="<?php echo$ptype; ?>desc" disabled>
      <p class=" w-50 col-4">Email</p>
<input class="form-control  col-8" type="search" style="border-radius:0;" value="<?php echo$inforow['EMAIL'];  ?>" placeholder="Enter Contact Person" id="<?php echo$ptype; ?>email">
      <p class=" w-50 col-4">Contact Person</p>
<input class="form-control  col-8" type="search" style="border-radius:0;" value="<?php echo$inforow['CONTACT_PERSON'];  ?>" placeholder="Enter Contact Person" id="<?php echo$ptype; ?>cp">
      <p class=" w-50 col-4">Contact No.</p>
<input class="form-control  col-8" type="search" style="border-radius:0;" value="<?php echo$inforow['CONTACT_NO'];  ?>" placeholder="Enter Contact Person" id="<?php echo$ptype; ?>cn">

</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary u_c_btn" value="<?php echo$ptype; ?>" >Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php


}


    ?>
     
                
                      </tbody>





                    </table>



</div>
</div>
