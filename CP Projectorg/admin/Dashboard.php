<?php
include('dashboardheader.php');
@session_start();
$role = $_SESSION['role'];
$name = $_SESSION['firstname'];
?>



<body>
             
                         
            
                

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="color: black;">Welcome <?php echo $name; ?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>Community Forum</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><a href="Dashboardforum.php">View Queries</a></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
              
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>My Product</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><a href="addnewproduct.php">Add New Product</a></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                         <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><a href="viewmyproducts.php.php">View My Products</a></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Advertised Users</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><a href="#">View Advertised Users</a></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>

                </div>
                 <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>Online Booking</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><a href="addanewbooking.php">Add a New Booking</a></span>

                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><a href="viewallbookings.php">View all bookings</a></span>
                                
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
          <div>
            <br>

                   <h1> View All Products Below</h1>
                  
                 
                    <?php 



require_once('class/product.class.php');

$product = new product();

$res = $product->retrieve();


?>
<!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

 
             


                                <tbody>
                                    <?php foreach ($res as $k=>$fn) { ?>
<div class="container-fluid">
    <br>
    <br>
  
  <div class="row">
    <div class="col-sm-3 col-sm-3" style="background-color:lightblue;">
      <p><img src="assets/images/welcome-bg.jpg"></p>
       
    </div>
    <div class="col-sm-3 col-sm-3" style="background-color:white;">
     
        
       
                                       
                                       <div>ProductName:<?php echo $fn->productname; ?></div>
                                        <br>
                                          
                                            <div> ManufactureLocation<?php echo $fn->manufacturelocation; ?></div>
                                            <br>
                                             <div> ManufactureDate<?php echo $fn->manufacturedate; ?></div>
                                             <br>
                                              <div>ProductQuantity <?php echo $fn->productquantity; ?></div>
                                              <br>
                                               <div> ProdutPrice<?php echo $fn->productprice; ?></div>
    </div>
     <div class="col-sm-3 col-sm-3" style="background-color:lightblue;">
                                             
 <a href="edituser.php? id=<?php echo $r->id; ?>" class="btn btn-warning"><i class="fa fa-shopping-cart"></i> Order</a> 

 <br>
  <br>
<label>Product Review:<textarea name="productreview" placeholder="Please leave your review here"></textarea><button name="reviewsubmitbutton">SubmitReview</button></label>
 <button class="btn btn-warning"><i class="fa fa-phone"> :<?php echo $fn->productprice; ?></i> </a> 
    </div>
  </div>
</div>

                                                                                
                                       
                                         
                                                                                 
                                       
                                    
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

                </div>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
   
<?php
include('footer.php');
?>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
