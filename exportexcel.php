
    <table class="table table-bordered">
         <tr>  
             <th>Name</th>  
             <th>Address</th>  
             <th>City</th>  
             <th>Postal Code</th>
             <th>Country</th>
         </tr>
         <?php
         include 'con.php';
    $info = mysqli_query($db,"SELECT NEWACTS, CNAME, CADDRESS, NEWMSN FROM  fbilmast   LIMIT 22");

         while($row = mysqli_fetch_array($info))  
         {  
            echo '  
         <tr>  
             <td>'.$row["NEWACTS"].'</td>  
             <td>'.$row["CNAME"].'</td>  
             <td>'.$row["City"].'</td>  
             <td>'.$row["PostalCode"].'</td>  
             <td>'.$row["Country"].'</td>
         </tr>  
            ';  
         }
         ?>
   </table>
   <br />
   <form method="post" action="export.php">
       <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>