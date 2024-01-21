<?php
  if(file_exists(dirname(__FILE__).'/config.php')){
   require_once(dirname(__FILE__).'/config.php');
  }
  if(isset($_POST['submit'])){
     $username = isset($_POST['username'])? $_POST['username'] : '';
     $email = isset($_POST['email'])? $_POST['email'] : '';
     $password = isset($_POST['password'])? $_POST['password'] : '';
     $phone = isset($_POST['phone'])? $_POST['phone'] : '';
     $password = password_hash($password, PASSWORD_BCRYPT);

     $query = $connection->query("INSERT INTO user(username,email,password, phone)VALUES('$username','$email','$password','$phone')");
     if($query){
        echo"<h3>You have successfully Register</h3>";
       }
  }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <table>
            <tr>
                <td><label for="username">Username:</label></td>
                <td><input type="text" id="username" name="username" required></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
            <tr>
                <td><label for="phone">Phone:</label></td>
                <td><input type="tel" id="phone" name="phone" pattern="[0-9]{11}" placeholder="Enter 1-digit phone number" required></td>
            </tr>
            <tr>
                <td></td> <!-- Empty cell for spacing -->
                <td><input type="submit" value="Submit" name="submit"></td>
            </tr>
        </table>
    </form>
    <hr>
    <a href="users.php" target="_blank">See user list</a>
</body>
</html>