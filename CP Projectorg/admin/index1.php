<?php
require_once('admindashboardheader.php')
?><?php
//including the database connection file
include_once("includes/Crud.php");
 
$crud = new Crud();
 
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM users ORDER BY id DESC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
  <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

 <!-- Page Content -->
       <div class="listpgWraper">
  <div class="container">
    <div class="row">
        <h1 class="page-heading">View All Registered Users</h1>
        <div class="userccount">
        <div class="tab-content"> 
 <!-- Page Content -->
       <div class="">
    <div class="container">
    <div class="col-md-10 col-lg-offset-1">
    <div class="mt-wrapper mt-style-button1">


    </div>
        <div> 



    </div>

        <div> <div class="mt-button-text"><a href="add1.php" class="mt-style-button normal">      <i class="fa fa-user fa-5x"></i>Add New User</a> </div>
                       
                       <?php
//including the database connection file
include_once("includes/Crud.php");
 
$crud = new Crud();
 
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM users ORDER BY id DESC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>
                        <div class="panel-body">
      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
   <thead>
<br/><br/>
    <tr bgcolor='#CCCCCC'>
        <td>firstname</td>
         <td>lastname</td>
          <td>email</td>
           <td>phonenumber</td>
            <td>location</td>
             <td>dateofbirth</td>
              <td>password</td>
        
        <td>Update</td>
    </tr>

    <?php 

    foreach ($result as $key => $res) {
    //while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";

        echo "<td>".$res['firstname']."</td>";
          echo "<td>".$res['lastname']."</td>";
            echo "<td>".$res['email']."</td>";
              echo "<td>".$res['phonenumber']."</td>";
                echo "<td>".$res['location']."</td>";
                  echo "<td>".$res['dateofbirth']."</td>";
                    echo "<td>".$res['password']."</td>";
          
        echo "<td><a href=\"edit.php?id=$res[ID]\">Edit</a> | <a href=\"delete.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
    }
    ?>
   </thead>
  </table>
</div></div>
</div></div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
require_once('footer.php')
?>
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

