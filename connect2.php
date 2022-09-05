<?php
  //Database connection

  $name = $_POST['name'];
  $email = $_POST['email'];

  $conn = new mysqli('localhost', 'id19234023_19025', 'Id19234023wasd-', 'id19234023_account');
  if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("INSERT INTO details(name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email); //i - integer, d - double, s - string, b - BLOB
    $stmt->execute();
    $stmt->close();
    $conn->close();
  header('Location:https://19025.000webhostapp.com/postorder.php');
  exit;
}
?>
