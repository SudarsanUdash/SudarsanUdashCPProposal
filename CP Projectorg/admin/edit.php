
<?php
require_once('admindashboardheader.php')
?><?php
// including the database connection file
include_once("includes/Crud.php");
 
$crud = new Crud();
 
//getting id from url
$id = $crud->escape_string($_GET['id']);
 
//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM users WHERE id=$id");
 
foreach ($result as $res) {

    $firstname = $res['firstname'];
    $lastname = $res['lastname'];
    $email = $res['email'];
    $phonenumber = $res['phonenumber'];
    $location = $res['location'];
    $dateofbirth = $res['dateofbirth'];
    $password = $res['password'];

}
?>


    
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Edit User Profile</h1>
      </div>
      
    </div>
<!-- Page Title End -->
<div class="listpgWraper">
  <div class="container">
    <div class="row">
      
        <div class="userccount">
        <div class="tab-content"> 
    
    <form name="form1" method="post" action="editaction.php">
        <table border="0">
            <div class="formrow">
            <tr> 
                <td>First Name</td>
                <td><input type="text" name="firstname" class="form-control "value="<?php echo $firstname;?>" required></td>
            </tr>
        </div>
        <div class="formrow">
             <tr> 
                <td> Last Name</td>
                <td><input type="text" name="lastname" class="form-control" value="<?php echo $lastname;?>" required></td>
            </tr>
        </div>
        <div class="formrow">
             <tr> 
                <td>Email</td>
                <td><input type="email" name="email" class="form-control" value="<?php echo $email;?>" required></td>
            </tr>
        </div>
             <tr> 
                <td>Phone Number</td>
                <td><input type="number" name="phonenumber" class="form-control" value="<?php echo $phonenumber;?>" required></td>
            </tr>
            <div class="formrow">
             <tr> 
                <td>Location</td>
                <td><input type="text" name="location" class="form-control" value="<?php echo $location;?>" required></td>
            </tr>
        </div>
        <div class="formrow">
             <tr> 
                <td>Date of birth</td>
                <td><input type="date" name="dateofbirth" class="form-control" value="<?php echo $dateofbirth;?>" required></td>
            </tr>
        </div>
        <div class="formrow">
             <tr> 
                <td>Password</td>
                <td><input type="password" name="password" class="form-control" value="<?php echo $password;?>" required></td>
            </tr>
        </div>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</div>
</div>
</div>
</div>
</div>
<?php
require_once('footer.php')
?>
