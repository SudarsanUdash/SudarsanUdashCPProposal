<?php
require_once('dashboardheader.php');
require_once('class/booking.class.php');
$booking = new booking;

if(isset($_POST['bookingsubmit']))
{
  $booking = $booking->save();
  if(is_integer($booking))
  {
    $msg = 'Booking Successful';
  }
  else
  {
    $msg = 'Booking Unsuccessful';
  }
}
?>

<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Add a New Booking</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>Add a New Booking</span></div>
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
         <label>Email:</label>
         <input type="email" name="email" class="form-control" placeholder="email" required>
         </div>
              
           <div class="formrow">
                    <label> Phone Number:</label>
                  <input type="text" name="phonenumber" class="form-control" placeholder="Phone Number" required>
                </div>
          <div class="formrow">
                    <label> Product Name:</label>
                  <input type="text" name="productname" class="form-control" placeholder="Product Name"  required>
                </div>
            
             
            
               
                    <div class="formrow">
                        <label>Manufacture Location</label>
                        <input type="text" name="manufacturelocation" class="form-control" placeholder="Manufacture Location" required>
                    </div>
               
               
                    <div class="formrow">
                        <label>Product Quantity:</label>
                        <input type="number"  class="form-control " placeholder="Product Quantity" name="productquantity" required>
                    </div>
              
              
                    <div class="formrow">
                        <label>Product Price:</label>
                        <input type="number"  class="form-control " placeholder="Negotiable through manual communication" name="productprice" required>
                    </div>
              
              <input type="submit" name="bookingsubmit"id="submitbutton" class="btn" value="Add Now">
               
            </div>

              </form>
          </div>
      </div>
      </div>
 
   </div>
<?php
include('footer.php');
?>

 

