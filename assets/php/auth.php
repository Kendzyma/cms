<?php


require_once 'config.php';
class Auth extends  Database{
  // Register new user
  public function register($name,$email,$password){
    $sql ="insert into users (name,email,password) values (:name, :email,:pass)";
    $stmt=$this->conn->prepare($sql);
    $stmt->execute(['name'=>$name,'email'=>$email,'pass'=>$password]);
    return true;
  }
  // check if user is already registered

  public function user_exist($email){
    $sql="SELECT email from users where email=:email";
    $stmt=$this->conn->prepare($sql);
    $stmt->execute(['email'=>$email]);
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;

  }
  // Login Existing users
  public function login($email){
    $sql = "SELECT email, password FROM users WHERE email=:email AND deleted !=0";
    $stmt=$this->conn->prepare($sql);
    $stmt->execute(['email'=>$email]);
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
  }
  //Current user in session
  public function currentUser($email){
    $sql="SELECT * FROM users WHERE email=:email AND deleted !=0";
    $stmt=$this->conn->prepare($sql);
    $stmt->execute(['email'=>$email]);
    $row =$stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
  }
  // Forgot PASSWORD
  public function forgot_password($token,$email){
    $sql="UPDATE users SET token=:token,token_expire=DATE_ADD(NOW(), INTERVAL 10 MINUTE) WHERE email =:email";
    $stmt=$this->conn->prepare($sql);
    $stmt->execute(['token'=>$token,'email'=>$email]);
    return true;
  }
  // Reset password user auth
  public function reset_pass_auth($email,$token){
    $sql="SELECT id FROM users Where email=:email AND token=:token AND token!='' AND token_expire > NOW() AND deleted !=0";
    $stmt=$this->conn->prepare($sql);
    $stmt->execute(['email'=>$email,'token'=>$token]);
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
  }
  // Update new password
  public function update_new_pass($pass,$email){
    $sql="UPDATE users SET token ='',password=:pass WHERE email =:email AND deleted !=0";
    $stmt=$this->conn->prepare($sql);
    $stmt->execute(['pass'=>$pass,'email'=>$email]);
    return true;
  }
}
