<?php 


require_once('topnavigation.php');

require_once('class/forumquestion.class.php');

$forumquestion = new forumquestion();

$res = $forumquestion->retrieve();


?>
<!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

 <!-- Page Content -->
       <div class="">
    <div class="container">
    <div class="col-md-10 col-lg-offset-1">
    <div class="mt-wrapper mt-style-button1">

        <div class="mt-button-text"><a href="addForum.php" class="mt-style-button normal">+ New Topic</a> </div>

    </div>
        <div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Submitted by</th>
                                        <th>Question</th>
                                        
                                      
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($res as $k=>$fn) { ?>
                                    <tr class="odd gradeX">
                                        <td> <?php echo $k + 1; ?></td>
                                        <td> <?php echo $fn->username; ?></td>
                                           <td> <?php echo $fn->question; ?></td>
                                           
                                     
                                         
                                      
                                          
                                       
                                        
 <td><a href="forumanswer.php">Reply Here</a></td>
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
