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
  <form action="deleteBranch.php" method="post">
   <select name="Old_Branch">
    <?php
    $id_branch_query = "SELECT name, id FROM Branches";
    $id_result = $conn->query($id_branch_query);
    while ($row2 = $id_result->fetch_assoc()) {
      echo "<option value='".$row2['id']."'>" . $row2['name'] . "</option>";
    }
    ?>
    
  </select>

  <p><input type="submit" /></p>
</form>  

<br />

Click <a href = "http://localhost/AP3/logout.php">here</a> to log out.



</body>
</html>
