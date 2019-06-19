<?php
require_once('admindashboardheader.php')
?>
 
<body>
<?php
//including the database connection file
include_once("includes/Crud.php");
include_once("includes/Validation.php");
 
$crud = new Crud();
$validation = new Validation();
 
if(isset($_POST['Submit'])) {    
    $firstname = $crud->escape_string($_POST['firstname']);
       $lastname = $crud->escape_string($_POST['lastname']);
          $email = $crud->escape_string($_POST['email']);
             $phonenumber = $crud->escape_string($_POST['phonenumber']);
                $location = $crud->escape_string($_POST['location']);
                   $dateofbirth = $crud->escape_string($_POST['dateofbirth']);
                      $password = $crud->escape_string($_POST['password']);
   
        
  
   $msg = $validation->check_empty($_POST, array('firstname', 'lastname','email','phonenumber','location','dateofbirth','password'));
   
    $check_email = $validation->is_email_valid($_POST['email']);
    
    // checking empty fields
    if($msg != null) {
        echo $msg;        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
   
    } elseif (!$check_email) {
        echo 'Please provide proper email.';
    }    
    else { 
        // if all the fields are filled (not empty) 
            
        //insert data to database    
        $result = $crud->execute("INSERT INTO users(firstname,lastname,email,phonenumber,location,dateofbirth,password) VALUES('$firstname','$lastname','$email','$phonenumber','$location','dateofbirth','password')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>