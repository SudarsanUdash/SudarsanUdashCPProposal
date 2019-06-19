<?php
require_once('admindashboardheader.php')
?>
<?php
// including the database connection file
include_once("includes/Crud.php");
include_once("includes/Validation.php");
 
$crud = new Crud();
$validation = new Validation();
 
if(isset($_POST['update']))
{    
    $id = $crud->escape_string($_POST['id']);
    
    $productname = $crud->escape_string($_POST['productname']);
     $manufacturelocation = $crud->escape_string($_POST['manufacturelocation']);
      $manufacturedate = $crud->escape_string($_POST['manufacturedate']);
       $productquantity = $crud->escape_string($_POST['productquantity']);
        $productprice = $crud->escape_string($_POST['productprice']);
    


     
   
    
    
    $msg = $validation->check_empty($_POST, array('productname', 'manufacturelocation', 'manufacturedate','productquantity','productprice'));
   
   
    
    // checking empty fields
    if($msg) {
        echo $msg;        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } 
    else {    
        //updating the table
        $result = $crud->execute("UPDATE products SET productname='$productname', manufacturelocation='$manufacturelocation',manufacturedate='$manufacturedate', productquantity='$productquantity', productprice='$productprice' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
       echo $msg='Successful';
    }
  }
