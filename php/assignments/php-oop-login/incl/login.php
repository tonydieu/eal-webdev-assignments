<?php
// create a new user.
$user_info = new User("mdam@eal.dk", "1234", "01", "Morten Damgaard", TRUE);
$user = $user_info->username;
$pass = $user_info->password;

if(isset($_POST['submit'])) {
  // call Login() when user submit.
  $login = new Login();
}

class User {
  // define properties.
  public $username;
  public $password;
  public $userID;
  public $name;
  public $active;

  public function __construct($username,$password, $userID, $name, $active){
    $this->username=$username;
    $this->password=$password;
    $this->userID=$userID;
    $this->name=$name;
    $this->active=$active;
  }

}

// class definition.
class Login {
  public function Login() {
  // check if username or password is empty.
    $username = isset($_POST['username']) ? $_POST['username'] : false;
    $password = isset($_POST['password']) ? $_POST['password'] : false;

    if ($username && $password) {
    // validate email
      if (!(filter_var($username, FILTER_VALIDATE_EMAIL))) {
        echo "This $username email address is not valid.";
      }
      else {
      // verify user and pass.
        self::LogMeIn($username, $password);
      }
    }
    else if ($username && (!($password))) {
    // empty password field.
      echo "You didn't fill out your password.";
      return false;
    }
    else if ((!($username)) && $password) {
    // empty username field.
      echo "You didn't fill out your username.";
      return false;
    }
    else if ((!($username)) && (!($password))) {
    // empty username and password.
      echo "You didn't fill out your username and password.";
    }
    else {
    // someting went wrong.
      echo "An unknown error occurred.";
    }
  }

  public static function LogMeIn($username, $password) {
    global $user;
    global $pass;

    if ((!($username == $user))) {
      echo "User not found.";
    }
    else {
      if (($username == $user) && ($password == $pass)) {
        echo "Logged in.";
      }
      else {
        echo "wrong username or password.";
      }
    }
  }
}