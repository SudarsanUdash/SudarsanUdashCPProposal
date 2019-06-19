<?php
require_once('admindashboardheader.php')
?><?php
//including the database connection file
include_once("includes/Crud.php");
 
$crud = new Crud();
 
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM products ORDER BY id DESC";
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

<Pa <div class="listpgWraper">
  <div class="container">
    <div class="row">
        <h1 class="page-heading">View All Products</h1>
        <div class="userccount">
        <div class="tab-content"> 
 <!-- Page Content -->
       <div class="">
    <div class="container">
    <div class="col-md-10 col-lg-offset-1">
    <div class="mt-wrapper mt-style-button1">


    </div>
        <div> 
                       
                       <?php
//including the database connection file
include_once("includes/Crud.php");
 
$crud = new Crud();
 
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM products ORDER BY id DESC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>
                        <div class="panel-body">
      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
   <thead>
<br/><br/>
    <tr bgcolor='#CCCCCC'>
        <td>Product Name</td>
         <td>Manufacture Location</td>
          <td>Manufacture Date</td>
           <td>Product Quantity</td>
            <td>Product Price</td>
            <td>Phone Number</td>
             
        
        <td>Update</td>
    </tr>

    <?php 

    foreach ($result as $key => $res) {
    //while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";


        echo "<td>".$res['productname']."</td>";
          echo "<td>".$res['manufacturelocation']."</td>";
            echo "<td>".$res['manufacturedate']."</td>";
              echo "<td>".$res['productquantity']."</td>";
                echo "<td>".$res['productprice']."</td>";
                 echo "<td>".$res['phonenumber']."</td>";
                 
          
        echo "<td><a href=\"editproducts.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
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

