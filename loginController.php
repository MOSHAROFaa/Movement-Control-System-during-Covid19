<?php
session_start();
require_once("DbConnection.php");
$connectionInstance = new DbConnection();
$conn = $connectionInstance->getDbConnection(); 

$msg = " ";
function checkParams() {
  return isset($_POST['username']) && isset($_POST['password']);
}

if (checkParams()) {


  $username = $_POST['username'];
  $password = $_POST['password'];
  $password = sha1($password);
  $userType = $_POST['userType'];

  
  $sql = "SELECT * FROM users WHERE username=? AND password=? AND user_type=?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $username, $password, $userType);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();

  

  $_SESSION['username'] = $row['username'];
  $_SESSION['role'] = $row['user_type'];
  
  //done
  echo "<br>Outside</br>";
  print_r($row['id']);
  echo $_SESSION['role'];

  // locating the pages with the database rows- id no

  if      ($row['id'] == 1 && $_SESSION['role'] == "student") {
    header("location:/Login_Diff_Users/student/index.html");
  } 
  else if ($row['id'] == 2 && $_SESSION['role'] == "Academic Advisor") {
    header("location:/Login_Diff_Users/AA/index.html");
  } 
  else if ($row['id'] == 3 && $_SESSION['role'] == "Principle") {
    header("location:/Login_Diff_Users/Principal/index.html");
  } 
  else if ($row['id'] == 4 && $_SESSION['role'] == "UTM security") {
    header("location:/Login_Diff_Users/UTM_security/index.html");
  } 
  else if ($row['id'] == 5 && $_SESSION['role'] == "student") {
    header("location:/Login_Diff_Users/student/index.html");
  } 
  else if ($row['id'] == 6 && $_SESSION['role'] == "student") {
    header("location:/Login_Diff_Users/student/index.html");
  } 
  else if ($row['id'] == 7 && $_SESSION['role'] == "student") {
    header("location:/Login_Diff_Users/student/index.html");
  }
  else if ($row['id'] == 8 && $_SESSION['role'] == "UTM security") {
    header("location:/Login_Diff_Users/UTM_security/index.html");
  }
  else if ($row['id'] == 9 && $_SESSION['role'] == "student") {
    header("location:/Login_Diff_Users/student/index.html");
  }
  else {
    //$msg = "Error! Please give right user name & password. ";
    //$_SESSION['error'] = $msg;
    header("location:/Login_Diff_Users/LogInError.php");
  }
  session_write_close();
}
