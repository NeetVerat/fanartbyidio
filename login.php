<?php

error_reporting(0)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <form action="login_admin.php" method="post">
    <label for="username">USERNAME</label>
    <input type="text" name="username" id="" placeholder="Enter Username" value="<?php echo $username ?>" /><br /><br />
    <label for="password">PASSWORD</label>
    <input type="password" name="password" id="" placeholder="Enter Password"
      value="<?php echo $_POST['password']; ?>" /><br /><br />
    <button name=" submit">Sign In</button>
  </form>
</body>

</html>