
<?php
require_once('admindashboardheader.php')
?><?php
// including the database connection file
include_once("includes/Crud.php");
 
$crud = new Crud();
 
//getting id from url
$id = $crud->escape_string($_GET['id']);
 
//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM products WHERE id=$id");
 
foreach ($result as $res) {

    $productname = $res['productname'];
       $manufacturelocation = $res['manufacturelocation'];
          $manufacturedate = $res['manufacturedate'];
             $productquantity = $res['productquantity'];
                $productprice = $res['productprice'];
                 $phonenumber = $res['phonenumber'];
   
}
?>


    
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Edit User Profile</h1>
      </div>
      
    </div>
<!-- Page Title End -->
<div class="listpgWraper">
  <div class="container">
    <div class="row">
      
        <div class="userccount">
        <div class="tab-content"> 
    
    <form name="form1" method="post" action="editproductaction.php">
        <table border="0">
            <div class="formrow">
            <tr> 
                <td>Product Name</td>
                <td><input type="text" name="productname" class="form-control "value="<?php echo $productname;?>" required></td>
            </tr>
        </div>
        <div class="formrow">
             <tr> 
                <td> Manufacture Location</td>
                <td><input type="text" name="manufacturelocation" class="form-control" value="<?php echo $manufacturelocation;?>" required></td>
            </tr>
        </div>
        <div class="formrow">
             <tr> 
                <td>Manufacture Date</td>
                <td><input type="date" name="manufacturedate" class="form-control" value="<?php echo $manufacturedate;?>" required></td>
            </tr>
        </div>
             <tr> 
                <td>Product Quantity</td>
                <td><input type="number" name="productquantity" class="form-control" value="<?php echo $productquantity;?>" required></td>
            </tr>
            <div class="formrow">
             <tr> 
                <td>Product Proce</td>
                <td><input type="number" name="productprice" class="form-control" value="<?php echo $productprice;?>" required></td>
            </tr>
        </div>
         <div class="formrow">
             <tr> 
                <td>Phonenumber</td>
                <td><input type="number" name="phonenumber" class="form-control" value="<?php echo $phonenumber;?>" required></td>
            </tr>
        </div>
       
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</div>
</div>
</div>
</div>
</div>
<?php
require_once('footer.php')
?>
