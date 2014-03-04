<?php
if(isset($_POST['submit'])) {
  // call Login() when user submit.
  $login = new Login();
}

class User {
  // define properties.
  private $username;
  private $password;

  public function __construct() {
    $this->username = "mdam@eal.dk";
    $this->password = "1234";
  }

  public function __get($property) {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  public function __set($property, $value) {
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }

    return $this;
  }
}

// class definition.
class Login {
  private $username;
  private $password;
  private $user;
  private $pass;

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
        $this->LogMeIn($username, $password);
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

  public function LogMeIn($username, $password) {
    $user_mdam = new User();
    $user = $user_mdam->__get(username);
    $pass = $user_mdam->__get(password);

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