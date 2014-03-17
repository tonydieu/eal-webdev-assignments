<?php
function verifyUser($username, $password, $db) {

  $mdam_user = "mdam@eal.dk";
  $mdam_pass = "1234";

  if ((!($username == $mdam_user))) {
    echo "User not found.";
  }
  else {
    if (($username == $mdam_user) && ($password == $mdam_pass)) {
      echo "Logged in.";
    }
    else {
      echo "wrong username or password.";
    }
  }
}
?>