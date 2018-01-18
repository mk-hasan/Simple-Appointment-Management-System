<html>
<head>
  <title>Home Page</title>
</head>
<body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ap3";


  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  ?>
  <form action="deleteDoctor.php" method="post">
   <select name="Old_Doctor">
    <?php
    $id_doctor_query = "SELECT id, fname, lname FROM Doctor";
    $id_result = $conn->query($id_doctor_query);
    while ($row2 = $id_result->fetch_assoc()) {
      echo "<option value='".$row2['id']."'>" . $row2['fname'] . " " . $row2['lname'] . "</option>";
    }
    ?>
    
  </select>

  <p><input type="submit" /></p>
</form>  

<br />

Click <a href = "http://localhost/AP3/logout.php">here</a> to log out.



</body>
</html>
