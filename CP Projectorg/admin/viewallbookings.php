<?php 


require_once('dashboardheader.php');

require_once('class/booking.class.php');


$booking = new booking();

$res = $booking->retrieve();


?>
<!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">List All Bookings</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Bookings List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Booked By</th>
                                        <th>Phone Number</th>
                                        <th>Product Name</th>
                                     
                                        <th>Required Location of manufacture</th>
                                        <th>Required Quantity</th>
                                        <th>Price Estimation</th>
                                           <th>Action</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($res as $k=>$ab) { ?>
                                	<tr class="odd gradeX">
                                        <td> <?php echo $k + 1; ?></td>
                                        <td> <?php echo $ab->email; ?></td>
                                           <td> <?php echo $ab->phonenumber; ?></td>
                                            <td> <?php echo $ab->productname; ?></td>
                                            
                                              <td> <?php echo $ab->manufacturelocation; ?></td>
                                               <td> <?php echo $ab->productquantity; ?></td>
                                                <td> <?php echo $ab->productprice; ?></td>
                                     
                                    	 
                                      
                                          
                                       
                                        
                                       
 <td>
     <a href="deleteuser.php? id=<?php echo $fn->id; ?>" name="deleteuserbtn" class="btn btn-danger" onclick = "return confirm ('Are you sure to accept the order?')"> Accept Order </a>
    </td>
                                    </tr> 
                                <?php } ?>
                                </tbody>
                                </tbody>                            
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->






<?php 
require_once('footer.php');
?>
 <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>

    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>

    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

      <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
