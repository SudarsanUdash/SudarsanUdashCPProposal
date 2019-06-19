<?php
require_once('admindashboardheader.php')
?>
<?php
// including the database connection file
include_once("includes/Crud.php");
include_once("includes/Validation.php");
 
$crud = new Crud();
$validation = new Validation();
 
if(isset($_POST['update']))
{    
    $id = $crud->escape_string($_POST['id']);
    
    $firstname = $crud->escape_string($_POST['firstname']);
     $lastname = $crud->escape_string($_POST['lastname']);
      $email = $crud->escape_string($_POST['email']);
       $phonenumber = $crud->escape_string($_POST['phonenumber']);
        $location = $crud->escape_string($_POST['location']);
         $dateofbirth = $crud->escape_string($_POST['dateofbirth']);
          $password = $crud->escape_string($_POST['password']);
   
    
    
    $msg = $validation->check_empty($_POST, array('firstname', 'lastname', 'email','phonenumber','location','dateofbirth','password'));
   
    $check_email = $validation->is_email_valid($_POST['email']);
    
    // checking empty fields
    if($msg) {
        echo $msg;        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } 
    elseif (!$check_email) {
        echo 'Please provide proper email.';    
    } else {    
        //updating the table
        $result = $crud->execute("UPDATE users SET firstname='$firstname', lastname='$lastname',email='$email', phonenumber='$phonenumber', location='$location', dateofbirth='$dateofbirth', password='$password' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
       echo $msg='Successful';
    }
  }
