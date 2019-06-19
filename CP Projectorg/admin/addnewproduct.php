<?php
require_once('dashboardheader.php');
require_once('class/product.class.php');
$product = new product;

if(isset($_POST['addproductsubmit']))
{
  $product = $product->save();
  
  if(is_integer($product))
  {
    $msg = 'Product Successfully Added';
  }
  else
  {
    $msg = 'Unsuccessful';
  }
}
?>

<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Product Adding</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>Add New Product</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->
<div class="listpgWraper">
  <div class="container">
    <div class="row">
      
        <div class="userccount">
        <div class="tab-content">
        <form action="" method="post">
           <?php if(isset($msg))
            echo $msg;
           ?>
         <div id="wsell" class="formpanel tab-pane fade in active">
        
          <div class="formrow">
                    <label> Product Name:</label>
                  <input type="text" name="productname" class="form-control" placeholder="Product Name"  required>
                </div>
            
               
                    <div class="formrow">
                        <label>Manufacture Location</label>
                        <input type="text" name="manufacturelocation" class="form-control" placeholder="Manufacture Location" required>
                    </div>
               <div class="formrow">
           <label>Date of Maufacture:</label>
           <input type="date" name="manufacturedate" class="form-control" placeholder="Date of Manufacture" required>
           </div>
               
                    <div class="formrow">
                        <label>Product Quantity:</label>
                        <input type="number"  class="form-control " placeholder="Product Quantity" name="productquantity" required>
                    </div>
              
                
                    <div class="formrow">
                        <label>Product Price:</label>
                        <input type="number"  name="productprice" class="form-control " placeholder="Price in Rupees"
                    </div>
                      <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" class="form-control" name="image" required>
                                        </div>
                    <br>
                     <form action="">
                      <input type="radio" name="negotiable" value="Negotiable"> Negotiable
                      <input type="radio" name="notnegotiable" value="Not Negotiable"> Not Negotiable
                    </form>

<br>
                  <br>
                    <div class="formrow">
                        <label>Phone Number</label>
                        <input type="number"  class="form-control " placeholder="Phone Number" name="phonenumber" required>
                    </div>
              
              
              <input type="submit" name="addproductsubmit" id="submitbutton" class="btn" value="Add Product">
               
            </div>

              </form>
          </div>
		  </div>
      </div>
 
   </div>

 </div>

 <?php
include('footer.php');
?>

