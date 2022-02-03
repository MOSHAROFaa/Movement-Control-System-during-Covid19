<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTM Movement Control System</title>
  <link rel="stylesheet" href="index.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
<center>
  <div class="container">
    <div class="row-justify-content-center">

      <img src="Logo-UTM.png" style="width:30%;">
      <h2>UTM Movement Control System</h2>
      <form action="/Login_Diff_Users/loginController.php" method="POST">
        <div class="form-input">
          <input type="text" name="username" placeholder="Enter User Name" required style="width: 25%; background-color:aqua" />
        </div>
        <div class="form-input">
          <input type="password" name="password" placeholder="Enter User password" required style="width: 25%; background-color:aqua" />
        </div> 
        <br>

        <div class="form-input">
          <input type="radio" name="userType" value="Principle" required> Principal &nbsp;
          <input type="radio" name="userType" value="Academic Advisor" required> Academic Advisor &nbsp;
          <input type="radio" name="userType" value="UTM security" required> UTM Security &nbsp;
          <input type="radio" name="userType" value="student" required> Student
        </div>
        <br>

        
        <input type="submit" value="Login" class="btn-login" style="width: 25%; border-radius: 10%; " />
        
      </form>

    </div>
  </div>
  </center>
</body>

</html>