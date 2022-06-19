<?php
session_start();
require("./connection.php");
echo "<pre>";
$data = $_POST;

$eusername = $_POST['username'];
$epassword = $_POST['password'];

$sql = "SELECT username, password FROM users WHERE username = '" . $eusername . "' AND password = '" . $epassword."'";
$result = $db->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_SESSION["user"] = [
        "username" => $row["username"],
    ];
    print_r($_SESSION['user']);
    header('Location: http://localhost/minipro/mini.php');
  }
} else {
  echo "<script>alert('Incorrect username or password')</script>";
}
   
  