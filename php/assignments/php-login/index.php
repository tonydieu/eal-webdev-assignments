<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
</head>
<body>
  <form id="login" action="login.php" method="post">
    <fieldset>
      <legend>Login</legend>
      <input type="hidden" name="submitted" id="submitted" value="1">

      <label for="username">Username:</label>
      <input type="text" name="username" id="username" maxlength="50">

      <label for="password">Password:</label>
      <input type="password" name="password" id="password" maxlength="50">

      <input type="submit" name="submit" value="submit">
    </fieldset>
  </form>
</body>
</html>