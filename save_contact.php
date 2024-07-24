<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name=$_POST["name"];
$email=$_POST["email"];
$sbj=$_POST["subject"];
$msg=$_POST["message"];
$sql = "insert into contacts values ('" . $name."','".$email."','".$sbj."','".$msg."')";

if ($conn->query($sql) == TRUE) {
  echo("feedback sent successfully");
}
 else {
  echo "error";
}
$conn->close();
?>