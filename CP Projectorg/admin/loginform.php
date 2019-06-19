<?php
require_once('topnavigation.php');
?>
<?php

include_once 'class/user.class.php';
$user = new User();

if (isset($_POST['submit'])) { 
        extract($_POST);   
        $login = $user->check_login($emailusername, $password);
        // print_r($login); exit;
        if ($login) {
          @session_start();
          $role = $_SESSION['role'];
          if($role==1)
          {
            header("location:admindashboard.php");
          }else
          {
            header("location:Dashboard.php");
            // Registration Success
          }
           
        } else {
            // Registration Failed
            echo 'Wrong username or password';
        }
    }
?>
  
    <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
        
            <form action=""  method="post" name="login">
              <h2 class="text-center">Login</h2>  

            <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="username">Email</label>
                  <input type="text" id="username" name="emailusername" class="form-control" required>
                </div>
              </div>

<div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="password">Password</label>
                  <input type="password" id="password" name="password" class="form-control" required>
                </div>
              </div>

           <div class="form-group">
                <div class="col-md-12">
                   <button type="submit" class="btn btn-primary  py-2 px-4 rounded-0" name="submit" value="Login" onclick="return(submitlogin());">Login</button>
                </div>
              </div>

<p>
      Don't have an account? <a href="signup.php">Sign up</a>
    </p>

  </form></div></div></div>
<?php
require_once('footer.php');
?>
    <script>
      function submitlogin() {
        var form = document.login;
        if (form.emailusername.value == "") {
          alert("Enter email or username.");
          return false;
        } else if (form.password.value == "") {
          alert("Enter password.");
          return false;
        }
      }
    </script>




