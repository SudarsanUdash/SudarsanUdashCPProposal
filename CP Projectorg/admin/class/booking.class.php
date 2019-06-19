<?php

require_once('common.class.php');

class booking extends Common
{
	public $id,$email,$phonenumber,$productname,$manufacturelocation,$productquantity,$productprice;
	

        public function save()
        {
                 $this->email = $_POST['email'];
                  $this->phonenumber = $_POST['phonenumber'];
                   $this->productname = $_POST['productname'];
             
                   $this->manufacturelocation = $_POST['manufacturelocation'];
                   $this->productquantity = $_POST['productquantity'];
                    $this->productprice = $_POST['productprice'];
                    
                $sql = "insert into bookings (email,phonenumber,productname,manufacturelocation,productquantity,productprice) values ('$this->email','$this->phonenumber','$this->productname','$this->manufacturelocation','$this->productquantity','$this->productprice')"; 
                return $this->insert($sql);
        }


        public function retrieve()
        {
                $sql = "select * from bookings";
                return $this->select($sql);
        }


        public function destroy()
        {
                
        }


        public function edit()
        {
                
        }

         public function getusersByKeyword($keyword)
{
  $sql = "select * from users where title like '%$keyword%' or short_detail like '%$keyword%' or detail like '%$keyword%' and role = 0";
  return $this->select($sql); 
}
 
}




?>