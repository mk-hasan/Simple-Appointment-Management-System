<html>
<head>
  <title>Home Page</title>
</head>
<body>
  <?php
  session_start();

  if (!isset($_SESSION['username'])) {
    $msg = "Please <a href = 'registration.php'>register</a> to view this page";
    echo $msg;
    ?>

    <form action="login.php" method="post">
     <p>Username: <input type="text" name="username" /></p>
     <p>Password: <input type="password" name="pass" /></p>
     <p><input type="submit" /></p>
   </form>  
   <?php      }
   else{
    ?>

    Welcome, <?php echo $_SESSION['username'] ?>.

    <br />

    Click <a href = "http://localhost/AP3/logout.php">here</a> to log out.


    <?php
  }
  ?>

</body>
</html>