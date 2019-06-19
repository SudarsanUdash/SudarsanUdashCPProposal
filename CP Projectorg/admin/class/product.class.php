<?php

require_once('common.class.php');

class product extends Common
{
	public $id,$productname,$manufacturelocation,$manufacturedate,$productquantity,$productprice,$phonenumber,$image;
	

        public function save()
        {
                 
                   $this->productname = $_POST['productname'];
                 
                   $this->manufacturelocation = $_POST['manufacturelocation'];
                   $this->manufacturedate = $_POST['manufacturedate'];
                   $this->productquantity = $_POST['productquantity'];
                    $this->productprice = $_POST['productprice'];
                     $this->phonenumber = $_POST['phonenumber'];
                      $this->image = $_POST['image'];

                     $img=$_FILES['image']['name'];
                     $temping=$_FILES['image']['tmp_name'];
                     $image-> setImage($image);
                     if ($image -> save())
                     {
                      move_uploaded_file($temping,"uploads/" .$img);
                      ?>
                      <?php
                      header('location:addnewproduct.php?msg=product added');
                       $this->image = $_POST['image'];
                     }
                    
                $sql = "insert into products (productname,manufacturelocation,manufacturedate,phonenumber,productquantity,productprice,image) values ('$this->productname','$this->manufacturelocation','$this->manufacturedate','$this->phonenumber','$this->productquantity','$this->productprice','$this->image')"; 
                return $this->insert($sql);
        }


        public function retrieve()
        {
                $sql = "select * from products";
                return $this->select($sql);
        }


        public function destroy()
        {
                
        }


        public function edit()
        {
                
        }

           public function getproductsByKeyword($keyword)
{
  $sql = "select * from products where title like '%$keyword%' or short_detail like '%$keyword%' or detail like '%$keyword%' ";
  return $this->select($sql); 
}

}




?>