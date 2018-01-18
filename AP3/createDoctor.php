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
    $branch = $_POST["Branch"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];

    $sql = "INSERT INTO Doctor (branch, fname, lname) VALUES ('" . $branch . "', '" . $fname . "', '" . $lname . "')";

    $result = $conn->query($sql);
}


$conn->close();
header("Location:http://localhost/AP3/admin.php");
die();
?>

</body>
</html>
