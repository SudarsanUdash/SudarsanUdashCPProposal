<?php


require_once('topnavigation.php');

$keyword = $_GET['keyword'];
$product = $product->getuproductsByKeyword($keyword);
 

?>



<div class="wrapper">
  <div id="breadcrumb">
    <ul>
      <li class="iddex.php">You Are Here</li>
      <li>&#187;</li>
      <li><a href="index.php">Home</a></li>
      <li>&#187;</li>
      <li class="current"><a href="">Search</a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <?php foreach($product as $n) { ?>
   <p>
    <a href="index1.php?id=<?php echo $n->id; ?>"><h3><?php echo $n->productname; ?></h3></a> 
    <?php echo $n->productname; ?>
   </p>

 <?php } ?>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="adblock">
    <div class="fl_left"><a href="#"><img src="../images/demo/468x60.gif" alt="" /></a></div>
    <div class="fl_right"><a href="#"><img src="../images/demo/468x60.gif" alt="" /></a></div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
