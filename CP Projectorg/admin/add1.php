
<?php
require_once('admindashboardheader.php')
?>

    
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Add New User</h1>
      </div>
      
    </div>
  
<!-- Page Title End -->
<div class="listpgWraper">
  <div class="container">
    <div class="row">
      
        <div class="userccount">
        <div class="tab-content"> 
    <form action="adduser.php" method="post" name="form1">
         <div id="wsell" class="formpanel tab-pane fade in active">
        <table width="25%" border="0">
            <div class="formrow">
            <tr> 
                <td>First Name</td>
                <td><input type="text" class="form-control" name="firstname" required></td>
            </tr>
        </div>
        <div class="formrow">
            <tr> 
                <td>Last Name</td>
                <td><input type="text" class="form-control"name="lastname" required></td>
            </tr>
        </div>
        <div class="formrow">
            <tr> 
                <td>Email</td>
                <td><input type="email" class="form-control" name="email"required></td>
            </tr>
        </div>
        <div class="formrow">
            <tr> 
                <td>Phone Number</td>
                <td><input type="number" class="form-control "name="phonenumber" required></td>
            </tr>
        </div>
        <div class="formrow">
            <tr> 
                <td>Location</td>
                <td><input type="text" class="form-control "name="location" required></td>
            </tr>
        </div>
        <div class="formrow">
            <tr> 
                <td>Date of Birth</td>
                <td><input type="date" class="form-control" name="dateofbirth" required></td>
            </tr>
        </div>
        <div class="formrow">
            <tr> 
                <td>Password</td>
                <td><input type="password" class="form-control" name="password" required></td>
            </tr>
           </div>

            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</div>
</div>
</div>
</div>
</div>
</form>

<?php
require_once('footer.php')
?>
