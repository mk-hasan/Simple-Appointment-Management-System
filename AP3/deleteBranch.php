<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ap3";


  // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    $old_branch = $_POST["Old_Branch"];

    $sql = "DELETE FROM Branches WHERE id = '" . $old_branch . "' ";

    $result = $conn->query($sql);
}


$conn->close();
header("Location:http://localhost/AP3/admin.php");
die();
?>

</body>
</html>
