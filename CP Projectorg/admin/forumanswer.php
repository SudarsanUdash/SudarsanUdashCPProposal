<?php 


require_once('topnavigation.php');


require_once('class/answer.class.php');


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

    </div>
        <div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                      
    <br>
    <?php
    $answer= new answer();


if(isset($_POST['answersubmit']))
{
$answer= $answer->save();
  if(is_integer($answer))
  {
    $msg = 'User Register';
  }
  else
  {
    $msg = 'User Not Register';
  }
}
?>
    <form action="" method="post">
   Your Name Here
   <br> <input type="text" name="replier" required="compulsary">
    <br>
 Answer Here
 <br><textarea name="answer"></textarea>
<br>
<br>
<button type="submit" name="answersubmit">Submit</button>
</form>
<br>
<?php
$answer = new answer();

$res = $answer->retrieve();
?>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Previous Replies</th>                                 
                                       <th>Replied By</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($res as $k=>$fn) { ?>
                                    <tr class="odd gradeX">
                                        <td> <?php echo $k + 1; ?></td>
                                        <td> <?php echo $fn->answer; ?></td>
                                        <td> <?php echo $fn->replier; ?></td>
                                           
                                           
                                     
                                         
                                      
                                          
                                       
                                        


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
