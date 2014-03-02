<?php
if(isset($_POST['submit'])) {
  // call Login() when user submit.
  Login();
}

function Login() {
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
      verifyUser($username, $password, $db);
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
 ?>