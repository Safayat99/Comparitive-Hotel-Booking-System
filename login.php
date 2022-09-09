<?php
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style type="text/css">
    body {
        height: 630px;
	margin-top: 0px;
  background-image: url("lib2.jpg");

}
</style>
</head>
<body>
<header style="height: 90px;">
  
<div class="logo">
      <h1 style="color: white; font-family: Georgia; font-size: 35px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">BookHotels</h1>
    </div>

      <nav>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="login.php">LOGIN</a></li>
          <li><a href="registration.php">REGISTRATION</a></li>
        </ul>
      </nav>
</header>
<section>
  <div class="log_img">
    <br> <br><br>
    <div class="box2">
        <h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br><br>
      <form name="login" action="" method="post">
        <br><br>
        <div class="login">
        <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br><br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br><br>
          <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px"> 
      </form>
     
    </div>
  </div>
</section>
<?php

    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `users` WHERE username='$_POST[username]' && password='$_POST[password]';");
      
      $row= mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
          
          <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
            <strong>The username and password doesn't match</strong>
          </div>    
        <?php
      }
    else
    {
      ?>
      <script type="text/javascript">
        window.location="hotels.php"
        </script>
        <?php
    }
    }
  ?>
</body>
</html>
