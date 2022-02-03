<?php

session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != "UTM security") {
  header("location:index.php");
}
?>

<!--Html head-->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student</title>
  <link rel="stylesheet" href="index.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
</head>
<center style="background-color: #8a2be2;">
<img src="LOGO-UTM.png" style="width: 30%;"> 
<h1>UTM Movement Control System</h1>
<br> <br>
<h1> Hello <?= $_SESSION['username'] ?> </h1>
<h2>Our <?= $_SESSION['role'] ?> !!!</h2>
<br> <br> <br>

<body style="background-color: #8a2be2;">
  
  
  <a href="/Login_Diff_Users/UTM_security/index.html"> <button>Go to check Student Status</button> </a>
  
<!--Logout Button-->
<a href="logout.php" style="border-radius: 10%;" > <br> <br> <button>Logout</button>  </a>
</center>
</body>
</html>

