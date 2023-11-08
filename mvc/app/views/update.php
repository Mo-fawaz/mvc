
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="edit?id=<?php echo $user['id'] ?>" method="post">
<label for="username">Username:</label>
<input type="text" id="username" name="username" value="<?php echo $user1?>" required>
<br>
<label for="password">Password:</label>
<input type="password" id="password" name="password" value="<?php echo $pass?>" required>
<br>
<input type="submit" value="update">

</form>
</body>
</html>
