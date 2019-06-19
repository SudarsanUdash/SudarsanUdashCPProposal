<?php 
  include "db_config.php";
  class User{
    protected $db;
    public function __construct(){
      $this->db = new DB_con();
      $this->db = $this->db->ret_obj();
    }

    public function reg_user($firstname, $lastname, $email, $phonenumber, $location, $dateofbirth, $password){
      //echo "k";
      
      $password = md5($password);

 
      //checking if the username or email is available in db
      $query = "SELECT * FROM users WHERE email='$email'";
      
      $result = $this->db->query($query) or die($this->db->error);
      
      $count_row = $result->num_rows;
      
      //if the username is not in db then insert to the table
      
      if($count_row == 0){
        $query = "INSERT INTO users SET firstname='$firstname', lastname='$lastname', email='$email', location='$location', dateofbirth='$dateofbirth', password='$password'";
        
        $result = $this->db->query($query) or die($this->db->error);
        
        return true;
      }
      else{return false;}
      
      
      }
      
      
  /*** for login process ***/
    public function check_login($emailusername, $password){
        $password = md5($password);
    
    $query = "SELECT * from users WHERE email='$emailusername' and password='$password'";
    
    $result = $this->db->query($query) or die($this->db->error);

    
    $user_data = $result->fetch_array(MYSQLI_ASSOC);
    // print_r($user_data);exit;
    $count_row = $result->num_rows;
    
    if ($count_row == 1) {
              @session_start();
              $_SESSION['login'] = true; // this login var will use for the session thing
              $_SESSION['role'] = $user_data['role'];
               $_SESSION['firstname'] = $user_data['firstname'];
                $_SESSION['email'] = $user_data['email'];
              return true;
          }
      
    else{return false;}
    

  }

  public function get_fullname($id){
    $query = "SELECT firstname FROM users WHERE id = $id";
    
    $result = $this->db->query($query) or die($this->db->error);
    
    $user_data = $result->fetch_array(MYSQLI_ASSOC);
    echo $user_data['firstname'];
    
  }
  
  /*** starting the session ***/
  public function get_session(){
      return $_SESSION['login'];
      }

  public function user_logout() {
      $_SESSION['login'] = FALSE;
    unset($_SESSION);
      session_destroy();
      }
      public function getusersByKeyword($keyword)
{
  $sql = "select * from users where title like '%$keyword%' or short_detail like '%$keyword%' or detail like '%$keyword%' and role = 0";
  return $this->select($sql); 
}

  
  }
